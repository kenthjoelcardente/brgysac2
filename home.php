<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<?php include('navbar.php'); ?>

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
<section style="margin-top: 100px;">
    <div>
        <div class="home-board">
            <img src="assets/img/png/Untitled design.png" class="logo-index">
            <h3 style="font-weight: bolder;">Barangay Sac-sac Bacong</br>INFORMATION SYSTEM</h3>
            <p style="color: black;">This Barangay Information System , which is a part of the web-based barangay system. The Barangay Information System project is an online platform where the government connects and manages every barangay in the municipality.

This barangay will beneﬁt from the research. It will change the way the barangay conducts daily business, appropriately applied, uses less paper, and enables transactions to be completed more better and more reliably.</p>
        </div>
    </div>

    <div style="padding-left: 15%; padding-top: 2%;">
        <div class="img-design">
            <img src="assets/img/png/INFORMATION SYSTEM (4).png" class="vector-design">
        </div>
    </div>
</section>
<!---->

<?php include('announcement/announcement.php'); ?>

<section id="sectionOfficials">
    <?php include('officials/table-list.php'); ?>
</section>

<?php include('footer.php'); ?>