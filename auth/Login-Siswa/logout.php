<?php
    require_once "../../config/config.php";

    unset($_SESSION['nisnSiswa']);
    unset($_SESSION['idSiswa']);
    echo "<script>window.location='login.php';</script>";
?>