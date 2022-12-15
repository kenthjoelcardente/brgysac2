<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
    body {
        background-image: url("assets/img/background/2.png");
        background-color: white;
        background-repeat: no-repeat;
    }

    @media only screen and (max-width: 620px) {
        /* For mobile phones: */
        body{
            background-size: 2500px;
            margin-left: -7%;
        }
    }
</style>

<br><br>

<section style="padding-left: 15%; padding-top: 2%;">
    <div>
        <div class="img-design">
            <img src="assets/img/png/INFORMATION SYSTEM (12).png" class="vector-design-none">
        </div>

        <div class="text-info-login">

            <div class="img-design" style="margin-top: -20%;"> <img src="assets/img/png/Untitled design.png" class="logo" style="margin-top: -10px;margin-bottom: -30px; width: 300px;">
                <h3 style="font-weight: bold;">Barangay Sac-sac Bacong</br>INFORMATION SYSTEM</h3>
                
                <!--Login Input-->
                <form action="resident/login_config.php" method="post">
                <label class="label">Email Address</label>
                <input autocomplete="off" name="Email" id="Username" class="input" type="email" required>
                <div></div>
                <label class="label">Password</label>
                <input autocomplete="off" name="Password" id="Password" class="input" type="password" required>
                <i class="far fa-eye" id="togglePassword" style="margin-left: -40px; cursor: pointer; color:black;"></i>
                <div></div>
                <p>Didn't have an account? <a href="register.php"><b>Create Account</b></a></p>
                <button name="login_user" type="submit" style="width:200px;"><strong>Login</strong></button><br><br>
                <a href="home.php">Continue as Guest?</a>
                </form>
            </div>
        </div>


        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#Password');

            togglePassword.addEventListener('click', function(e) {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye slash icon
                this.classList.toggle('fa-eye-slash');
            });
        </script>
    </div>
    </div>
</section>