<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>
<link href="../styles/styles.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
<?php include('navbar.php');
session_start();
if (!isset($_SESSION['residentid'])) {
    header("Location:home.php");
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
        <h1>Barangay Clearance - Request Form</h1>
    </div>
    <form action="certification/cert-config.php" method="post" enctype="multipart/form-data">

        <input type="hidden" id="RequesteeID" name="RequesteeID" value="<?php echo $_SESSION["residentid"]; ?>">
        <input type="hidden" id="residentpurok" name="residentpurok" value="<?php echo $_SESSION["purok"]; ?>">

        <label class="label">Request Clearance for:</label>

        <select name="Relationship" id="selectBox" onchange="changeFunc();" required>
            <option value="Myself">Myself</option>
            <option value="FamilyMem">Family Member</option>
        </select>
        <input name="Name" placeholder="Enter Full Name" type="text" style="display: none" id="textboxesname" required>
        <input name="Age" placeholder="Age" type="text" style="display: none" id="textboxesage" maxlength="2" minlength="2" onkeypress="return onlyNumberKey(event)" required>
        <input name="Contact" placeholder="Please Enter Contact Number" type="text" style="display: none" id="textboxescontact" maxlength="11" minlength="11" onkeypress="return onlyNumberKey(event)" required>
        <script type="text/javascript">
            function changeFunc() {
                var selectBox = document.getElementById("selectBox");
                var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                if (selectedValue == "FamilyMem") {
                    $('#textboxesname').show();
                    $('#textboxescontact').show();
                    $('#textboxesage').show();
                } else {
                    $('#textboxesname').hide();
                    $('#textboxescontact').hide();
                    $('#textboxesage').hide();
                }
            }
        </script>
        <div>
            <h2></h2>
        </div>
        <div>
            <label style="cursor:pointer;" for="inputTag">
                Upload a latest Cedula Screenshot<br />
                <img src="" height="200" id="imgview" alt="Image preview...">
                <h3></h3>
                <i class="fa fa-2x fa-camera"></i>
                <input style="display: none;" id="inputTag" onchange="previewFile()" type="file" name="images" accept="image/x-png,image/jpeg" />
                <br />
                <span style="color:green;" id="imageName"></span>
            </label>
        </div>

        <div>
        </div>
        <h4></h4>
        <label class="label"><b>Purpose</b></label>
        <p style="color: red;">*please specify clearly the reason why you need the cedula</p>
        <h4></h4>

        <textarea name="purpose" cols="40" rows="5" required></textarea>
        <div>
            <h2></h2>
        </div>


        <input type="hidden" name="requestee" value=" <?php echo $_SESSION["residentfullname"] ?>">
        <button type="submit" name="request_clear" value="request_clear" style="width:200px; margin-top:10px; margin-bottom:40px;"><strong>Send Request</strong></button>


    </form>
</div>
<!---->



<?php include('certification/resident-reqclear.php'); ?>

<script>
    function onlyNumberKey(evt) {

        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>

<script>
    let input = document.getElementById("inputTag");
    let imageName = document.getElementById("imageName")

    input.addEventListener("change", () => {
        let inputImage = document.querySelector("input[type=file]").files[0];

        imageName.innerText = inputImage.name;
    })
</script>

<script>
    function previewFile() {
  var preview = document.querySelector('#imgview');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}
</script>

<?php
include('footer.php'); ?>