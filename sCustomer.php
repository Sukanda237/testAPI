<?php 

function http_request($url){

  // persiapan crul
  $sc = curl_init();


  // inisialisasi header atau set header
  $header =  array(
    'Accept: ', 
    'Content-Type: ',
    'Authorization: ' 
  );


  // set url
  curl_setopt($sc, CURLOPT_URL, $url);

  //set header
  curl_setopt($sc, CURLOPT_HTTPHEADER, $header);

  // haril dari transfer data
  curl_setopt($sc, CURLOPT_RETURNTRANSFER, 1);

  // ouput conten berupa strig
  $output = curl_exec($sc);

  // tutup crul
  curl_close($sc);

  // mengmbil hasil crul
  return $output;
}

if (isset($_POST['submit'])) { 

  $input = $_POST['input'];
  //set url
  $hasil = http_request("".$input);
  $hasil = json_decode($hasil, true);

  }else{  
    //set url
    $hasil = http_request("");
    $hasil = json_decode($hasil, true);
    
  }

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Test</title>
  </head>
  <body>

    <!-- awal navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <div class="container">    
    <a class="navbar-brand" href="#">Test API</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
       <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Customers</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="iCustomer.php">Input Customer</a>
      <a class="dropdown-item" href="sCustomer.php">Show Customer</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tenant</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="iTenant.php">Input Tenant</a>
      <a class="dropdown-item" href="sTenant.php">Show Tenant</a>
    </div>
  </li>
    </div>
  </div>
  </div>  
</nav>
<!-- akhir navbar -->


  <!-- awal content -->
    <div class="container">
      <div class="row mt-5"></div>

      <h3>CUSTOMERS LIST</h3>

      <div class="row mt-3"></div>

      <form method="post" action="">
      <div class="input-group mb-3">
       <input type="text" class="form-control" name="input" placeholder="Cari Customer">
      <div class="input-group-append">
      <button class="btn btn-dark" type="submit" name="submit" id="button-search">Search</button>
      </div>
      </div>
      </form>

      <div class="row mt-3"></div>


      <div class="row">
      
      <div class="col-md-12">     
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telepon</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i=0; $i <count($hasil) ; $i++) { ?>
          <tr>
            <td><?php echo $i+1; ?></td>
            <td><?php echo $hasil[$i]['CustomerName']; ?></td>
            <td><?php echo $hasil[$i]['Email']; ?></td>
            <td><?php echo $hasil[$i]['MainPhone']; ?></td>
          </tr>
         <?php } ?>
        </tbody>
      </table>
      </div>
    </div>
    </div>
  <!-- akhir content -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>