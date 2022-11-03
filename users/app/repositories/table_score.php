<?php
include("../db2.php")
?>
<?php include("../includesAdmin/header.php")?>
<h1 style="text-align:center">Score</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Principal Score</th>
      <th scope="col">Aditional Score</th>
      <th scope="col">Observation</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM score";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['principal_score']?></td>
        <td><?php echo $row['aditional_score']?></td>
        <td><?php echo $row['observation']?></td>
       
     </tr>
     <?php } ?>
  </tbody>
</table>
<?php include("../includesAdmin/footer.php")?>
