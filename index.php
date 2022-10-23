<?php
include("app/db2.php")
?>


<?php include("includesApp/header.php")?>




<!--notice-->

<div class="row p-2">
<?php
        $query ="SELECT * FROM creation_of_news ";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
  <div class="col-sm-6 p-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['title']?></h5>
        <p class="card-text"><?php echo $row['description']?></p>
        <a href="#" class="btn btn-primary">See more</a>
      </div>
    </div>
  </div>
  <?php } ?>
 </div>

<?php include("includesApp/footer.php")?>
