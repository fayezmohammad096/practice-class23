<?php

 include 'signup.php';

?>

<?php
  include_once 'connect.php';
 if(isset($_POST['signup'])){
   $email = mysqli_escape_string($conn,$_POST["email"]);/* mysqli_sceape_string($conn_linkadd,$_POST_method {its add for sucurety prefas} */
   $password = mysqli_escape_string($conn,md5($_POST["password"]));/* md5 for password encripting */
   $dob = mysqli_escape_string($conn,$_POST["date"]);

}else{
   http_response_code(403);
    echo "<script> alert('There was a problem with your submition,please try again')</script>";
 }
 

 $sql = "INSERT INTO user (id,email,password,dob) VALUES('','$email','$password','$dob')"; 
  $query = mysqli_query($conn,$sql);
  if($query){
    header('location:curd_opparation.php');
    http_response_code(200);
    echo "<script> alert('you are successrully registered')</script>";
  }else{
    http_response_code(500);
    echo "<script> alert('something went wrong')</script>";
  }

?>