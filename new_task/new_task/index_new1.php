<?php
      include 'db.php';
      session_start();

?>

<html>

<head>

	<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Yoha –  HTML5 Bootstrap Admin Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin dashboard html template, admin dashboard template bootstrap 4, analytics dashboard templates, best admin template bootstrap 4, best bootstrap admin template, bootstrap 4 template admin, bootstrap admin template premium, bootstrap admin ui, bootstrap basic admin template, cool admin template, dark admin dashboard, dark admin template, dark dashboard template, dashboard template bootstrap 4, ecommerce dashboard template, html5 admin template, light bootstrap dashboard, sales dashboard template, simple dashboard bootstrap 4, template bootstrap 4 admin">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />

		<!-- TITLE -->
		<title>Yoha –  HTML5 Bootstrap Admin Template</title>

		<!-- BOOTSTRAP CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="assets/css/style.css" rel="stylesheet"/>
		<link href="assets/css/skin-modes.css" rel="stylesheet"/>
		<link href="assets/css/dark-style.css" rel="stylesheet"/>

		<!-- SIDE-MENU CSS -->
		<link href="assets/css/closed-sidemenu.css" rel="stylesheet">

		<!--PERFECT SCROLL CSS-->
		<link href="assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="assets/css/icons.css" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />

	</head>
<body>

<?php  

       include 'header.php';
?>


<?php  

        include 'sidebar.php';
?>




<!-- PAGE -->
   
              <div class="app-content">
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>

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
      <form action="" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
         <div class="form-group">
             <label>ID:</label>
             <input type="text" name="id" id="id" class="form-control" placeholder="Id">
         </div>

         <div class="form-group">
             <label>Name:</label>
             <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="name is required">
         </div>

         <div class="form-group">
             <label>Email:</label>
             <input type="text" name="email" id="email" class="form-control" placeholder="Email" required="email is required">
         </div>

         <div class="form-group">
             <label>Password:</label>
             <input type="password" name="password" id="password" class="form-control" placeholder="password" required="password is required">
         </div>

         <div class="form-group">
             <label>Image:</label>
             <input type="file" name="image" id="image" class="form-control" placeholder="image">
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
      <form action="" method="POST" enctype="multipart/form-data">
       <div class="modal-body">
         <div class="form-group">
             <label>update_Id:</label>
             <input type="text" name="update_id" id="update_id" class="form-control" placeholder="Id">
         </div>

      <div class="modal-body">
         <div class="form-group">
             <label>update_Name:</label>
             <input type="text" name="update_name" id="update_name" class="form-control" placeholder="Name">
         </div>

         

         <div class="form-group">
             <label>update_Email:</label>
             <input type="text" name="update_email" id="update_email" class="form-control" placeholder="Email">
         </div>

         <div class="form-group">
             <label>update_password:</label>
             <input type="password" name="update_password" id="update_password" class="form-control" placeholder="password">
         </div>

         <div class="form-group">
             <label>update_image:</label>
             <input type="file" name="update_image" id="update_image" class="form-control" placeholder="image" >
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
               <!-- PAGE-HEADER END -->

						<!-- ROW-1 -->

						<!-- ROW-1 CLOSED -->
			


</div>

</div>

<?php  

   include 'footer.php';
?>

<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="assets/js/jquery-3.4.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/plugins/bootstrap/js/popper.min.js"></script>

		<!-- SPARKLINE JS-->
		<script src="assets/js/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="assets/js/circle-progress.min.js"></script>

		<!-- RATING STARJS -->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- EVA-ICONS JS -->
		<script src="assets/iconfonts/eva.min.js"></script>

		<!-- INTERNAL CHARTJS CHART JS -->
		<script src="assets/plugins/chart/Chart.bundle.js"></script>
		<script src="assets/plugins/chart/utils.js"></script>

		<!-- INTERNAL PIETY CHART JS -->
		<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="assets/plugins/peitychart/peitychart.init.js"></script>

		<!-- SIDE-MENU JS-->
		<script src="assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- PERFECT SCROLL BAR js-->
		<script src="assets/plugins/p-scroll/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/sidemenu/sidemenu-scroll.js"></script>

		<!-- CUSTOM SCROLLBAR JS-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- SIDEBAR JS -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>

		<!-- INTERNAL APEXCHART JS -->
		<script src="assets/js/apexcharts.js"></script>

		<!--INTERNAL  INDEX JS -->
		<script src="assets/js/index1.js"></script>

		<!-- CUSTOM JS -->
		<script src="assets/js/custom.js"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



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
                url:"crud.php",
                type:"post",
                data:{ readrecord:readrecord },
                success:function(data,status){
                  $('#records_contant').html(data);

                }


          });
        }
     



        function addRecord()
        {
          //take value of (id =$firstname) and store in variable firstname...

            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var image = $('#image').val();

            //ajax method is uesd to perform an ajax(asynchronous HTTP) request...

            $.ajax({

              //url:name/value pairs...

                     url:"crud.php",
                     type:'POST', 

                     //data is used for specifies data to be sent...first firstname is used to move backend1 page and second firstname is user take into databse...

                     data:{
                         name :name,
                         email :email,
                         password :password,
                         image :image,
                     },

                     //a function should be run when request succeed...

                     success:function(data,status){
                         readRecords();
                     }
            });
           
        }


        function DeleteUser(deleteid){
          var conf = confirm("Are you sure you want to delete this record");

          if(conf == true){
            $.ajax({
                     url:"crud.php",
                     type:'POST',
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

              $.post("crud.php", {
                   id:id
              },
               function(data,status)
               {

                //in backend we take data as json formate...json.parse()parses a string,written in json formate,and returns a javascript object...

                  var user = JSON.parse(data);
                  $('#update_name').val(user.name);
                  
                  $('#update_email').val(user.email);
                  $('#update_password').val(user.password);
                  $('#update_image').val(user.image);
                   
              });

              $('#update_user_modal').modal("show");
         }

         function updateuserdetail()
         {

                var nameupd = $('#update_name').val();
               
                var emailupd = $('#update_email').val();
                var passwordupd = $('#update_password').val();
                var imageupd = $('#update_image').val();

                var hidden_user_idupd = $('#hidden_user_id').val();

                $.post("crud.php",{

                  hidden_user_idupd:hidden_user_idupd,

                  nameupd:nameupd,
                  emailupd:emailupd,
                  passwordupd:passwordupd,
                  imageupd:imageupd
                },

                //click on edit and show pop up model of update...



                function(data,status){
                   $('#update_user_modal').modal("hide");
                      readRecords();
                });
               
         } 

        

  </script>




					       
</body>
</html>