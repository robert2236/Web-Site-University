<?php
include("../db2.php")
?>
<?php include("../includesAdmin/header.php")?>
<h1 style="text-align:center">External Register</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Direction</th>
      <th scope="col">DNI</th>
      <th scope="col">Disability</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Homophone</th>
      <th scope="col">Career</th>
      <th scope="col">modality</th>
      <th scope="col">Turn</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM external_register";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['surname']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['direction']?></td>
        <td><?php echo $row['dni']?></td>
        <td><?php echo $row['disability']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['phone']?></td>
        <td><?php echo $row['homePhone']?></td>
        <td><?php echo $row['career']?></td>
        <td><?php echo $row['modality']?></td>
        <td><?php echo $row['turn']?></td>
       
     </tr>
     <?php } ?>
  </tbody>
</table>
<?php include("../includesAdmin/footer.php")?>
