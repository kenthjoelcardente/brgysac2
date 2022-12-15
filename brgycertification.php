<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>
<link href="../styles/styles.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<?php include('navbar.php');
session_start();
if (!isset($_SESSION['residentid'])) {
    header("Location:home.php");
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

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
                }, 800, function () {

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

    @media only screen and (max-width: 620px) {

        /* For mobile phones: */
        body {
            background-size: 1000px;
        }
    }
</style>

<br><br>


<div style="margin-top: 100px; margin-left:50px;">
    <div>
        <h1>Barangay Certification - Request Form</h1>
    </div>
    <form action="certification/cert-config.php" method="post">

        <input type="hidden" id="RequesteeID" name="RequesteeID" value="<?php echo $_SESSION["residentid"]; ?>">
        <input type="hidden" id="residentpurok" name="residentpurok" value="<?php echo $_SESSION["purok"]; ?>">

        <label class="label">Request Certification for:</label>

        <select name="Relationship" id="selectBox" onchange="changeFunc();">
            <option value="Myself">Myself</option>
            <option value="FamilyMem">Family Member</option>
        </select>
        <input name="Name" placeholder="Enter Full Name" type="text" style="display: none" id="textboxes">
        <script type="text/javascript">
            function changeFunc() {
                var selectBox = document.getElementById("selectBox");
                var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                if (selectedValue == "FamilyMem") {
                    $('#textboxes').show();
                } else {
                    $('#textboxes').hide();
                }
            }
        </script>
        <div>
        </div>
        <label class="label">Gender</label>
        <select name="gender" id="gender">
            <option value="his">Male</option>
            <option value="her">Female</option>
        </select>
        <h4></h4>
        <label class="label">Purpose</label>
        <h4></h4>

        <textarea name="purpose" cols="40" rows="5"></textarea>

        <div>
            <h2></h2>
        </div>
        <button type="submit" name="request_cert" value="request_cert"
            style="width:200px; margin-top:10px; margin-bottom:40px;"><strong>Send Request</strong></button>


    </form>
</div>
<!---->



<?php include('certification/resident-reqcert.php'); ?>

<?php

include('footer.php'); ?>