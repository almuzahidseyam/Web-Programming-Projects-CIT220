<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Point of Sales</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://localhost/POS/">
    <!-- Header Icon -->
    <link rel="icon" href="views/img/template/pos.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="views/plugins/ionicons/ionicons.min.css">
    <!-- iCheck Plugin -->
    <link rel="stylesheet" href="views/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="views/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="views/plugins/sweetalert2/sweetalert2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="views/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="views/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="views/dist/css/adminlte.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="views/css/pos.css">

    <!-- jQuery -->
    <script src="views/plugins/jquery/jquery.min.js"></script>
    <!-- Font Awesome -->
    <script src="views/plugins/fontawesome-free/js/all.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Sweet Alert -->
    <script src="views/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- DataTables -->
    <script src="views/plugins/datatables/jquery.dataTables.js"></script>
    <script src="views/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- InputMask -->
    <script src="views/plugins/moment/moment.min.js"></script>
    <script src="views/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!--    To enable IE 11 support. Promise Polyfill    -->
    <script src="views/plugins/core-js/core.min.js"></script>
    <!-- AdminLTE App -->
    <script src="views/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="views/dist/js/demo.js"></script>
</head>
<body class="<?php
    if (isset($_SESSION["beginSession"]) && $_SESSION["beginSession"] = "ok") {
        echo 'hold-transition sidebar-mini';
    } else{
        echo 'login-page';
    }
?>">
    <?php
    if (isset($_SESSION["beginSession"]) && $_SESSION["beginSession"] = "ok"){
        echo '<div class="wrapper">';

        include "views/modules/navbar.php";
        include "views/modules/sidebar.php";

        if(isset($_GET["route"])){
            if($_GET["route"] == "dashboard"||$_GET["route"] == "dashboard/"||$_GET["route"] == "Dashboard"||$_GET["route"] == "Dashboard/"||$_GET["route"] == "home"||$_GET["route"] == "home/"||$_GET["route"] == "Home"||$_GET["route"] == "Home/"){
                echo '<script>window.location = "";</script>';
            } else if($_GET["route"] == "users"||$_GET["route"] == "users/"||$_GET["route"] == "Users"||$_GET["route"] == "Users/"){
                include "views/modules/users.php";
            } else if($_GET["route"] == "categories"||$_GET["route"] == "categories/"||$_GET["route"] == "Categories"||$_GET["route"] == "Categories/"){
                include "views/modules/categories.php";
            } else if($_GET["route"] == "products"||$_GET["route"] == "products/"||$_GET["route"] == "Products"||$_GET["route"] == "Products/"){
                include "views/modules/products.php";
            } else if($_GET["route"] == "customers"||$_GET["route"] == "customers/"||$_GET["route"] == "Customers"||$_GET["route"] == "Customers/"){
                include "views/modules/customers.php";
            } else if($_GET["route"] == "manage-sales"||$_GET["route"] == "manage-sales/"||$_GET["route"] == "Manage-Sales"||$_GET["route"] == "Manage-Sales/"){
                include "views/modules/manage-sales.php";
            } else if($_GET["route"] == "create-sales"||$_GET["route"] == "create-sales/"||$_GET["route"] == "Create-Sales"||$_GET["route"] == "Create-Sales/"){
                include "views/modules/create-sales.php";
            } else if($_GET["route"] == "sales-report"||$_GET["route"] == "sales-report/"||$_GET["route"] == "Sales-Report"||$_GET["route"] == "Sales-Report/"){
                include "views/modules/sales-report.php";
            } else if($_GET["route"] == "logout"||$_GET["route"] == "sales-report/") {
                include "views/modules/logout.php";
            } else{
                include "views/modules/404.php";
            }
        } else{
            include "views/modules/dashboard.php";
        }

        include "views/modules/footer.php";
        echo '</div>';

    } else{
        if(isset($_GET["route"])){
            echo '<script>window.location = "";</script>';
        } else {
            include "views/modules/login.php";
        }
    }
    ?>
    <script src="views/js/pos.js"></script>
    <script src="views/js/users.js"></script>
    <script src="views/js/categories.js"></script>
    <script src="views/js/products.js"></script>
    <script src="views/js/customers.js"></script>
</body>
</html>
