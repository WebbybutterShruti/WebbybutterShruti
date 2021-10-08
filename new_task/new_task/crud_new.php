<?php
      include 'db.php';

     //create data..

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $image = $_FILES['image'];

      $query = "INSERT INTO _new (name , email,password,image) VALUES ('$name','$email','$password','$image')";

      mysqli_query($conn,$query);
      
  ?>
