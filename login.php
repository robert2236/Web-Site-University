<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>


<?php include("includes/header.php")?>
<?php require 'partials/header.php' ?>
<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
<h1>Login</h1>
<div class="container p-4" >
<div class="col-md-4">
<div class="card card body mg">
<form action="login.php" method="post">
  <div class="mb-3">
    <input type="email" class="form-control input-log"  name="email" placeholder="Enter your email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 ">
    <input type="password" class="form-control input-log" name="password" placeholder="Enter your password">
  </div>
  <div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary " style="margin-bottom: 15px;" >Submit</button>
</form>
</div>
</div>
</div>
<?php include("includes/footer.php")?>
