<?php
    require_once "../../config/config.php";

    unset($_SESSION['emailAdmin']);
    echo "<script>window.location='login.php';</script>";
?>