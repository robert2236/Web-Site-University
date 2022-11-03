<?php
include("../db2.php")
?>
<?php include("../includesAdmin/header.php")?>
<h1 style="text-align:center">Creation Of News</h1>
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
        
     </tr>
     <?php } ?>
  </tbody>
</table>
<?php include("../includesAdmin/footer.php")?>
