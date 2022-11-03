<?php
include("../db2.php")
?>
<?php include("../includesAdmin/header.php")?>
<h1 style="text-align:center">Activities Log Student</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Career</th>
      <th scope="col">description</th>
      <th scope="col">Observation</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM activity_log";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
      
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['career']?></td>
        <td><?php echo $row['description']?></td>
        <td><?php echo $row['observation']?></td>
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
<?php include("/includesAdmin/footer.php")?>
