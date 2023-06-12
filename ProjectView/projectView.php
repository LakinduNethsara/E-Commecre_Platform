<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../BootstrapStyle/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../BootstrapStyle/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../BootstrapStyle/css/style.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Online Clothing Managment System</title>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3  fw-bold" href="#"><i class="bi bi-circle me-3"></i>Karmikaya.lk</a>
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
                            Hi, <?php //echo $_SESSION['name'] 
                                ?>
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

    <div class="offcanvas offcanvas-start sidebar-nav bg-success" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <img src="chandimal.jpeg" class="rounded-circle" width="200" alt="">
                    </div>
                </div>
            </div>

            <div class="container">
                <h1 class="text-white fw-bold text-center">John Doe</h1>
                <p class="lead text-white fw-bold text-center">Software Engineer</p>

                <ul class="list-unstyled text-white">
                    <li><i class="bi bi-envelope-fill me-2"></i> john.doe@example.com</li>
                    <li><i class="bi bi-geo-alt-fill me-2"></i> San Francisco, CA</li>
                    <li><i class="bi bi-linkedin me-2"></i> <a href="https://www.linkedin.com/in/johndoe" target="_blank" class="text-white">linkedin.com/in/johndoe</a></li>
                    <li><i class="bi bi-twitter me-2"></i> <a href="https://twitter.com/johndoe" target="_blank" class="text-white">@johndoe</a></li>
                </ul>
                <!-- Rest of your content -->
            </div>

            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <img src="logo.png" class="" width="200" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <main>
        <div class="mt-5 pt-1">
            <div class="card ">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">

                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped data-table" style="width: 100%">
                    <thead>
                        <tr>

                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Budget</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Skils</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include '../Connection/connection.php';
                        $sql = "SELECT * FROM project";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {

                                $name = $row["Name"];
                                $description = $row["Description"];
                                $budget = $row["Budget"];
                                $date = $row["Date"];
                                $time = $row["Time"];
                                $skil = $row["Skils"];


                        ?>
                                <tr>

                                    <td><?php echo $name ?></td>
                                    <td><?php echo $description ?></td>
                                    <td><?php echo $budget ?></td>
                                    <td><?php echo $date ?></td>
                                    <td><?php echo $time ?></td>
                                    <td><?php echo $skil ?></td>
                                    <td><a href="#!" class="btn btn-primary">Bids</a>

                                    </td>

                            <?php }
                        } else {
                            echo "<tr>";
                            echo "0 results";
                            echo "</tr>";
                        }
                        mysqli_close($conn);

                            ?>

                    </tbody>
                    <tfoot>
                        <tr>

                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Budget</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Skils</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </main>

    <footer>
        <!-- place footer here -->

        <div class="fixed-bottom">
            <div class="text-center p-3 bg-dark  text-white">
                © 2020 Copyright:
                <a class="text-white" href="#">Chandimal Priyamantha</a>
            </div>
        </div>
    </footer>



    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
</body>

</html>