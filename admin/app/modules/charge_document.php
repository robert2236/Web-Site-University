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
        <h1 style="text-align:center">Upload Document</h1>
<form action="save_task.php" method="POST">
<div class="card m-10" style="width: 70rem; display:flex; align-items:center; justify-content:center;">
  <div class="form-group">
    <label for="exampleFormControlInput1">Tittle</label>
    <input type="text" class="form-control" style="width:30rem" name="title" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Career</label>
    <input type="text" style="width:30rem" name="career"class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" style="width:30rem" name="description" rows="2"></textarea>
  </div>
  <div class="form-group pb-2">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" style="width:30rem" name="rol" >
      <option>Tutor</option>
      <option>Tutor/Teacher</option>
      <option>Web Site</option>
    </select>
  </div>
<div>
  <div class="form-group pb-2">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="btn-group pb-2">
  <button class=" btn btn-success me-3" name="save_charge_document" value="Save Task">save</button>
  <a class=" btn btn-success" href="../../admin.php" name="back">back</a>
  </div>
  </div>
    </form>

</div>
<?php include("../../../includesApp/footer.php")?>