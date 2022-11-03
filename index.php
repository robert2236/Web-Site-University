<?php
include("admin/app/db2.php")
?>


<?php include("includesApp/header.php")?>

<!--carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="./img/universidad1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/room.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/estudiantes_juntos.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--card-information-->
<div class="card m-5 " style="background:gray;">
<div class="card-body">
    <h5 class="card-title title-1">Discover the best technological careers</h5>
    <p class="card-text">Get to study in the careers with the highest demand in the market.</p>
    <p class="card-text"><small class="text-muted black">Last updated 3 mins ago</small></p>
  </div>
  <img src="./img/software.jpg" style="height: 300px;"class="card-img-top" alt="...">
  
</div>

<!--notice-->

<div class="row p-3">
<?php
        $query ="SELECT * FROM creation_of_news ";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
  <div class="col-sm-6 p-2">
    <div class="card">
      <div class="card-body cw">
        <h5 class="card-title"><?php echo $row['title']?></h5>
        <p class="card-text"><?php echo $row['description']?></p>
        <a href="#" class="btn btn-primary">See more</a>
      </div>
    </div>
  </div>
  <?php } ?>
 </div>

<?php include("includesApp/footer.php")?>
