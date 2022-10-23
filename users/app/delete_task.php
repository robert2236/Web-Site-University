<?php 
include("db2.php");

if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM activities_repository WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/activities_repository");
}
/*Activity Log*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM activity_log WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/table_activity_log.php");
}
/*Application_entry_student*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM application_entry_student WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/table_application_entry_student.php");
}
/*Application_entry*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM application_entry WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/application_entry.php");
}
/*Charge_document*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM charge_document WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/table_charge_document.php");
}
/*Creation_of_news*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM creation_of_news WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/table_creation_of_news.php");
}
/*External_register*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM external_register WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/table_external_register.php");
}

if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM hours_of_class_by_group WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/table_hours_of_class_by_group.php");
}

if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM score WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/table_score.php");
}

if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM topic_entry WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/table_topic_entry.php");
}

if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM tutor_asign WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: repositories/table_tutor_asign.php");
}

?>