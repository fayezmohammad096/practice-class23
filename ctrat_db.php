<?php
//surverName=localhost
//userName=root
//password=""
//databaseName=
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_db";

$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection failed".mysqli_connect_error());    
}


$sql = "Create DATABASE $dbname";//this is important for all
$query = mysqli_query($conn, $sql);//this line is important for all
if($query){
    echo "database created successfully";

}else{
    echo "DATABASE DOES CRATE".mysqli_error($conn);
}
mysqli_close($conn);

?>