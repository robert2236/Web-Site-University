<?php
include("../db2.php")
?>
<?php include("../../../includesApp/header.php")?>
<?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
        <h1 style="text-align:center">Score</h1>
     <form action="save_task.php" method="POST">
     <div class="card m-10" style="width: 70rem; display:flex; align-items:center; justify-content:center;">
  <div class="form-group">
    <label for="formGroupExampleInput">Principal Score</label>
    <input type="text" class="form-control" style="width:30rem" name="principal_score">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Aditional Score</label>
    <input type="text" class="form-control" style="width:30rem" name="aditional_score">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Observation</label>
    <textarea class="form-control" style="width:30rem"  name="observation"rows="3"></textarea>
  </div>
  <div class="btn-group pb-2">
  <button class=" btn btn-success me-3" name="save_score">Save</button>
  <a class=" btn btn-success" href="../../admin.php" name="back">back</a>
  </div>
</form>
<?php include("../../../includesApp/footer.php")?>
