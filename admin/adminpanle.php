<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true){
  header ('location: adminlogin.php');
  exit;


}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">

    <title>ADMIN panel</title>
</head>

<body>
    <?php
require '../partials/adminbar.php'?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="/consltancy/admin/adminpanle.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="/consltancy/admin/addcollage.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"> Add Colleges
                                </span> </a>
                        </li>
                        <li>
                            <a href="/consltancy/admin/collegelist.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">View Colleges</span></a>
                        </li>
                        <li>
                            <a href="/consltancy/admin/addjobs.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Add Companies</span></a>
                        </li>
                        <li>
                            <a href="/consltancy/admin/companylist.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">View Companies</span></a>
                        </li>
                        <li>
                            <a href="/consltancy/admin/viewclgreq.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">View Admission Request</span></a>
                        </li>
                        <li>
                            <a href="/consltancy/admin/viewjobreq.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">View Job Request</span></a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-3">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h5 class="card-title">Add new collages  </h5>
                                <p class="card-text">add new collages for admission.</p>
                                <a href="/consltancy/admin/addcollage.php" class="btn btn-primary">click</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h5 class="card-title">Add new Jobs</h5>
                                <p class="card-text">View add new jobs avilable</p>
                                <a href="/consltancy/admin/addjobs.php" class="btn btn-primary">click</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>


                <div class="col py-3">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h5 class="card-title">view requests from students </h5>
                                <p class="card-text">view all collage admission requests.</p>
                                <a href="/consltancy/admin/viewclgreq.php" class="btn btn-primary">click</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h5 class="card-title">View job requests</h5>
                                <p class="card-text">View all the job requests </p>
                                <a href="/consltancy/admin/viewjobreq.php" class="btn btn-primary">click</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
        </div>
        
    </div>
    
</body>

</html>