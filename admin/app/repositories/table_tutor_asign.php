<?php
include("../db2.php")
?>
<?php include("../../../includesApp/header.php")?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Degree</th>
      <th scope="col">Modality</th>
      <th scope="col">Turn</th>
      <th scope="col">Title</th>
      <th scope="col">Project</th>
      <th scope="col">Student</th>
      <th scope="col">Period</th>
      <th scope="col">Tutor</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM tutor_asign";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['degree']?></td>
        <td><?php echo $row['modality']?></td>
        <td><?php echo $row['turn']?></td>
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['project']?></td>
        <td><?php echo $row['student']?></td>
        <td><?php echo $row['period']?></td>
        <td><?php echo $row['tutor']?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
        </td>
        <td>
            <a href="../delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a>
        </td>
     </tr>
     <?php } ?>
  </tbody>
</table>
<?php include("../../../includesApp/footer.php")?>
