<?php
//connecting to the database
$connection = new mysqli('localhost', 'root', '', 'brgysac2_db');
if ($connection->connect_error) {
    echo "Error connecting database";
    
}
?>


<?php

if (isset($_POST['register_cust'])) {
    $db = mysqli_connect('localhost', 'root', '', 'brgysac2_db');

    $email = $_POST['EAddress'];
    $contactno = $_POST['ContactNum'];

    setcookie("Fname",$_POST['Fname'], time() + (120 * 30), "/");
    setcookie("Mname",$_POST['Mname'], time() + (120 * 30), "/");
    setcookie("Lname",$_POST['Lname'], time() + (120 * 30), "/");   
    setcookie("Gender",$_POST['Gender'], time() + (120 * 30), "/");
    setcookie("CivilStatus",$_POST['CivilStatus'], time() + (120 * 30), "/");
    setcookie("Birthdate",$_POST['Birthdate'], time() + (120 * 30), "/");
    setcookie("EAddress",$_POST['EAddress'], time() + (120 * 30), "/");
    setcookie("ContactNum",$_POST['ContactNum'], time() + (120 * 30), "/");
    setcookie("Resdate",$_POST['Resdate'], time() + (120 * 30), "/");
    setcookie("Purok",$_POST['Purok'], time() + (120 * 30), "/");
    setcookie("Password",$_POST['Password'], time() + (120 * 30), "/");


    $sql_u = "SELECT * FROM tbl_resident WHERE ContactNo='$contactno'";
    $sql_e = "SELECT * FROM tbl_resident WHERE email='$email'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        header("Location:register.php");
  	}else if(mysqli_num_rows($res_e) > 0){
        header("Location:register.php");
  	}else{
        header("Location:otp/otp-config.php");
  	}
}


if (isset($_POST['login_user'])) {
    include('resident/login_config.php');
} else {
    
}
?>