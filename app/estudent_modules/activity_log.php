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
    <label for="formGroupExampleInput">Career</label>
    <input type="text" class="form-control" name="career" placeholder="career">
  </div>
  <div class="form-group">
  <label for="formGroupExampleInput">Description</label>
    <textarea class="form-control" name="project" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Observation</label>
    <input type="text" class="form-control" name="observation" placeholder="Example input">
  </div>
  <button class=" btn btn-success" name="save_task" value="Save Task">save</button>
  <button class=" btn btn-success" name="back">back</button>
</form>
<?php include("../../includesApp/footer.php")?>
