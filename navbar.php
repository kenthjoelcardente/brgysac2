<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link href="styles/nav-style.css" rel="stylesheet" type="text/css" />

<nav style="position: fixed; top: 0; left: 0; z-index: 9999; width: 100%;">
    <ul class="menu">
        <img src="assets/img/png/Untitled design.png" style="height:75px;" />
        <li class="logoname"><a href="home.php">Barangay Sac-sac Bacong </br>Information System</a></li>
        <li class="item"><a href="home.php">Home</a></li>
        <li class="item"><a href="#">Announcements</a></li>
        <li class="item"><a href="#">Events</a></li>
        <li class="item"><a href="#">Projects</a></li>
        <li class="item"><a href="#sectionOfficials">Officials</a></li>
        <?php

        if (!isset($_SESSION['residentid'])) {
            session_start();
        }
            
        
        if (isset($_SESSION['residentid'])) {
            include('assets/nav-options/logged.php');
        }
        else {
            include('assets/nav-options/nologged.php');
        }
        ?>
    </ul>
</nav>

<script>
    const toggle = document.querySelector(".toggle");
    const menu = document.querySelector(".menu");
    const items = document.querySelectorAll(".item");

    /* Toggle mobile menu */
    function toggleMenu() {
        if (menu.classList.contains("active")) {
            menu.classList.remove("active");
            toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
        } else {
            menu.classList.add("active");
            toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
        }
    }

    /* Activate Submenu */
    function toggleItem() {
        if (this.classList.contains("submenu-active")) {
            this.classList.remove("submenu-active");
        } else if (menu.querySelector(".submenu-active")) {
            menu.querySelector(".submenu-active").classList.remove("submenu-active");
            this.classList.add("submenu-active");
        } else {
            this.classList.add("submenu-active");
        }
    }

    /* Close Submenu From Anywhere */
    function closeSubmenu(e) {
        if (menu.querySelector(".submenu-active")) {
            let isClickInside = menu
                .querySelector(".submenu-active")
                .contains(e.target);

            if (!isClickInside && menu.querySelector(".submenu-active")) {
                menu.querySelector(".submenu-active").classList.remove("submenu-active");
            }
        }
    }
    /* Event Listeners */
    toggle.addEventListener("click", toggleMenu, false);
    for (let item of items) {
        if (item.querySelector(".submenu")) {
            item.addEventListener("click", toggleItem, false);
        }
        item.addEventListener("keypress", toggleItem, false);
    }
    document.addEventListener("click", closeSubmenu, false);
</script>