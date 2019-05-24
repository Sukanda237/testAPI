<?php 
  if (isset($_POST['submit'])) {
    $nama = $_POST['customerName'];
    $email = $_POST['email'];
    $mainPhone = $_POST['mainPhone'];
    $street1primary = $_POST['street1primary'];
    $cityprimary = $_POST['cityprimary'];
    $postcodeprimary = $_POST['postcodeprimary'];
    $stateprimary = $_POST['stateprimary'];
    $countryprimary = $_POST['countryprimary'];
    $street1 = $_POST['street1'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    $data = array(
      'customerName' => $nama,
      'mainPhone' => $mainPhone,
      'email' => $email,
      'address' =>  array(
                    'street1' => $street1primary, 
                    'city' => $cityprimary,
                    'postcode' => $postcodeprimary,
                    'country' => $stateprimary,
                    'iso2Code' => $countryprimary
                    ),
      'billingAddress' => array(
                    'street1' => $street1, 
                    'city' => $city,
                    'postcode' => $postcode,
                    'country' => $state,
                    'iso2Code' => $country
                    )
    );
  
    //merubah array menjadi json
    $str = json_encode($data);

    // persiapan crul
    $sc = curl_init();
  
    // inisialisasi header atau set header
  $header =  array(
    'Accept: ', 
    'Content-Type: ',
    'Authorization: ' 
  );

  // set url
  curl_setopt($sc, CURLOPT_URL, url);

  //set header
  curl_setopt($sc, CURLOPT_HTTPHEADER, $header);

  // post data
  curl_setopt($sc, CURLOPT_POST, 1); 

  // data yang dikirim
  curl_setopt($sc, CURLOPT_POSTFIELDS, $str);

  // hasil dari transfer data
  curl_setopt($sc, CURLOPT_RETURNTRANSFER, 1);

  // ouput conten berupa strig
  $output = curl_exec($sc);

  // tutup crul
  curl_close($sc);

  // mengmbil hasil crul
  //return $output;
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

      <div class="row">

      <div class="col-md-4">
      </div>

      <div class="col-md-4">
        <form method="Post" action="">
          <div class="form-group">
            <label for="exampleInputCustomer">Customer</label>
              <input type="text" name="customerName" class="form-control" id="exampleInputCustomer" aria-describedby="emailHelp" placeholder="Enter Customer">
          </div>
          <div class="form-group">
            <label for="exampleInputMail">Mail</label>
            <input type="Mail" name="email" class="form-control" id="exampleInputMail" placeholder="Mail">
          </div>
            <div class="form-group">
            <label for="exampleInputPhone">MainPhone</label>
            <input type="Text" name="mainPhone" class="form-control" id="exampleInputPhone" placeholder="Phone">
          </div>
          <h5>Primary Address</h5>
          <div class="form-group">
            <label for="exampleInputStreet">Street1</label>
            <input type="Text" name="street1primary" class="form-control" id="exampleInputStreet" placeholder="Street1">
          </div>
          <div class="form-group">
            <label for="exampleInputCity">City</label>
            <input type="Text" name="cityprimary" class="form-control" id="exampleInputCity" placeholder="City">
          </div>
          <div class="form-group">
            <label for="exampleInputPost">Post Code</label>
            <input type="Text" name="postcodeprimary" class="form-control" id="exampleInputPost" placeholder="Post">
          </div>
          <div class="form-group">
            <label for="exampleInputState">State</label>
            <input type="Text" name="stateprimary" class="form-control" id="exampleInputState" placeholder="State">
          </div>
          <div class="form-group">
            <label for="exampleInputCountry">Country</label>
            <input type="Text" name="countryprimary" class="form-control" id="exampleInputCountry" placeholder="Mail">
          </div>
          <h5>Billing Address</h5>
          <div class="form-group">
            <label for="exampleInputStreet">Street1</label>
            <input type="Text" name="street1" class="form-control" id="exampleInputStreet" placeholder="Street1">
          </div>
          <div class="form-group">
            <label for="exampleInputCity">City</label>
            <input type="Text" name="city" class="form-control" id="exampleInputCity" placeholder="City">
          </div>
          <div class="form-group">
            <label for="exampleInputPost">Post Code</label>
            <input type="Text" name="postcode" class="form-control" id="exampleInputPost" placeholder="Post">
          </div>
          <div class="form-group">
            <label for="exampleInputState">State</label>
            <input type="Text" name="state" class="form-control" id="exampleInputState" placeholder="State">
          </div>
          <div class="form-group">
            <label for="exampleInputCountry">Country</label>
            <input type="Text" name="country" class="form-control" id="exampleInputCountry" placeholder="Mail">
          </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>

      <div class="col-md-4">
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