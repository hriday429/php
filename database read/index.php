<?php include "db.php"; ?>

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
          <div class="col-md-12">
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">user name</th>
      <th scope="col">password</th>
      <th scope="col">firstrname</th>
      <th scope="col">lastname</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">joindate</th>
      <th scope="col">action</th>
    </tr>
  </thead>


  <tbody>
    <?php

    $query ="SELECT * FROM read_bd";
    $allread_bd= mysqli_query($db,$query);

    while ( $row=  mysqli_fetch_assoc($allread_bd) ) {
      $id= $row['id'];
      $username= $row['username'];
      $password= $row['password'];
      $firstrname= $row['first_name'];
      $lastname= $row['Last_name'];
      $phone = $row['Phone'];
      $email= $row['email'];
      $date= $row['join_date'];?>

     
    <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $username; ?></td>
      <td><?php echo $password; ?></td>
      <td><?php echo $firstrname; ?></td>
      <td><?php echo $lastname; ?></td>
      <td><?php echo $phone; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $date; ?></td>
      
      
      <td>
        <div class="btn-group">
            <a href= "index.php?update=success" type="button" class="btn btn-success bt-sm">Update</a>
            <a href="index.php?delete=fail" type="button" class="btn btn-danger bt-sm">Delete</a>
        </div>
      </td>
    </tr>

    <?php }

    ?>

  </thead>
    
    </table>
   
     
    
 
            
          </div>
          
        </div>
        
      </div>
      
    </section>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

   
  </body>
</html>