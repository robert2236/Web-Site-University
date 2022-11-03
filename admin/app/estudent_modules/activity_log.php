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
        <h1 style="text-align:center">Activity Log</h1>
<form action="../modules/save_task.php" method="POST">
<div class="card m-10" style="width: 70rem; display:flex; align-items:center; justify-content:center;">
  <div class="form-group">
    <label for="formGroupExampleInput">Career</label>
    <input type="text" class="form-control" style="width:30rem"name="career" >
  </div>
  <div class="form-group">
  <label for="formGroupExampleInput">Description</label>
    <textarea class="form-control" style="width:30rem" name="project" rows="3"></textarea>
  </div>
  <div class="form-group pb-2">
    <label for="formGroupExampleInput">Observation</label>
    <input type="text" class="form-control" style="width:30rem" name="observation" >
  </div>
  <div class="btn-group pb-2 ">
  <button class=" btn btn-success me-3 "  name="save_task_activity_log" value="Save Task">save</button>
  <a class=" btn btn-success" href="../../admin.php" name="back">back</a>
  </div>
  </div>
</form>
<?php include("../../../includesApp/footer.php")?>

