<?php
    require_once "../../config/config.php";

    unset($_SESSION['npsnSekolah']);
    unset($_SESSION['idSekolah']);
    echo "<script>window.location='login.php';</script>";
?>