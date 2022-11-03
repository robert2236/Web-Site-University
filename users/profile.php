<?php
include("../database.php")
?>

<?php include("/../../includesApp/header.php")?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">User</th>
      <th scope="col">Id position</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM users";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['user']?></td>
        <td><?php echo $row['id_position']?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
        </td>
     </tr>
     <?php } ?>
  </tbody>
</table>
<?php include("../../includesApp/footer.php")?>


