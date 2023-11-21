<?php
    require_once "../../config/config.php";

    unset($_SESSION['npsnSekolah']);
    echo "<script>window.location='login.php';</script>";
?>