<?php
include("sessionchecker.php");
include("connection.php");
include("head.php");

$id = $_SESSION['id'];
$sql = "SELECT * FROM order_table WHERE id = $id";
$result = $conn->query($sql);
$cart_items = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cart_items[] = $row;
    }
}

$_SESSION['cart'] = $cart_items;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\landing_page.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light m-0 p-0">
        <div class="container-fluid ms-0 ms-md-3 d-flex align-items-center justify-content-space justify-content-md-between d-lg-none">
            <div>
                <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" style="width:15px"></span>
                </a>

                <a id="img" class="navbar-brand" href="#">
                    <img src="img/LOGOO.png" alt="YsakaLogo" class="d-inline-block" style="width: 110px">
                </a>
            </div>

            <div class="d-lg-none">
                <button class="btn p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightSmall" aria-controls="offcanvasRightSmall" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifications">
                    <div class="orders">
                        <div class="notif">
                            <p>9+</p>
                        </div>
                        <div class="order_button">
                            <i class='bx bxs-bell'></i>
                        </div>
                    </div>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightSmall" aria-labelledby="offcanvasRightLabelSmall">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabelSmall">Notifications</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <div id="offcanvasExampleLabel" class="offcanvas-title d-flex flex-row align-items-center justify-content-center justify-content-md-end me-2">
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <a href="user_setting.php">Account</a>
                                </div>
                            </li>
                            <li>
                                <div class="drop_items">
                                    <a href="user_order.php">Orders</a>
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
                        <a class="nav-link text-dark active" href=" user_landing_page.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="user_products.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark  " aria-current="page" href="user_cart.php">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-fluid ms-0 ms-md-3 d-none d-md-flex align-items-center justify-content-space justify-content-md-between">
            <a id="img" class="navbar-brand" href="#">
                <img src="img/LOGOO.png" alt="YsakaLogo" class="d-lg-inline-block float-start d-none" style="width: 110px">
            </a>

            <div class="container navbar-collapse d-flex d-md-none" id="navbarNav">
                <ul class="navbar-nav nav-fill gap-2 p-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark active" href="user_landing_page.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="user_products.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark " aria-current="page" href="user_cart.php">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">About Us</a>
                    </li>
                </ul>
            </div>

            <div class="right_nav d-none d-lg-flex">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightLarge" aria-controls="offcanvasRightLarge" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifications">
                    <div class="orders">
                        <div class="notif">
                            <p>9+</p>
                        </div>
                        <div class="order_button">
                            <i class='bx bxs-bell'></i>
                        </div>
                    </div>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightLarge" aria-labelledby="offcanvasRightLabelLarge">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabelLarge">Notifications</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a href="user_setting.php">Account</a>
                            </div>
                        </li>
                        <li>
                            <div class="drop_items">
                                <a href="user_order.php">Orders</a>
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

    <div class="container-fluid d-flex align-items-end justify-content-center flex-column position-absolute pe-2 gap-3 pb-0 pe-lg-5 " id="Intro">
        <div class="d-flex flex-column align-items-end text-end">
            <h1>Introduction</h1>
            <h5 id="introText" class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus eveniet dolore
                excepturi
                incidunt,
                amet
                quasi fugit animi perspiciatis quisquam molestias.</h5>
        </div>
        <a href="index-products.php"><button type="button" class="btn btn-lg btn-light p-3 w-100">Order Now</button></a>
    </div>

    <div class="overflow-hidden d-flex justify-content-center" style=" height: 60dvh">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active " data-bs-interval="3000">
                    <img src="img\homepic1.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="img\homepic2.jpg" class="d-block w-100  img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="img\homepic3.jpg" class="d-block w-100  img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="img\homepic4.jpg" class="d-block w-100  img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h3 class="pt-4 ps-4">Hot Products</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 m-1 mt-4 mb-4">
            <?php
            $res = mysqli_query($conn, "SELECT * FROM products");
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="col">
                    <div class="card w-100">
                        <img src="product-images/<?php echo $row['image_file'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['product_name'] ?></h5>
                            <p class="card-text">
                            <p>Php <?php echo $row['price'] ?>.00</p>
                            </p>
                            <a href="user_product_preview.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-primary">View
                                Product</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <footer>
        <div class="footer_content flex-wrap flex-md-nowrap">
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

    <div class="chat">
        <a href="user/chatroom.php?id=3">
            <button value=" <?php echo $row['chatroomid']; ?>" class=" border-0">
                <img src="data:image/png;base64,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" />
            </button>
        </a>

    </div>

</body>

</html>