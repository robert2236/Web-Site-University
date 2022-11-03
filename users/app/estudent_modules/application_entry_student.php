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
        <h1 style="text-align:center">Application Entry Student</h1>
  <form action="../modules/save_task.php" method="POST">
  <div class="card m-10" style="width: 70rem; display:flex; align-items:center; justify-content:center;">
  <div class="form-group">
    <label for="formGroupExampleInput">Career</label>
    <select class="form-control" style="width:30rem" name="degree" >
      <option>Select an option</option>
      <option>Information Technology</option>
      <option>Systems Technology</option>
      <option>Teleinformatics</option>
      <option>Telecommunications Technology</option>
      <option>Multimedia Engineering</option>
      <option>Mechatronics Engineering</option>
      <option>Electronic Engineering</option>
      <option>Systems Engineering and Related</option>
      <option>Aeronautical Engineering</option>
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Affair</label>
    <select class="form-control" style="width:30rem" name="modality" >
      <option>Select an option</option>
      <option>Claim of grades</option>
      <option>Register new thesis topic</option>
      <option>Tutor assignment</option>
    </select>
  </div>
  <div class="form-group pb-2">
  <label for="formGroupExampleInput">Observations</label>
    <textarea class="form-control" style="width:30rem" name="observation" rows="3"></textarea>
  </div>
  <div class="form-group pb-2">
    <label for="exampleFormControlFile1">Attachments</label>
    <input type="file" class="form-control-file" style="width:30rem" id="exampleFormControlFile1">
  </div>
  <div class="btn-group pb-2">
  <button class=" btn btn-success me-3" name="save_application_entry_student" value="Save">save</button>
  <a class=" btn btn-success" href="../../admin.php" name="back">back</a>
  </div>
  </div>
</form>
<?php include("../../../includesApp/footer.php")?>
