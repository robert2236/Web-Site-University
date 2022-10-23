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
<form action="save_task.php" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Type of request</label>
    <select class="form-control" name="request" >
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
    <textarea class="form-control" name="title" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Observation</label>
    <input type="text" class="form-control" name="observation" placeholder="Example input">
  </div>
  <button class=" btn btn-success" name="save_task_application_entry" value="Save Task">save</button>
  <button class=" btn btn-success" name="back">back</button>
</form>
<?php include("../../../includesApp/footer.php")?>
