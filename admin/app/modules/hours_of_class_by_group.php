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
<h1 style="text-align:center">Hours Of Class By Group</h1>
  <div class="card m-10" style="width: 70rem; display:flex; align-items:center; justify-content:center;">
<div class="form-group">
    <label for="formGroupExampleInput">Period</label>
    <select class="form-control" style="width:30rem" name="Period" >
      <option>2022-2023</option>
      <option>2021-2022</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Hours</label>
    <input type="text" class="form-control" style="width:30rem" name="hours" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Assists</label>
    <input type="text" class="form-control" style="width:30rem" name="assists" >
  </div>
  <div class="form-group">
  <label for="formGroupExampleInput">Description</label>
    <textarea class="form-control" style="width:30rem" name="project" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date</label>
<input type="date" name="delivery_date" step="1" min="2021-01-01" max="2030-12-31" style="width:30rem" value="<?php echo date("Y-m-d");?>">
  </div>
  <div class="form-group pb-2">
    <label for="formGroupExampleInput">Observation</label>
    <input type="text" class="form-control"  style="width:30rem" name="observation" >
  </div>
  <div class="btn-group pb-2">
  <button class=" btn btn-success me-3" name="save_hours_of_class" value="Save Task">save</button>
  <a class=" btn btn-success" href="../../admin.php" name="back">back</a>
  </div>
  </div>
</form>
<?php include("../../../includesApp/footer.php")?>





