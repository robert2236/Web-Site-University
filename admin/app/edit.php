<?php 
include("db2.php");

if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="SELECT * FROM external_register WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) ==1){
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $surname = $row['surname'];
        $date = $row['date'];
        $direction = $row['direction'];
        $dni= $row['dni'];
        $disability = $row['disability'];
        $email = $row['email'];
        $phone = $row['phone'];
        $homePhone = $row['homePhone'];
        $career = $row['career'];
        $modality = $row['modality'];
        $turn = $row['turn'];
    }
}
if (isset($_POST['update_external_register'])){
    $id = $_GET['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $date = $_POST['date'];
        $direction = $_POST['direction'];
        $dni= $_POST['dni'];
        $disability = $_POST['disability'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $homePhone = $_POST['homePhone'];
        $career = $_POST['career'];
        $modality = $_POST['modality'];
        $turn = $_POST['turn'];
    

$query ="UPDATE external_register set name='$name', surname='$surname'
,date ='$date', direction = '$direction'
,dni ='$dni',disability ='$disability', email='$email', phone='$phone',
homePhone ='$homePhone', career='$career', modality='$modality', turn='$turn' WHERE id =$id";
mysqli_query($conn,$query);

$_SESSION['message'] = 'Task Updated Successfully';
$_SESSION['message_type'] = 'success';
header("Location: repositories/table_external_register.php");
}

?>
<?php include("../includesApp/header.php")?>
<h2>Data update</h2>
<div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card card body">
            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="name" value= "<?php echo $name;?>" class="form-control" placeholder="Update name">
                </div>
                <div class="form-group">
                    <input type="text" name="surname" value= "<?php echo $surname;?>" class="form-control" placeholder="Update surname">
                </div>
                <div class="form-group">
                <input type="date" name="date" step="1" min="2021-01-01" max="2030-12-31" value="<?php echo date("Y-m-d");echo $date; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="direction" value= "<?php echo $direction;?>" class="form-control" placeholder="Update direction">
                </div>
                <div class="form-group">
                    <input type="text" name="dni" value= "<?php echo $dni;?>" class="form-control" placeholder="Update dni">
                </div>
                <div class="form-group">
                    <input type="text" name="disability" value= "<?php echo  $disability;?>" class="form-control" placeholder="Update disability">
                </div>
                <div class="form-group">
                    <input type="text" name="email" value= "<?php echo  $email;?>" class="form-control" placeholder="Update email">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" value= "<?php echo  $phone;?>" class="form-control" placeholder="Update phone">
                </div>
                <div class="form-group">
                    <input type="text" name="homePhone" value= "<?php echo  $homePhone;?>" class="form-control" placeholder="Update Homephone">
                </div>
                <div class="form-group">
                <select class="form-control" name="career" value= "<?php echo   $career;?>" >
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
                    <select class="form-control"  name="modality" value= "<?php echo   $modality;?>" >
                    <option>face-to-face</option>
                    <option>Blended</option>
                    <option>Online</option>
                     </select>
                </div>
                <select class="form-control"  name="turn" value= "<?php echo   $turn;?>">
                <option>Day</option>
                 <option>Afternoon</option>
                 <option>Night</option>
                 </select>
                <button class=" btn btn-success" name="update_external_register">Update</button>
            </form>
        </div>
    </div>
</div>

<?php include("../includesApp/footer.php")?>



