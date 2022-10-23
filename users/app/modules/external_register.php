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
     <form action="save_task.php" method="POST">
    <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Surname</label>
    <input type="text" class="form-control" name="surname" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Date of Birth</label>
    <input type="date" name="date" step="1" min="2021-01-01" max="2030-12-31"  value="<?php echo date("Y-m-d");?>"> 
  </div>
  <div class="form-group">s
    <label for="exampleFormControlTextarea1">Direction</label>
    <input type="text" class="form-control" name="direction" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">DNI o C.I</label>
    <input type="text" class="form-control" name="dni" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">have a disability?</label>
    <select class="form-control" name="disability" >
      <option>Yes</option>
      <option>No</option>
    </select>
    <h2>Contact Information</h2>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Home Phone</label>
    <input type="text" class="form-control" name="homePhone" placeholder="Example input">
  </div>
  <h2>Career Information</h2>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Select the Career</label>
    <select class="form-control" name="career" >
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
  <button class=" btn btn-success" name="save_external_register">Guardar</button>
  <button class=" btn btn-success" name="update">Back</button>
</form>
<?php include("../../../includesApp/footer.php")?>