<?php
      include 'db.php';

     //  var firstname=$_POST['fisrtname'];

     // extract function is used to import variable form an array into the current symbol table....

     extract($_POST);
     // $path   =   '../image/'.$image;
         
     //    move_uploaded_file($_FILES['image']['image'],$path);
     

     //isset function used to check whether variable is set or not...

     if(isset($_POST['readrecord']))
     {
         $data = '<table class="table table-bordered table-striped">
                     <tr>
                         <th>Id</th>
                         <th>Name</th>
                         
                         <th>Email</th>
                         <th>Password</th>
                         <th>Image</th>
                         <th>Edit Action</th>
                         <th>Delete Action</th>
                    <tr>';

                    $displayquery = "SELECT * FROM  crud_new ";

                    $result = mysqli_query($conn,$displayquery);

                    //mysqli_num_rows check the number of rows and only 1 row are in database then our query is fired bcoz it is > 0 ...

                       if(mysqli_num_rows($result) > 0)
                       {

                    //     //suppose we deleted number 3 in table then it will automatically show 4 number as number 3....it will set 123 properly..

                             $number = 1;

                     if(mysqli_num_rows($result))
                     {

                        //suppose we deleted number 3 in table then it will automatically show 4 number as number 3....it will set 123 properly..

                            $number = 1;

                        while($row = mysqli_fetch_array($result))
                        {

                            $data .= '<tr>

                            
                            <td>'.$row['id'].'</td>
                            <td>'.$row['name'].'</td>
                            
                            <td>'.$row['email'].'</td>
                            <td>'.$row['password'].'</td>
                            <td>'.$row['image'].'</td>


                           

                            <td>
                                <button onclick="GetUserDetails('.$row['id'].')"
                                     class="btn btn-warning">Edit</button>
                            </td>
                            <td>
                                 <button onclick="DeleteUser('.$row['id'].')"
                                       class="btn btn-danger">Delete</button>
                            </td>

                            <tr>';

                            //if row 1 have value in databse then display on screen again check when 2 row have value in database then again display in page number ++ is caheck again and again when all values are shown in page into databse....


                            $number++;
                        }
                }

                $data .= '</table>';
                  echo $data;
}
}



     if(isset($_POST['name']) && isset($_POST['email']) && $password = mD5($_POST['password']) && isset($_POST['image']))
      {
          $query="INSERT INTO crud_new (name, email, password, image) VALUES ('$name','$email','$password','$image')";

          mysqli_query($conn,$query);
      }


        //delete user records...


      if(isset($_POST['deleteid']))
      {      

        $userid = $_POST['deleteid'];

        $deletequery = "delete from crud_new where id='$userid' ";

        mysqli_query($conn,$deletequery);
      }


      // get userid for update...


      if(isset($_POST['id']) && isset($_POST['id']) != "")
      {

        //if we take 1 id from database then it will show 1 id on our page...

          $user_id = $_POST['id'];

          $query = "SELECT * FROM crud_new WHERE id ='$user_id' ";

          if(!$result = mysqli_query($conn,$query))
          {
              exit(mysqli_error());

          }

          //if condition is true then we get data in array formate...

          $response = array();

          if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result))
            {
                $response = $row;
            }
          }
          else{
              $response['status'] = 200;
              $response['message'] = "data not found";
          }

          //convert array formate into json formate using json_encode..
          //php has some built-in function to handle json..object in php can be converted json by using php function json_encode()...

          echo json_encode($response);
      }
      else
      {
          $response['status'] = 200;
          $response['message'] = "Invalid Request!";
      }

      //update table...


      if(isset($_POST['hidden_user_idupd'])){

        $hidden_user_idupd = $_POST['hidden_user_idupd'];
        $nameupd = $_POST['nameupd'];
       
        $emailupd = $_POST['emailupd'];
        $passwordupd = $_POST['passwordupd'];
        $imageupd = $_POST['imageupd'];


        $query = "UPDATE `crud_new` SET `name`='$nameupd',`email`='$emailupd',`password`='$passwordupd',`image`='$imageupd', WHERE id ='$hidden_user_idupd'";

        if(!$result = mysqli_query($conn,$query)){
            exit(mysqli_error());
        }
       
    }


  

?>
