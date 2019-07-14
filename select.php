<?php
include 'connect.php';
$id ="";
$email ="";
$password ="";
$dob = "";
if(isset($_GET['id'])){
    $sql = "SELECT * FROM user WHERE id =".$_GET['id'];
    $query = mysqli_query($conn,$sql);
    if($query){
        if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){
                $id =$row['id'];
                $email =$row['email'];
                $password =$row['password'];
                $dob = $row['dob'];
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center text-danger">Crud operation</h2>
  <p class="text-center text-danger">User information:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Email</th>
        <th>DAte of Birth</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
 <!-- data collect from db_table  -->   
<?php
    include "connect.php";

    $sql = "SELECT * FROM user";
    $query = mysqli_query($conn,$sql);
    if($query){
        if(mysqli_num_rows($query)>0){
            while ($row=mysqli_fetch_assoc($query)){
                

?>    
      <tr>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['dob']?></td>
        <td><a href="EDIT.PHP?id=<?=$row['id'];?>" class="btn btn-success">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
            </td>
      </tr>
<?php
            }
        }
    }

?> 
<!-- **** -->     
    
    </tbody>
  </table>
</div>

</body>
</html>
