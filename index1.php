<?php  
     include 'db.php';

?>

<html>
    <head>
        <title></title>

        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

    <div class="container">
          <h1 class="text-primary text-uppercase text-center"> AJAX CRUD OPERATION </h1>

           <div class="d-flex justify-content-end">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open modal
               </button>
           </div>

           <div>
              <h2 class="text-primary">All Records</h2>
              <div id="records_contant"></div>
           </div>
    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">AJAX Crud Operation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="form-group">
             <label>Firstname:</label>
             <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
         </div>

         <div class="form-group">
             <label>Lastname:</label>
             <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
         </div>

         <div class="form-group">
             <label>Email Id:</label>
             <input type="text" name="email" id="email" class="form-control" placeholder="Email">
         </div>

         <div class="form-group">
             <label>password:</label>
             <input type="password" name="password" id="password" class="form-control" placeholder="password">
         </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


       <!-- update model -->


<div class="modal" id="update_user_modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">AJAX Crud Operation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="form-group">
             <label>update_Firstname:</label>
             <input type="text" name="update_firstname" id="update_firstname" class="form-control" placeholder="First Name">
         </div>

         <div class="form-group">
             <label>update_Lastname:</label>
             <input type="text" name="update_lastname" id="update_lastname" class="form-control" placeholder="Last Name">
         </div>

         <div class="form-group">
             <label>update_Email Id:</label>
             <input type="text" name="update_email" id="update_email" class="form-control" placeholder="Email">
         </div>

         <div class="form-group">
             <label>update_password:</label>
             <input type="password" name="update_city" id="update_password" class="form-control" placeholder="password">
         </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateuserdetail()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        <input type="hidden" name="" id="hidden_user_id">
      </div>

    </div>
  </div>
</div>


    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>

    //when page is load display records..without refresh the page it will automatically display records(when we click on save button it will display records page) on our page(use $(document) .ready (function())... 

    $(document).ready(function(){
           
            readRecords();
    });

   
       
        function readRecords(){
          var readrecord = "readrecord";
          $.ajax({
                url:"backend1.php",
                type:"post",
                data:{ readrecord:readrecord },
                success:function(data,status){
                  $('#records_contant')
										.html(data);

                }


          });
        }
     



        function addRecord()
        {
          //take value of (id =$firstname) and store in variable firstname...

            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var password = $('#password').val();

            //ajax method is uesd to perform an ajax(asynchronous HTTP) request...

            $.ajax({

              //url:name/value pairs...

                     url:"backend1.php",
                     type:'post', 

                     //data is used for specifies data to be sent...first firstname is used to move backend1 page and second firstname is user take into databse...

                     data:{
                         firstname :firstname,
                         lastname :lastname,
                         email :email,
                         password :password
                     },

                     //a function should be run when request succeed...

                     success:function(data,status){
                         readRecords();
                     }
            });
           
        }


        function DeleteUser(deleteid){
          var conf = confirm("Are you sure");

          if(conf==true){
            $.ajax({
                     url:"backend1.php",
                     type:'post',
                     data:{
                       deleteid:deleteid
                     },
                     success:function(data,status){
                         readRecords();
                     }
            });
          }
				}



        function GetUserDetails(id){

              $('#hidden_user_id').val(id);

              //in post we have three data that are url,data nad callback...
              //load data from server using post method..
              //url : string containing url to which request is sent...(backend1.php)
              //data : object or string that is sent to server with request..(id:id)
              //callback : function that is executed if request is succed..(data,status)

              $.post("backend1.php", {
                   id:id
              },
               function(data,status)
               {

                //in backend we take data as json formate...json.parse()parses a string,written in json formate,and returns a javascript object...

                  var user = JSON.parse(data);
                  $('#update_firstname').val(user.firstname);
                  $('#update_lastname').val(user.lastname);
                  $('#update_email').val(user.email);
                  $('#update_password').val(user.password);
                   
              }
              );

              $('#update_user_modal').modal("show");
         }

         function updateuserdetail()
         {

                var firstnameupd = $('#update_firstname').val();
                var lastnameupd = $('#update_lastname').val();
                var emailupd = $('#update_email').val();
                var passwordupd = $('#update_password').val();

                var hidden_user_idupd = $('#hidden_user_id').val();

                $.post("backend1.php",{

                  hidden_user_idupd:hidden_user_idupd,

                  firstnameupd:firstnameupd,
                  lastnameupd:lastnameupd,
                  emailupd:emailupd,
                  passwordupd:passwordupd,
                },

                //click on edit and show pop up model of update...



                function(data,status){
                   $('#update_user_modal').modal("hide");
                      readRecords();
                }
              );
               
         }


  </script>

</body>
</html>
