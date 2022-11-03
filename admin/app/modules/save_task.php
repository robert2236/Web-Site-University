
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
header("Location: charge_document.php");
} 

/*Creation_of_news*/

if (isset($_POST['save_creation_news'])){
    $title = $_POST['title'];
    $career = $_POST['career'];
    $description = $_POST['description'];
    $target = $_POST['target'];

    $query = "INSERT INTO creation_of_news(title,career,description,target) VALUES ('$title','$career','$description','$target')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: creation_of_news.php");
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
header("Location: external_register.php");
} 

/*Score*/
if (isset($_POST['save_score'])){
    $principal = $_POST['principal_score'];
    $aditional = $_POST['aditional_score'];
    $observation = $_POST['observation'];
    
    $query = "INSERT INTO score(principal_score,aditional_score,observation) 
    VALUES ('$principal','$aditional','$observation')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: score.php");
} 

/*hours_of_class */
if (isset($_POST['save_hours_of_class'])){
    $hours = $_POST['hours'];
    $assists = $_POST['assists'];
    $description=$_POST['description'];
    $date = $_POST['date'];
    $observation = $_POST['observation'];
    
    $query = "INSERT INTO hours_of_class_by_group(hours,assists,description,date,observation) 
    VALUES ('$hours','$assists','$description','$date','$observation')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: hours_of_class_by_group.php");
} 

/*tutor_asign */
if (isset($_POST['save_tutor_asign'])){
    $degree = $_POST['degree'];
    $modality = $_POST['modality'];
    $turn=$_POST['turn'];
    $title = $_POST['title'];
    $project = $_POST['project'];
    $student = $_POST['student'];
    $period =$_POST['period'];
    $tutor = $_POST['tutor'];
    $start_date= $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $delivery_date =$_POST['delivery_date'];
    
    $query = "INSERT INTO tutor_asign(degree, modality,turn,title,project,student,period,tutor,start_date,end_date,delivery_date) 
    VALUES ('$degree','$modality','$turn','$title','$project','$student','$period','$tutor','$start_date','$end_date','$delivery_date')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: tutor_asign.php");
} 

/*Student Modules */
/*activity_log */
if (isset($_POST['save_task_activity_log'])){
    $career = $_POST['career'];
    $description = $_POST['description'];
    $observation=$_POST['observation'];
    
    $query = "INSERT INTO activity_log(career,description,observation) 
    VALUES ('$career','$description','$observation')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: activity_log.php");
} 

/*save_application_entry_student*/
if (isset($_POST['save_task_activity_log'])){
    $career = $_POST['career'];
    $description = $_POST['description'];
    $observation=$_POST['observation'];
    
    $query = "INSERT INTO activity_log(career,description,observation) 
    VALUES ('$career','$description','$observation')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: activity_log.php");
} 

/*Topic_entry*/
if (isset($_POST['save_topic_entry'])){
    $activity = $_POST['activity'];
    $observation = $_POST['observation'];
    $start_date=$_POST['start_date'];
    $end_date = $_POST['end_date'];
    $delivery_date=$_POST['delivery_date'];
    
    $query = "INSERT INTO topic_entry(activity,observation,start_date,end_date,delivery_date) 
    VALUES ('$activity','$observation','$start_date','$end_date','$delivery_date')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: topic_entry.php");
} 



/*Application_Entry*/
if (isset($_POST['save_task_application_entry'])){
    $request = $_POST['request'];
    $title = $_POST['title'];
    $observation=$_POST['observation'];
    
    $query = "INSERT INTO application_entry(request,title,observation) 
    VALUES ('$request','$title','$observation')";
   $result = mysqli_query($conn,$query);
   if(!$result){
    die("Query Failed");
}


$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: application_entry.php");
} 
?>