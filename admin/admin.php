<?php 
include("app/db2.php");
?>

<?php include("../includesApp/header.php")?>




<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" style="color:#fc0176">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline" style="color:#39FF14"> General Modules</span> </a>
                        <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="app/modules/application_entry.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Application Entry</span></a>
                            </li>
                            <li>
                                <a href="app/modules/application_log.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Application Log</span></a>
                            </li>
                            <li>
                                <a href="app/modules/charge_document.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Charge Document</span></a>
                            </li>
                            <li>
                                <a href="app/modules/creation_of_news.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Creation Of News</span></a>
                            </li>
                            <li>
                                <a href="app/modules/external_register.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">External Register</span></a>
                            </li>
                            <li>
                                <a href="app/modules/hours_of_class_by_group.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Hours Of Class By Group</span></a>
                            </li>
                            <li>
                                <a href="app/modules/score.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Score</span></a>
                            </li>
                            <li>
                                <a href="app/modules/tutor_asign.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Tutor Asign</span></a>
                            </li>
                            <li>
                                <a href="app/modules/charge_document.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Charge Document</span></a>
                            </li>
                        </ul>
                    </li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline" style="color:#39FF14">Student Modules</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="app/estudent_modules/activity_log.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Activity Log</span></a>
                            </li>
                            <li>
                                <a href="app/estudent_modules/application_entry_student.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Student Applications</span></a>
                            </li>
                            <li>
                                <a href="app/estudent_modules/topic_entry.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Topic Entry</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline" style="color:#39FF14" >Records</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="app/repositories/table_activities_log_student.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Activities Log Student</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_application_entry_student.php" class="nav-link px-0"> 
                                    
                                    <span class="d-none d-sm-inline">Application Entry Student</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_application_entry.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Application Entry</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_application_log.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Application Log</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_charge_document.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Charge Document</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_creation_of_news.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Creation Of News</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_external_register.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">External Register</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_hours_of_class_by_group.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Hours Of Class By Group</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_external_register.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">External Register</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_score.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Score</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_topic_entry.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Topic Entry</span></a>
                            </li>
                            <li>
                                <a href="app/repositories/table_tutor_asign.php" class="nav-link px-0"> 
                                    <span class="d-none d-sm-inline">Tutor Asign</span></a>
                            </li>
                        </ul>
                    </li>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://avatars.githubusercontent.com/u/91293983?s=400&u=3af38fb13e3c3a8ff8ca3b925f653c18fd8d7de9&v=4" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1" style="color:#fc0176">Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="../users/users.php">Change to rol of user</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <h1 style="text-align:center">Welcome Admin</h1>
        <div class="card m-4" style="width: 60rem;text-align:center;">
  <img src="../img/admin.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Administration of the Modules of the Degrees and Student Processes</p>
  </div>
</div>
        <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Activity Log</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Application Entry Student</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
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
        </tr>
     <?php } ?> </table>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">degree</th>
      <th scope="col">modality</th>
      <th scope="col">Observation</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM application_entry_student";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
      
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['degree']?></td>
        <td><?php echo $row['modality']?></td>
        <td><?php echo $row['observation']?></td>
     </tr>
     <?php } ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>     
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3"> Application Entry</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Application Log</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample3 multiCollapseExample4">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample3">
      <div class="card card-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Request</th>
      <th scope="col">Title</th>
      <th scope="col">Observation</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM application_entry";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
      
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['request']?></td>
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['observation']?></td>
     </tr>
     <?php } ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample4">
      <div class="card card-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Career</th>
      <th scope="col">Description</th>
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
     </tr>
     <?php } ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5">Charge Document</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample6">Creation Of News</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample5 multiCollapseExample6">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample5">
      <div class="card card-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Career</th>
      <th scope="col">project</th>
      <th scope="col">Observation</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM activities_repository";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
      
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['career']?></td>
        <td><?php echo $row['project']?></td>
        <td><?php echo $row['observation']?></td>
     </tr>
     <?php } ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample6">
      <div class="card card-body">
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
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['career']?></td>
        <td><?php echo $row['description']?></td>
        <td><?php echo $row['target']?></td>
        
        </td>
     </tr>
     <?php } ?>
      </div>
    </div>
  </div>
</div>
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample7" role="button" aria-expanded="false" aria-controls="multiCollapseExample7">External Register</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample8" aria-expanded="false" aria-controls="multiCollapseExample8">Hours of Class By Group</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample7">
      <div class="card card-body">
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
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample8">
      <div class="card card-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hours</th>
      <th scope="col">Assists</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Observation</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM hours_of_class_by_group";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['hours']?></td>
        <td><?php echo $row['assists']?></td>
        <td><?php echo $row['description']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['observation']?></td>
     </tr>
     <?php } ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample9" role="button" aria-expanded="false" aria-controls="multiCollapseExample9">Score</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample10" aria-expanded="false" aria-controls="multiCollapseExample10">Topic Entry</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample11" aria-expanded="false" aria-controls="multiCollapseExample11">Tutor Asign</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample9 multiCollapseExample10 multiCollapseExample11">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample9">
      <div class="card card-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Principal Score</th>
      <th scope="col">Aditional Score</th>
      <th scope="col">Observation</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM score";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['principal_score']?></td>
        <td><?php echo $row['aditional_score']?></td>
        <td><?php echo $row['observation']?></td>
     </tr>
     <?php } ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample10">
      <div class="card card-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Activity</th>
      <th scope="col">Observation</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Delivery Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM topic_entry";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['activity']?></td>
        <td><?php echo $row['observation']?></td>
        <td><?php echo $row['start_date']?></td>
        <td><?php echo $row['end_date']?></td>
        <td><?php echo $row['delivery_date']?></td>
     </tr>
     <?php } ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample11">
      <div class="card card-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Degree</th>
      <th scope="col">Modality</th>
      <th scope="col">Turn</th>
      <th scope="col">Title</th>
      <th scope="col">Project</th>
      <th scope="col">Student</th>
      <th scope="col">Period</th>
      <th scope="col">Tutor</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM tutor_asign";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['degree']?></td>
        <td><?php echo $row['modality']?></td>
        <td><?php echo $row['turn']?></td>
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['project']?></td>
        <td><?php echo $row['student']?></td>
        <td><?php echo $row['period']?></td>
        <td><?php echo $row['tutor']?></td>
     </tr>
     <?php } ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
<h3 style="text-align:center">Stadistics</h3>
<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Projets</div>
</div>
<p>
<div class="progress">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Approved Degrees</div>
</div>
<p>
<div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Approved projects</div>
</div>
<p>
<div class="progress">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">Enrolled Students</div>
</div>
        </div>
    </div>
    
</div>
<?php include("../includesApp/footer.php")?>
