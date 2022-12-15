<?php
session_start();
if (isset($_SESSION['residentid'])) {
    session_destroy();
    echo $_SESSION['residentid'];
    header("Location:index.php");
}
