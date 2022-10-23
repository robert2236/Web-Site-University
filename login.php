
<?php include("includesApp/header.php")?>
<h1>Login</h1>
<div class="container p-4" >
<div class="col-md-4">
<div class="card card body mg">
<form action="validate.php" method="post">
  <div class="mb-3">
    <input type="text" class="form-control input-log"  name="user" placeholder="Enter your user">
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
<?php include("includesApp/footer.php")?>
