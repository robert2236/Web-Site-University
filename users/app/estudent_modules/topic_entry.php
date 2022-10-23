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
    <label for="formGroupExampleInput">Activity</label>
    <input type="text" class="form-control" name="activity">
  </div>
  <div class="form-group">
  <label for="formGroupExampleInput">Observation</label>
    <textarea class="form-control" name="observation" rows="4"></textarea>
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
  <button class=" btn btn-success" name="save_topic_entry" value="Save Task">save</button>
  <button class=" btn btn-success" name="back">back</button>
</form>
<?php include("../../../includesApp/footer.php")?>
