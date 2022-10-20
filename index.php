<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<?php include("includesApp/header.php")?>

<?php if(!empty($user)): ?>
  <br> Welcome. <?= $user['email']; ?>
  <br>You are Successfully Logged In
  <a href="logout.php">
    Logout
  </a>
<?php else: ?>
    <h1> Please Login or Signup</h1>
    <button class="btn btn-success"> <a href="login.php">Login</a> </button>
    <button class="btn btn-warning"> <a href="signup.php">Register</a> </button>
<?php endif; ?>

<?php include("includesApp/footer.php")?>
