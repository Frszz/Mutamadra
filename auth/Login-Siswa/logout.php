<?php
    require_once "../../config/config.php";

    unset($_SESSION['nisnSiswa']);
    echo "<script>window.location='login.php';</script>";
?>