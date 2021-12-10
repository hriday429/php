<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="css/index.css">

    
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div class="form-group">
              
            </div>
            <div class="login-box">
              <h3>Administrator login</h3>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username"  class="form-control" autocomplete="off">
               
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password"  class="form-control" >
               
            </div>
            <div class="form-group">
              <input type="submit" name="login" class="btn btn-success ">
              
            </div>

              
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </section>
    <?php
    if (isset($_POST['login']))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];

      echo $username.'<br>'.$password;
    }





    ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">eamil</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>shah momtaj ala</td>
      <td>hriday</td>
      <td>hriday@gamil.com</td>
      <td>
        <div class="button-group">
          <button type="<button" class="btn btn-success btn-sm">Update</button>
          <button type="<button" class="btn btn-danger btn-sm">delete</button>
        </div>
      
      </td>

      <tr>
      <th scope="row">2</th>
      <td>shah momtaj ala</td>
      <td>hriday</td>
      <td>hriday@gamil.com</td>
      <td>
        <div class="button-group">
          <button type="<button" class="btn btn-success btn-sm">Update</button>
          <button type="<button" class="btn btn-danger btn-sm">delete</button>
        </div>
      
      </td>


      <tr>
      <th scope="row">3</th>
      <td>shah momtaj ala</td>
      <td>hriday</td>
      <td>hriday@gamil.com</td>
      <td>
        <div class="button-group">
          <a href="index.php? update=success" class="btn btn-success btn-sm">Update</a>
          <a href="index.php? delete=success"  class="btn btn-danger btn-sm">delete</a>
        </div>
      
      </td>
        
      
    </tr>
    
  </tbody>
</table>
            
          </div>
          
        </div>
        
      </div>
      
    </section>

    <?php

    if(isset($_GET['update']))
    {
      echo $_GET['update'];
      echo $_GET['delete'];
    }




    ?>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

   
  </body>
</html>