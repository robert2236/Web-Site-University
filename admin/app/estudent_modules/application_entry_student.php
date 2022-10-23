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
  <form action="../modules/save_task.php" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Career</label>
    <select class="form-control" name="degree" >
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
    <select class="form-control" name="modality" >
      <option>Select an option</option>
      <option>Claim of grades</option>
      <option>Register new thesis topic</option>
      <option>Tutor assignment</option>
    </select>
  </div>
  <div class="form-group">
  <label for="formGroupExampleInput">Observations</label>
    <textarea class="form-control" name="observation" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Attachments</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button class=" btn btn-success" name="save_application_entry_student" value="Save">save</button>
  <button class=" btn btn-success" name="back">back</button>
</form>
<?php include("../../../includesApp/footer.php")?>
