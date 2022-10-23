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
    $message = 'Successfully created new user';
  } else {
    $message = 'Sorry there must have been an issue creating your account';
  }
}

?>
<?php include("includesApp/header.php")?>
<?php require 'partials/header.php' ?>
<?php if(!empty($message)):?>
    <p><?=$message ?></p>
    <?php endif; ?>

<h1>Signup</h1>
<div class="container p-4" >
<div class="col-md-4">
<div class="card card body mg">
<form action="signup.php" method="POST">
  <div class="mb-3">
  <input type="name" class="form-control input-log"  name="name" placeholder="Enter your first and last name">
  </div>
  <div class="mb-3">
    <input type="email" class="form-control input-log"  name="email" placeholder="Enter your email">
  </div>
  <div class="mb-3 ">
    <input type="password" class="form-control input-log" name="password" placeholder="Enter your password">
  </div>
  <div class="mb-3 ">
    <input type="password" class="form-control input-log" name="confirm_password" placeholder="Confirm your password">
  </div>
  <div class="mb-3 form-check">
  </div>
  <button type="submit" class="btn btn-primary " value="submit" style="margin-bottom: 15px;" >Submit</button>
</form>
</div>
</div>
</div>
<?php include("includesApp/footer.php")?>