
<?php
include("../db2.php");

/*application_log */

if (isset($_POST['save_task'])){
    $career = $_POST['career'];
    $project = $_POST['project'];
    $observation = $_POST['observation'];

    $query = "INSERT INTO activities_repository(career,project,observation) VALUES ('$career','$project','$observation')";
   $result = mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: application_log.php");
} 


/*charge_document*/

if (isset($_POST['save_charge_document'])){
    $title = $_POST['title'];
    $career = $_POST['career'];
    $description = $_POST['description'];
    $rol = $_POST['rol'];

    $query = "INSERT INTO charge_document(title,career,description,rol) VALUES (' $title','$career','$description','$rol')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: application_log.php");
} 

/*External_Register*/
if (isset($_POST['save_external_register'])){
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

    $query = "INSERT INTO external_register(name,surname,date,direction,dni,disability,email,phone,homePhone,career,modality,turn) 
    VALUES ('$name','$surname','$dateS','$direction','$dni','$disability','$email',' $phone','$homePhone','$career','$modality','$turn')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: application_log.php");
} 


?>