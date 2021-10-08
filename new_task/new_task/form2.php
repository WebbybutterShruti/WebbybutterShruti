

<html>
<head>
  <title></title>
</head>
<body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){
  $('#email').blur(function(){
             //alert("hello");
             var email = $(this).val();
             //alert(email);

             $.ajax({
        url: "login_new.php",
        method:"POST",
        
        data:{user_email:email},
        success: function(data){
          //  alert(response);
          //  $('.error_email').text(response);
          if(data != '0')
          {
            $('#availability').html('<span class="text-success">EMAIL ALREADY EXISTS </span>');
            $('#login').attr("disabled",false);
          }
          else{
            $('#availability').html('<span class="text-danger">EMAIL AVAILABLE </span>');
            $('#login').attr("disabled",false);
          }
 
        }
});
           }
         }


    $(document).on('login','#new_login',function(e)
    {

        e.preventDefault();

        $.ajax({
        method:"POST",
        url: "login_new.php",
        data:$(this).serialize(),
        success: function(data){
        $('#name').html(data);
        $('#email').html(data);
        $('#password').html(data);
        $('#new_login').find('input').val('')
    }});
       
        });
    
          



   </script>   
    </body>
    </html>

 <?php

       include 'db.php';
      //include 'form2.php';

      if(isset($_POST['login']))
      {
        $name = $_POST['name'];
        $email = $_POST['email'];
        //$password = $_POST['password'];
        
        $password = mD5($_POST['password']);
        

         $query = "INSERT INTO new_login (name,email,password) VALUES ('$name','$email','$password')";

        $result = mysqli_query($conn,$query);

          if($query == TRUE)
          {
            echo "<script>alert('record added')</script>";
         }
         else
          {
            echo "error";
          }

          session_start();

            //$emailId name no session variable create karyo che
            //session means always unique id.so everytime we take session variable is id.bcoz id always unique.
             
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            // echo "success";
            ?>
            <script>
             //        setTimeout(function () {
             //    window.location.href = "index.php"; //will redirect to your blog page (an ex: blog.html)
             // }, 2000);
             //window.location.href = "index.php";
                    window.location.href = "index.php";

             </script>
            <?php
      }
      else{
          echo mysqli_error($conn);
      }
    
       
       //for unique email..

     if(isset($_POST["user_email"]))
      {
        $email = mysqli_real_escape_string($conn, $_POST["user_email"]);
        $email = $_POST['email'];

        $query = "SELECT email FROM new_login WHERE email = '".$email."'";
        $result = mysqli_query($conn,$query);
        //echo mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0)
        {
           echo "email already exists";
      //    
      ?>
      <!-- //     <script>alert("Email already exists");</script>
      // -->  <?php }

        else{
          echo "it's avilable";
        }
      }
      ?>

