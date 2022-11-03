<?php include("includesApp/header.php")?>
<form action="validate.php" method="post">
  <div class="container pt-5">
  <h1  style="margin-left:20%;">Login</h1>    
<div class="mb-3">
<input type="text" class="form-control input-log" style="width:50%;"  name="user" placeholder="Enter your user">
</div>
<div class="mb-3">
<input type="password" class="form-control input-log" style="width:50%;" name="password" placeholder="Enter your password">
</div>
  <button type="submit" class="btn btn-primary mb-5" style="margin-left:20%;" style="margin-bottom: 15px;" >Submit</button>
  </div>
</form>
<?php include("includesApp/footer.php")?>

