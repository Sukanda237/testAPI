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
        <form>
          <div class="form-group">
            <label for="exampleInputCFN">Contact First Name</label>
              <input type="text"  name="first" class="form-control" id="exampleInputCFN" aria-describedby="firstHelp" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="exampleInputCLN">Contact Last Name</label>
              <input type="text"  name="last" class="form-control" id="exampleInputCLN" aria-describedby="lasttHelp" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="exampleInputCPN">Phone Number</label>
              <input type="text"  name="phone" class="form-control" id="exampleInputCPN" aria-describedby="phoneHelp" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Email</label>
              <input type="email"  name="email" class="form-control" id="exampleInputEmail" aria-describedby="phoneHelp" placeholder="Phone Number">
          </div>
          <div class="form-group">
          <label for="exampleInputtenant">Tenant Microsoft Market Category</label>
          <select class="custom-select" id="exampleInputtenant">
              <option value="corporate" name="corporate">Corporate</option>
          </select>
          </div>          
          <div class="form-group">
            <label for="exampleInputfirstname">First Name</label>
            <input type="text" name="firstname" class="form-control" id="exampleInputfirstname" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="exampleInputlastname">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="exampleInputlastname" placeholder="Last Name">
          </div><div class="form-group">
            <label for="exampleInputlastemail2">Email</label>
            <input type="email" name="email2" class="form-control" id="exampleInputlastname" placeholder="Last Name">
          </div><div class="form-group">
            <label for="exampleInputlastphone">Phone Number</label>
            <input type="text" name="phone2" class="form-control" id="exampleInputlastname" placeholder="Phone Number">
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