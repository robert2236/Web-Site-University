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
        <h1 style="text-align:center">Creation Of News</h1>
<form action="save_task.php" method="POST">
<div class="card m-10 p-5" style="width: 85rem; display:flex; align-items:center; justify-content:center;">
<div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" style="width:30rem" name="title" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Career</label>
    <select class="form-control" style="width:30rem" name="career" >
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
  <label for="formGroupExampleInput">Description</label>
    <textarea class="form-control" style="width:30rem" name="description" rows="3"></textarea>
  </div>
  <h4>Target audience</h4>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Tutor"  name="target" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Tutor
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Student" name="target" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Student
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Web Site" name="target" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Web Site
  </label>
</div>

  <div class="form-group pb-2">
    <label for="exampleFormControlFile1">Attachments</label>
    <input type="file" class="form-control-file" style="width:30rem" id="exampleFormControlFile1">
  </div>
  <div class="btn-group pb-2">
  <button class=" btn btn-success me-3" name="save_creation_news" value="Save">save</button>
  <a class=" btn btn-success" href="../../admin.php" name="back">back</a>
  </div>
</form>
<?php include("../../../includesApp/footer.php")?>
