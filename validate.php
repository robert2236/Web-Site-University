<?php
$user=$_POST['user'];
$password=$_POST['password'];
session_start();
$_SESSION['user']=$user;

$conn=mysqli_connect("localhost","root","","rol");

$query="SELECT*FROM users where user='$user' and password='$password'";
$result=mysqli_query($conn,$query);

$rows=mysqli_fetch_array($result);

if($rows['id_position']==1){ //manager
    header("location: admin/admin.php");

}else
if($rows['id_position']==2){ //users
header("location: users/users.php");
}
else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($result);
mysqli_close($conn);
