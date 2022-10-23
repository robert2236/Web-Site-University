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
  <label for="exampleFormControlSelect1">Degree to obtain</label>
    <select class="form-control" name="degree" >
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
    <label for="exampleFormControlSelect1">Modality</label>
    <select class="form-control" name="modality" >
      <option>face-to-face</option>
      <option>Blended</option>
      <option>Online</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Turn</label>
    <select class="form-control" name="turn" >
      <option>Day</option>
      <option>Afternoon</option>
      <option>Night</option>
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Title of the project</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Project</label>
    <textarea class="form-control" name="project"rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Student</label>
    <input type="text" class="form-control" name="student">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Period</label>
    <select class="form-control" name="period" >
      <option>2022-3</option>
      <option>2023-1</option>
      <option>2023-2</option>
      <option>2023-3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Tutor</label>
    <input type="text" class="form-control" name="tutor">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Start Date</label>
<input type="date" name="start_date" step="1" min="2021-01-01" max="2030-12-31" value="<?php echo date("Y-m-d");?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">End Date</label>
<input type="date" name="end_date" step="1" min="2021-01-01" max="2030-12-31" value="<?php echo date("Y-m-d");?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date of Delivery</label>
<input type="date" name="delivery_date" step="1" min="2021-01-01" max="2030-12-31" value="<?php echo date("Y-m-d");?>">
  </div>
  <button class=" btn btn-success" name="save_tutor_asign">Save</button>
  <button class=" btn btn-success" >Back</button>
</form>
<?php include("../../includesApp/footer.php")?>
