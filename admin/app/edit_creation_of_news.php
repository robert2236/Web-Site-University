<?php 
include("db2.php");

if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="SELECT * FROM creation_of_news WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) ==1){
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $career = $row['career'];
        $description = $row['description'];
        $target = $row['target'];
       
    }
}
if (isset($_POST['update_creation_of_news'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $career = $_POST['career'];
    $description = $_POST['description'];
    $target = $_POST['target'];

$query ="UPDATE creation_of_news set title='$title', career='$career'
,description ='$description', target = '$target' WHERE id =$id";
mysqli_query($conn,$query);

$_SESSION['message'] = 'Task Updated Successfully';
$_SESSION['message_type'] = 'success';
header("Location: repositories/table_creation_of_news.php");
}

?>
<?php include("../../includesApp/header.php")?>
<h2>Data update</h2>
<div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card card body">
            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="title" value= "<?php echo $title;?>" class="form-control" placeholder="Update name">
                </div>
                <div class="form-group">
    <label for="formGroupExampleInput">Career</label>
    <select class="form-control" name="career" value= "<?php echo $career;?>">
      <option>Select an option</option>
      <option>Information Technology</option>
      <option>Systems Technology</option>
      <option>Teleinformatics</option>
      <option>Telecommunications Technology</option>
      <option>Multimedia Engineering</option>
      <option>Mechatronics Engineering</option>
      <option>Electronic Engineering</option>
      <option>Systems Engineering and Related</option>
      <option>Aeronautical Engineering</option>
    </select>
  </div>
               
                <div class="form-group">
                    <input type="text" name="description" value= "<?php echo $description;?>" class="form-control" placeholder="Update description">
                </div>
                <h4>Target audience</h4>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Tutor" name="target" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Tutor
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Student" name="target" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Student
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Web Site" name="target" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Web Site
  </label>
</div>
                <button class=" btn btn-success" name="update_creation_of_news">Update</button>
            </form>
        </div>
    </div>
</div>

<?php include("../../includesApp/footer.php")?>