<?php
include ("sessionchecker.php");
include ("connection.php");
include ("head.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\sale_report.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light m-0 p-0">
        <div
            class="container-fluid ms-0 ms-md-3 d-flex align-items-center justify-content-space justify-content-md-between d-lg-none">
            <div>
                <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" style="width:15px"></span>
                </a>

                <a id="img" class="navbar-brand" href="admin.php">
                    <img src="img/LOGOO.png" alt="YsakaLogo" class="d-inline-block" style="width: 110px">
                </a>
            </div>

            <div class="d-lg-none">
                <button class="btn p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightSmall"
                    aria-controls="offcanvasRightSmall" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Notifications">
                    <div class="orders">
                        <div class="notif">
                            <p>9+</p>
                        </div>
                        <div class="order_button">
                            <i class='bx bxs-bell'></i>
                        </div>
                    </div>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightSmall"
                    aria-labelledby="offcanvasRightLabelSmall">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabelSmall">Notifications</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="notification_section">
                            <a href="#">
                                <div class="notif_container">
                                    <div class="notif_title">
                                        <p>Notification Title</p>
                                    </div>
                                    <div class="notif_message">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sequi.
                                        </p>

                                    </div>
                                    <div class="notif_details">
                                        <p>Product name x 00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="notification_section">
                            <a href="#">
                                <div class="notif_container">
                                    <div class="notif_title">
                                        <p>Notification Title</p>
                                    </div>
                                    <div class="notif_message">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sequi.
                                        </p>

                                    </div>
                                    <div class="notif_details">
                                        <p>Product name x 00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="notification_section">
                            <a href="#">
                                <div class="notif_container">
                                    <div class="notif_title">
                                        <p>Notification Title</p>
                                    </div>
                                    <div class="notif_message">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sequi.
                                        </p>

                                    </div>
                                    <div class="notif_details">
                                        <p>Product name x 00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <div id="offcanvasExampleLabel"
                    class="offcanvas-title d-flex flex-row align-items-center justify-content-center justify-content-md-end me-2">
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="user-off">
                                <div class="photo ms-2 me-3">
                                    <img src="img/default-profile.jpg" alt="">
                                </div>
                                <div class="name ms-4">
                                    <p><?php echo $_SESSION['username'] ?></p>
                                </div>
                            </div>
                        </button>
                        <ul class="dropdown-menu p-2">
                            <li>
                                <div class="drop_items">
                                    <a href="admin_setting.php">Account</a>
                                </div>
                            </li>
                            <li>
                                <div class="drop_items">
                                    <a href="admin_order.php">Orders</a>
                                </div>
                            </li>
                            <li>
                                <div class="drop_items">
                                    <a href="admin_sale_report.php">Sale Report</a>
                                </div>
                            </li>
                            <li>
                                <div id="log_out" class="drop_items">
                                    <form action="logout.php" method="post">
                                        <button type="submit" name="logout" class="btn ">Log out</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav nav-fill gap-2 p-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark " href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="admin_products.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="container-fluid ms-0 ms-md-3 d-none d-md-flex align-items-center justify-content-space justify-content-md-between">
            <a id="img" class="navbar-brand" href="admin.php">
                <img src="img/LOGOO.png" alt="YsakaLogo" class="d-lg-inline-block float-start d-none"
                    style="width: 110px">
            </a>

            <div class="container navbar-collapse d-flex d-md-none" id="navbarNav">
                <ul class="navbar-nav nav-fill gap-2 p-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark " href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="admin-products.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">About Us</a>
                    </li>
                </ul>
            </div>

            <div class="right_nav d-none d-lg-flex">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightLarge"
                    aria-controls="offcanvasRightLarge" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Notifications">
                    <div class="orders">
                        <div class="notif">
                            <p>9+</p>
                        </div>
                        <div class="order_button">
                            <i class='bx bxs-bell'></i>
                        </div>
                    </div>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightLarge"
                    aria-labelledby="offcanvasRightLabelLarge">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabelLarge">Notifications</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="notification_section">
                            <a href="#">
                                <div class="notif_container">
                                    <div class="notif_title">
                                        <p>Notification Title</p>
                                    </div>
                                    <div class="notif_message">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sequi.
                                        </p>

                                    </div>
                                    <div class="notif_details">
                                        <p>Product name x 00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="notification_section">
                            <a href="#">
                                <div class="notif_container">
                                    <div class="notif_title">
                                        <p>Notification Title</p>
                                    </div>
                                    <div class="notif_message">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sequi.
                                        </p>

                                    </div>
                                    <div class="notif_details">
                                        <p>Product name x 00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="notification_section">
                            <a href="#">
                                <div class="notif_container">
                                    <div class="notif_title">
                                        <p>Notification Title</p>
                                    </div>
                                    <div class="notif_message">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sequi.
                                        </p>

                                    </div>
                                    <div class="notif_details">
                                        <p>Product name x 00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="user">
                            <div class="name">
                                <p><?php echo $_SESSION['username'] ?></p>
                            </div>
                            <div class="photo">
                                <img src="img/default-profile.jpg" alt="">
                            </div>
                        </div>
                    </button>
                    <ul class="dropdown-menu p-2">
                        <li>
                            <div class="drop_items">
                                <a href="admin_setting.php">Account</a>
                            </div>
                        </li>
                        <li>
                            <div class="drop_items">
                                <a href="admin_order.php">Orders</a>
                            </div>
                        </li>
                        <li>
                            <div class="drop_items">
                                <a href="admin_sale_report.php">Sale Report</a>
                            </div>
                        </li>
                        <li>
                            <div id="log_out" class="drop_items">
                                <form action="logout.php" method="post">
                                    <button type="submit" name="logout" class="btn ">Log out</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="container" class="container-fluid-sm container-md rounded mb-3 mt-1 p-3">
        <div class="row">
            <div id="graph" class="col-3 p-2 rounded">

                <div id="pie_chart" class="rounded p-2 mb-2">
                    <img class="rounded" src="img\pie_chart.png" alt="">
                </div>
                <div id="bar_graph" class="rounded p-2 mt-2">
                    <img class="rounded" src="img\bar_graph.png" alt="">
                </div>
            </div>

            <div class="col-9 rounded p-2">
                <div id="report" class="w-100 rounded p-2">
                    <div id="timeline" class="w-100 p-2">
                        <a class="rounded mx-1 p-2 active" href="admin_sale_report.php">Week</a>
                        <a class="rounded mx-1 p-2" href="admin_sale_report_month.php">Month</a>
                        <a class="rounded mx-1 p-2" href="admin_sale_report_year.php">Year</a>
                    </div>
                    <div id="report_title" class=" my-3">
                        <h5>Sale Summary this Week</h5>
                    </div>
                    <div id="table">
                        <table id="table" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Items Sold</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">00.00</th>
                                    <td>Lorem, ipsum dolor.</td>
                                    <td>₱ 00.00</td>
                                    <td>00</td>
                                    <td>₱ 00.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">00.00</th>
                                    <td>Lorem, ipsum dolor.</td>
                                    <td>₱ 00.00</td>
                                    <td>00</td>
                                    <td>₱ 00.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">00.00</th>
                                    <td>Lorem, ipsum dolor.</td>
                                    <td>₱ 00.00</td>
                                    <td>00</td>
                                    <td>₱ 00.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="total_sale" class="w-100 pe-2">
                        <p class="m-0">Total Sales:</p>
                        <h5 id="price" class="m-0">₱ 00.00</h5>
                    </div>
                </div>

            </div>

        </div>



    </div>
    <footer>
        <div class="footer_content flex-wrap">
            <div class="footer_logo">
                <img id="footer-logo" src="img\LOGO.png" alt="">
            </div>
            <div class="footer_details">
                <h4>SOCIALS</h4>
                <div class="socials">
                    <a href="#">
                        <p><i class='bx bxl-facebook-circle'></i>Facebook</p>
                    </a>
                    <a href="#">
                        <p><i class='bx bxl-tiktok'></i>Tiktok</p>
                    </a>
                    <a href="#">
                        <p><i class='bx bxl-instagram-alt'></i>Instagram</p>
                    </a>
                </div>
                <div class="copyright">
                    <p><i class='bx bx-copyright'></i>2021 Jessa Mae O. Figueroa | All Rights Reserve</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>