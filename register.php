<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
    body {
        background-image: url("assets/img/background/2.png");
        background-color: white;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    @media only screen and (max-width: 620px) {
        /* For mobile phones: */
    }
</style>

<br><br>

<section style="padding-left: 5%;">
    <div>
        <div class="img-design">
            <img src="assets/img/png/INFORMATION SYSTEM (6).png" class="vector-design-none" style="position:fixed;">
            <img src="assets/img/png/Untitled design.png" class="logo-design">
        </div>

        <div class="text-info-register">
            <div class="img-design">
                <img src="assets/img/png/Untitled design.png" class="logo" style="margin-top: -50px;">
                <h3 style="font-weight: bold;">REGISTRATION FORM</h3>

                <form action="config.php" method="post">
                    <div>

                        <div>
                            <label class="label" style="text-align:center;">First Name</label>
                            <input name="Fname" id="fname" class="input" type="text" onkeydown="return /[a-z, ]/i.test(event.key)" required>
                            <div>
                                <h2></h2>
                            </div>

                            <label class="label" style="text-align:center;">Middle Name</label>
                            <input name="Mname" id="mname" class="input" type="text" onkeydown="return /[a-z, ]/i.test(event.key)">
                            <div>
                                <h2></h2>
                            </div>

                            <label class="label" style="text-align:center;">Last Name</label>
                            <input name="Lname" id="lname" class="input" type="text" onkeydown="return /[a-z, ]/i.test(event.key)" required>
                            <div>
                                <h2></h2>
                            </div>

                            <div class="custom-select" style="text-align:center;" style="width:200px;">
                                <label class="label">Gender</label>
                                <select name="Gender">
                                    <option value="Male">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div>
                                <h2></h2>
                            </div>

                            <div class="custom-select" style="text-align:center;" style="width:200px;">
                                <label class="label">Civil Status</label>
                                <select name="CivilStatus" id="civstat">
                                    <option value="single">Select Civil Status</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="separated">Separated</option>
                                    <option value="widowed">Widowed</option>
                                </select>

                            </div>
                            <div>
                                <h2></h2>
                            </div>

                            <label class="label" style="text-align:center;">Birthdate</label>
                            <input autocomplete="off" name="Birthdate" id="bdate" class="input" type="Date" max="2005-01-01" required>
                            <div>
                                <h2></h2>
                            </div>
                        </div>

                        <div\>

                            <div>
                                <h2>

                                </h2>
                            </div>
                            <label>
                                <?php
                                if (isset($_COOKIE["error"])) {
                                    if ($_COOKIE["error"] = "Sorry... Email already taken") {
                                        echo $_COOKIE["error"];
                                    }
                                }
                                ?></label>
                            <label class="label" style="text-align:center;">Email Address</label>
                            <input placeholder="@gmail.com" name="EAddress" id="EAddress" class="input" type="email" required>
                            <div>
                                <h2></h2>
                            </div>
                            <label>
                                <?php
                                if (isset($_COOKIE["error"])) {
                                    if ($_COOKIE["error"] = "Sorry... Phone Number already taken") {
                                        echo $_COOKIE["error"];
                                    }
                                }
                                ?></label>
                            <label class="label" style="text-align:center;">Cellphone Number</label>
                            <input class="input" type="tel" name="ContactNum" id="contactnum" placeholder="09*********" maxlength="11" minlength="11" onkeypress="return onlyNumberKey(event)" required />
                            <div>
                                <h2></h2>
                            </div>
                            <label class="label" style="text-align:center;">Start of Residency</label>
                            <input autocomplete="off" name="Resdate" id="resdate" class="input" type="Date" max="2022-12-16" required>
                            <div>
                                <h3></h3>
                            </div>

                            <div class="custom-select" style="text-align:center;">
                                <label class="label">Purok</label>
                                <select name="Purok" id="purok">
                                    <option value="sin">Select Purok</option>
                                    <option value="saging">Saging</option>
                                    <option value="sangra">Sangra</option>
                                    <option value="sawali">Sawali</option>
                                    <option value="sinibit">Sinibit</option>
                                </select>

                            </div>
                            <div>
                                <h2></h2>
                            </div>

                            <label class="label" style="text-align:center;">Password *minimum of 8 Characters</label>
                            <input autocomplete="off" name="Password" id="Password" class="input" type="password" min="8" size="30">
                            <i class="far fa-eye" id="togglePassword" style="margin-left: -40px; cursor: pointer; color:#FF5C00;"></i>
                            <div></div>
                            <button type="submit" style="text-align:center;" name="register_cust" style="width:200px; margin-top:10px; margin-bottom:40px;"><strong>Create Account</strong></button>
                    </div>
            </div>

            </form>



        </div>
    </div>

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
        function detailssubmit() {
            alert("Your details were Submitted");
        }
    </script>
    <!--SEE/UNSEE Password-->
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

    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < ll; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            yl = y.length;
                            for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }

        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    </script>
    </div>
    </div>
</section>