<?php
include("../db2.php")
?>

<?php include("../../includesApp/header.php")?>
    <h1>Admin</h1>
    <h3>Charge Document</h3>
    <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
<form action="save_task.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Tittle</label>
    <input type="text" class="form-control" name="title" placeholder="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Career</label>
    <input type="text" name="career"class="form-control"  placeholder="Career">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="rol" >
      <option>Tutor</option>
      <option>Tutor/Teacher</option>
      <option>Web Site</option>
    </select>
  </div>
<div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button class=" btn btn-success" name="save_charge_document" value="Save Task">save</button>
  <button class=" btn btn-success" name="back">back</button>
    </form>

</div>
<?php include("../../includesApp/footer.php")?>