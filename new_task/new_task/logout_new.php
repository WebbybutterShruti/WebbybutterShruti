<?php

session_start();
unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["user_id"]);

header('location:login_new.php');


?>