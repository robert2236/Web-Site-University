<?php
include("../db2.php")
?>
<?php include("../../../includesApp/header.php")?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Degree</th>
      <th scope="col">Description</th>
      <th scope="col">Target</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM creation_of_news";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>s
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['career']?></td>
        <td><?php echo $row['description']?></td>
        <td><?php echo $row['target']?></td>
        <td>
            <a href="../edit_creation_of_news.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
        </td>
        <td>
            <a href="../delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a>
        </td>
     </tr>
     <?php } ?>
  </tbody>
</table>
<?php include("../../../includesApp/footer.php")?>
