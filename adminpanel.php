<?php
session_start();
include 'koneksi.php'; // Koneksi ke database

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Mendapatkan semua pengguna dari tabel login_system
$sql = "SELECT id, email FROM login_system";
$result = $conn->query($sql);

echo "Welcome to the admin panel, " . $_SESSION['username'] . "!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel - AlatCampingKu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 px-4">
        <a href="indexx.html" class="navbar-brand">
            <h1 class="text-uppercase text-primary mb-1">Admin Panel - AlatCampingKu</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="indexx.html" class="nav-item nav-link">Home</a>
                <a href="index.html" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Start -->
            <div class="col-lg-2 bg-dark">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <h4 class="text-light">Admin Menu</h4>
                    <div class="list-group list-group-flush w-100">
                        <a href="adminpanel.php" class="list-group-item list-group-item-action bg-dark text-light">Dashboard</a>
                        <a href="manageproduct.php" class="list-group-item list-group-item-action bg-dark text-light">Manage Products</a>
                        <a href="manageorder.php" class="list-group-item list-group-item-action bg-dark text-light">Manage Orders</a>
                        <a href="manageuser.php" class="list-group-item list-group-item-action bg-dark text-light">Manage Users</a>
                        <a href="adminsettings.php" class="list-group-item list-group-item-action bg-dark text-light">Settings</a>
                    </div>
                </div>
            </div>
            <!-- Sidebar End -->

            <!-- Main Content Start -->
            <div class="col-lg-10">
                <div class="container p-4">
                    <h2>Dashboard</h2>
                    <p>Welcome to the admin panel of AlatCampingKu. Here you can manage all the aspects of the website.</p>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total Products</h5>
                                    <p class="card-text">3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-secondary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total Orders</h5>
                                    <p class="card-text">2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total Users</h5>
                                    <p class="card-text">1</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3>Recent Orders</h3>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>User</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>$150</td>
                                <td>Pending</td>
                                <td><button class="btn btn-sm btn-primary">View</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Smith</td>
                                <td>$200</td>
                                <td>Completed</td>
                                <td><button class="btn btn-sm btn-primary">View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Main Content End -->
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="#">AlatCampingKu</a>. All Rights Reserved.</p>
        <p class="m-0 text-center text-body">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
