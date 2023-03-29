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

            function showPassword() {
                var x = document.getElementById("password");
            
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
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
                    </div>

                </div>
            </div>
            <form action="login.php" method="POST">
                <div class="container py-3">
                    <div class="card text-center" style="border-radius: 1rem;background-color:rgb(20,200,150,0.2);margin-left:10%;margin-right:10%">
                        <div class="card-body p-lg-5 ">

                            <form action="" method="POST">
                            <h5 class="fw-normal mb-2 pb-2" style="letter-spacing: 1px;"><b>Login in to admin panel</b></h5>

                            <div class="form-outline mb-4">
                                <label class="form-label">Email address</label>
                                <input type="email"class="form-control" name="email" style="width:80%;margin-left:auto;margin-right:auto;border-radius:10px;" >
                            </div>

                            <div class="form-outline mb-2">
                                <label class="form-label">Password</label>
                                <input type="password"class="form-control" id="password" name="password" style="width:80%;margin-left:auto;margin-right:auto;border-radius:10px;" >
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:250px;margin:auto" > Show password
                                <input type="checkbox" style="text-align:center;" onclick="showPassword()"> </label>
                            </div><br>

                            <div class="pt-1 mb-4">
                                <input type="submit" value="Login" class="btn btn-success  btn-block" >&emsp;
                                <input type="reset" name="reset" value="Clear" class="btn btn-danger  btn-block" >
                            </div>

                            <p style="color: #393f81;">Don't have an account? <a href="register_form.php" style="color: #393f81;"><b>Register here</B></a> (admin only)</p>
                            </form> 
                    
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </body>
</html>

