<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<?php include('navbar.php'); ?>
<?php

if (!isset($_SESSION["residentfullname"])) {
    header("Location:index.php");
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>

<style>
    body {
        background-image: url("assets/img/background/1.png");
        background-color: white;
        background-repeat: no-repeat;
    }

    .box img {
        border-radius: 50%;
        width: 250px;
        height: 250px;
        background-color: white;
        padding: 5px;
    }

    .box1 img {
        object-fit: cover;
    }

    @media only screen and (max-width: 620px) {

        /* For mobile phones: */
        body {
            background-size: 1000px;
        }
    }
</style>
<?php
//connecting to the database
$connection = new mysqli('localhost', 'root', '', 'brgysac2_db');
if ($connection->connect_error) {
    echo "Error connecting database";
}
?>
<?php
$residentid = $_SESSION["residentid"];
?>



<?php
global $residentid;
$sql1 = "SELECT * FROM tbl_resident WHERE ResidentId = '$residentid'";
$query = mysqli_query($connection, $sql1);
$rowCount = mysqli_num_rows($query);
while ($row = mysqli_fetch_assoc($query)) {

    $mname = $row['mname'];
    $fullname = $row["fname"] . " " . $mname[0] . '.' . " " . $row["lname"];
    $gender = $row['Gender'];
    $status = $row['CivilStatus'];
    $bdate = $row['Birthdate'];
    $purok = $row['Purok'];
    $contactno = $row['ContactNo'];
    $email = $row['email'];
    $residency = $row['Resdate'];
    $bdatestr = date("M jS, Y", strtotime($bdate));
    $dob = new DateTime($bdate);
    $today = new DateTime('today');
    $year = $dob->diff($today)->y;
}
?>

<br><br>
<section style="margin-top: 100px;">
    <div style="text-align: center; ">
        <div >
            <?php
            $connection = mysqli_connect("localhost", "root", "", "brgysac2_db");

            $sql2 = "SELECT * FROM tbl_resimg WHERE ResidentId = '$residentid'";
            $query = mysqli_query($connection, $sql2);
            $rowCount = mysqli_num_rows($query);
            while ($row = mysqli_fetch_assoc($query)) {
                $image = $row['imageData'];
            ?>
            <?php
            }
            ?>
            <?php
            if (isset($image)) {
            ?>
                
                <div>

                    <div class="wrapper">
                        <div class="box box1"><img src=" data:image/jpeg;base64,<?php echo base64_encode($image); ?>" /></div>
                    </div>


                <?php
            } else {
                ?>
                    <h3>You haven't uploaded a <b>Profile Picture</b> yet!</h3>
                    <form action="uploadrespic/upload-config.php" method="post" enctype="multipart/form-data">
                        Upload a clear photo of you:
                        <input type="file" name="images" accept="image/x-png,image/jpeg" required>
                        <input type="hidden" name="residentid" value="<?php echo $residentid; ?>">
                        <h1></h1>
                        <input type="submit" name="validate">
                    </form>
                    <hr style="width:50%; margin-left:23%">
                </div>
                <?php

                ?>
            <?php }
            ?>

            <div>
            <h1>Personal Information</h1>
                <h3>
                    <?php echo $fullname; ?>
                </h3>
                <h4>Age:
                    <?php echo $year; ?>
                </h4>
                <h4>Birthdate:
                    <?php echo $bdatestr; ?>
                </h4>
                <h4>Gender:
                    <?php echo $gender; ?>
                </h4>
                <h4>Civil Status:
                    <?php echo $status; ?>
                </h4>
                <h4></h4>
                <h1>Address</h1>
                <h4>Purok:
                    <?php echo $purok; ?>
                </h4>
                <h4></h4>
                <h1>Contact Information</h1>
                <h4>Contact Number:
                    <?php echo $contactno; ?>
                </h4>
                <h4>Email:
                    <?php echo $email; ?>
                </h4>
            </div>

        </div>
    </div>

    <div style="padding-left: 15%; padding-top: 2%;">
        <div class="img-design">
        </div>
    </div>
</section>
<!---->
<?php include('footer.php'); ?>

<head>