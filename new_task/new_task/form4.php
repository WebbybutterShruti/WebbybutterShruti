<html>
<head>
  <title></title>
</head>
<body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">

    $(document).on('register','#new_register',function(e){
        e.preventDefault();

       
        $.ajax({
        method:"POST",
        url: "register_new.php",
        data:$(this).serialize(),
        success: function(data){
        $('#name').html(data);
        $('#email').html(data);
        $('#password').html(data);
        $('#image').html(data);
        $('#new_register').find('input').val('')
    }});
});

   </script>   
    </body>
    </html>



<?php

       include 'db.php';
      
      if(isset($_POST['register']))
      {
        $name = $_POST['name'];
        $email = $_POST['email'];
        //$password = $_POST['password'];
        $image = $_FILES['image'];

         $password = mD5($_POST['password']);
        
         
        $query= "INSERT INTO new_register (name, email, password, image) VALUES ('$name', '$email', '$password','$image')";
        

         $result = mysqli_query($conn,$query);
          
          
          if($query == TRUE)
          {
            echo "<script>alert('record added')</script>";
         }
         else
          {
            echo "error";
          }

        
        header("location:login_new.php");

        
        
      }


?>

