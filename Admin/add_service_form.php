<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/Button-Ripple-Effect-Animation-Wave-Pulse.css">
        <link rel="stylesheet" href="css/Features-Cards-icons.css">
        <link rel="stylesheet" href="css/responsive-blog-card-slider.css">
        <style>
            a{text-decoration:none;color:black;}
            th,td{padding-bottom:15px;}
            #categoryID{
                width:150px;
                margin-left:15px;
                height:35px;

            }

        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });

            function update(id,name,description){
                document.getElementById("currentID").innerHTML=id;
            }
        </script>
    </head>

    <body>
        <!-- top navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
                </button>
                <a class="navbar-brand me-auto ms-lg-0 ms-3  fw-bold" href="#"><i class="bi bi-circle me-3"></i>Clothing Managment System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="topNavBar">
                    <form class="d-flex ms-auto my-3 my-lg-0">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-success" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                            Hi, <?php //echo $_SESSION['name'] ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Aboute</a></li>
                                <li>
                                    <a class="dropdown-item" href="../check-php/logout.php">Log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- top navigation bar -->
        <!-- offcanvas -->
        <div class="offcanvas offcanvas-start sidebar-nav bg-success" tabindex="-1" id="sidebar">
            <div class="offcanvas-body p-0">
                <nav class="navbar-dark">
                    <ul class="navbar-nav">
                        <li>
                            <div class="text-white small fw-bold text-uppercase px-3">
                                CORE
                            </div>
                        </li>
                        <li>
                            <a href="admin.php" class="nav-link px-3 active">
                                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="my-4">
                            <hr class="dropdown-divider bg-light" />
                        </li>
                        <li>
                            <div class="text-white small fw-bold text-uppercase px-3 mb-3">
                                Interface
                            </div>
                        </li>
                        <li>
                            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                                <span>Somthing</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="layouts">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="writting.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-pen"></i></span>
                                            <span>Somthing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="listening.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-file-earmark-music"></i></span>
                                            <span>Somthing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="reading.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-bookmark-dash"></i></span>
                                            <span>Somthing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="spoken.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-megaphone"></i></i></span>
                                            <span>Somthing</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="add-student.php" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-person-plus"></i></span>
                                <span>Somthing</span>
                            </a>
                        </li>
                        <li class="my-4">
                            <hr class="dropdown-divider bg-light" />
                        </li>
                        <li>
                            <div class="text-white small fw-bold text-uppercase px-3 mb-3">
                                Addons
                            </div>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                                <span>Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-table"></i></span>
                                <span>Tables</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- offcanvas -->











        <main class="mt-5 pt-3"> <!-- ---------------------------------------------------------Body-->
        <div class="card text-center">
            <div class="card-header" style="background-color:rgb(50,200,50,0.2);">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" style="width:100%;"><label style="float:left;font-size:20px;"><b>Admin Panel - Karmikaya.lk</b></label>
                    <a href="logOut.php" ><button type='button' class='btn btn-danger btn-sm' style="float:right;"><lable style='color:white' >Log Out</lable></button></a> </label>
                </div>

            </div>
        </div>

        <div class="card text-center">
            <div class="card-header alert-danger">
                ADD SERVICES
            </div>
                
            <div class="card-body">
                <form action="add_service.php" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" style="width:250px"><b>Service ID :</b> </label>
                        <input type="number" class="form-control" name="inputID" style="text-align:center;width:220pt;" placeholder="Enter service ID (Numbers only)" required readonly value="<?php echo rand(1,999999999); ?>"><br>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" style="width:250px"><b>Service Name :</b> </label>
                        <input type="text" class="form-control" name="inputName" style="text-align:center;width:220pt;" placeholder="Enter new service name" required><br>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" style="width:250px"><b>Service Details :</b> </label>
                        <textarea class="form-control" name="inputDetails" style="text-align:center;width:220pt;" placeholder="Enter new service details" required></textarea><br>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"style="width:300px;text-align:center;"><b>Select new category :</B> </label>
                        <select name="CategoryID" id="categoryID" >
                            <option selected value="">Choose</option>
                            <?php
                                include "Connection/connection.php";
                                $dropdown_query=mysqli_query($conn,"select ID,Name from catogery");
                                while($row=mysqli_fetch_row($dropdown_query)){
                                    echo "<option value='$row[0]'>$row[1]</option>";
                                }
                            ?>
                        </select>
                    </div><br>

                    <div class="mb-3"style="text-align:left;width:100%;">
                        <label class="col-sm-2 col-form-label"style="width:350px;text-align:left;">Select service image (jpeg & png only): </label>
                        <input type="file" name="serviceImage" style="width:400px;" accept=".jpeg,.png" required>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="submit" class=" btn btn-success"style="height:40px;width:100px;">
                        <a href='service.php'><button type='button' class='btn btn-danger'style="height:40px;width:100px;"><lable>Cancel</lable></button></a>
                        </div>
                    </div>



                </form>
            </div>
        </div>






        </main>
    </body>

    </html>
<?php
?>
