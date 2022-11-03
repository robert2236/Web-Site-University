<?php
include("../db2.php")
?>
<?php include("../includesAdmin/header.php")?>
<h1 style="text-align:center">Hours Of Class By Group</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hours</th>
      <th scope="col">Assists</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Observation</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM hours_of_class_by_group";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['hours']?></td>
        <td><?php echo $row['assists']?></td>
        <td><?php echo $row['description']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['observation']?></td>
       
     </tr>
     <?php } ?>
  </tbody>
</table>
<?php include("../includesAdmin/footer.php")?>