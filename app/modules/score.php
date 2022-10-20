<?php
include("../db2.php")
?>
<?php include("../../includesApp/header.php")?>
<?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
     <form action="save_task.php" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Principal Score</label>
    <input type="text" class="form-control" name="principal_score">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Aditional Score</label>
    <input type="text" class="form-control" name="aditional_score">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Observation</label>
    <textarea class="form-control"   name="observation"rows="3"></textarea>
  </div>
  <button class=" btn btn-success" name="save_score">Save</button>
  <button class=" btn btn-success" >Back</button>
</form>
<?php include("../../includesApp/footer.php")?>
