<?php

session_start();

if (isset($_SESSION["username"])) {
    header("landing_page.php");
} else {
    echo "<script>
    alert('You must be login to view this page');
    window.location='index.php';
    </script>";
    exit();
}
