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
    <label for="formGroupExampleInput">Period</label>
    <select class="form-control" name="Period" >
      <option>2022-2023</option>
      <option>2021-2022</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Hours</label>
    <input type="text" class="form-control" name="hours" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Assists</label>
    <input type="text" class="form-control" name="assists" >
  </div>
  <div class="form-group">
  <label for="formGroupExampleInput">Description</label>
    <textarea class="form-control" name="project" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date</label>
<input type="date" name="delivery_date" step="1" min="2021-01-01" max="2030-12-31" value="<?php echo date("Y-m-d");?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Observation</label>
    <input type="text" class="form-control" name="observation" placeholder="Example input">
  </div>
  <button class=" btn btn-success" name="save_hours_of_class" value="Save Task">save</button>
  <button class=" btn btn-success" name="back">back</button>s
</form>
<?php include("../../includesApp/footer.php")?>





