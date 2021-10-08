<html>
<head>
  <title></title>
</head>
<body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">

    $(document).on('submit','#register_tb',function(e){
        e.preventDefault();

       
        $.ajax({
        method:"POST",
        url: "register.php",
        data:$(this).serialize(),
        success: function(data){
        $('#username').html(data);
        $('#email').html(data);
        $('#password').html(data);
        //$('#created_at').html(data);
        $('#register_tb').find('input').val('')
    }});
});

   </script>   
    </body>
    </html>



<?php

       include 'db.php';
      //include 'form2.php';

      if(isset($_POST['submit']))
      {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
       // $created_at = $_POST['created_at'];
        
         
        $query= "INSERT INTO `register_tb` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
         //$query = "INSERT INTO register (username,email,password) VALUES ('$username',$email','$password')";

         $result = mysqli_query($conn,$query);
          
          // echo $username;
          // echo $email;
          // echo $password;
          if($query == TRUE)
          {
            echo "<script>alert('record added')</script>";
         }
         else
          {
            echo "error";
          }

        // if(!$result)
        // {
        //   die("query failed");
        // }
        // else
        // {
        //     echo "Record created";
        // }

        header("location:login.php");

        
        
      }


?>

