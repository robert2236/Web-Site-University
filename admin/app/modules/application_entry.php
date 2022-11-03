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
        <h1 style="text-align:center">Application Entry</h1>
<form action="save_task.php" method="POST">
<div class="card m-10" style="width: 70rem; display:flex; align-items:center; justify-content:center;">
  <div class="form-group">
    <label for="formGroupExampleInput">Type of request</label>
    <select class="form-control" style="width:30rem" name="request" >
      <option>Select an option</option>
      <option>Opt for degree</option>
      <option>Exam Review</option>
      <option>tutor assignment</option>
      <option>Thesis Approval Status</option>
      <option>Thesis Review</option>
      <option>Scores</option>
    </select>
  </div>
  <div class="form-group">
  <label for="formGroupExampleInput">Title</label>
    <textarea class="form-control" style="width:30rem" name="title" rows="3"></textarea>
  </div>
  <div class="form-group pb-2">
    <label for="formGroupExampleInput">Observation</label>
    <input type="text" class="form-control" style="width:30rem" name="observation" >
  </div>
  <div class="btn-group pb-2">
  <button class=" btn btn-success me-3 " name="save_task_application_entry" value="Save Task">save</button>
  <a class=" btn btn-success" href="../../admin.php" name="back">back</a>
  </div>
  </div>
</form>
<?php include("../../../includesApp/footer.php")?>
