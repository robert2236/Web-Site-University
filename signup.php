<?php  

require 'database.php';

$message = '';


if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
  $stmt =  $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message =  '<h2 style="text-align:center">Successfully created new user</h2>' ;
  } else {
    $message = 'Sorry there must have been an issue creating your account';
  } 
  
}
         
?>
<?php include("includesApp/header.php")?>
<?php if(!empty($message)):?>
    <p><?=$message ?></p>
    <?php endif; ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class="container pt-5" >
<h1  style="margin-left:20%;">Signup</h1>
  <div class="mb-3">
  <input type="name" class="form-control input-log" style="width:50%" name="name" placeholder="Enter your first and last name" Required>
  </div>
  <div class="mb-3">
    <input type="email" class="form-control input-log" style="width:50%"  name="email" placeholder="Enter your email" Required>
  </div>
  <div class="mb-3 ">
    <input type="password" class="form-control input-log" style="width:50%" name="password" placeholder="Enter your password">
  </div>
  <div class="mb-3 ">
    <input type="password" class="form-control input-log" style="width:50%" name="confirm_password" placeholder="Confirm your password">
  </div>
  <div class="mb-3 form-check">
  </div>
  <button type="submit" class="btn btn-primary mb-5" style="margin-left:20%;"  value="submit" style="margin-bottom: 15px;" >Submit</button>
  </div>
</form>


<?php include("includesApp/footer.php")?>


