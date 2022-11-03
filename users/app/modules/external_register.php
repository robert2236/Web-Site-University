<?php
include("../db2.php")
?>
<?php include("../../../includesApp/header.php")?>
     <h1>External Register</h1>
     <h3>Personal Data</h3>
     <br>
     <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
     <h1 style="text-align:center">External Register</h1>
     <form action="save_task.php" method="POST">
     <div class="card m-10" style="width: 70rem; display:flex; align-items:center; justify-content:center;">
    <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" style="width:30rem" name="name" >
  </div>
  <div class="form-group pb-2">
    <label for="formGroupExampleInput2">Surname</label>
    <input type="text" class="form-control" style="width:30rem" name="surname">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Date of Birth</label>
    <input type="date" name="date" step="1" min="2021-01-01" max="2030-12-31" style="width:23rem" value="<?php echo date("Y-m-d");?>"> 
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Direction</label>
    <input type="text" class="form-control" style="width:30rem" name="direction" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">DNI o C.I</label>
    <input type="text" class="form-control" style="width:30rem" name="dni" id="formGroupExampleInput" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">have a disability?</label>
    <select class="form-control" style="width:30rem" name="disability" >
      <option>Yes</option>
      <option>No</option>
    </select>
    <h2>Contact Information</h2>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Email</label>
    <input type="text" class="form-control" style="width:30rem" name="email" >
  </div>
  <div class="form-group">pe="text" class="form-control" style="width:30rem" name="phone" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Home Phone</label>
    <input type="text" class="form-control" style="width:30rem" name="homePhone" >
  </div>
  <h2>Career Information</h2>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Select the Career</label>
    <select class="form-control" style="width:30rem" name="career" >
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
    <select class="form-control" style="width:30rem" name="modality" >
      <option>face-to-face</option>
      <option>Blended</option>
      <option>Online</option>
    </select>
  </div>
  <div class="form-group pb-2">
    <label for="exampleFormControlSelect1">Turn</label>
    <select class="form-control" style="width:30rem" name="turn" >
      <option>Day</option>
      <option>Afternoon</option>
      <option>Night</option>
    </select>
  </div>
  <div class="btn-group pb-2">
  <button class=" btn btn-success me-3" name="save_external_register">Save</button>
  <a class=" btn btn-success" href="../../admin.php" name="back">back</a>
  </div>
  </div>
</form>
<?php include("../../../includesApp/footer.php")?>