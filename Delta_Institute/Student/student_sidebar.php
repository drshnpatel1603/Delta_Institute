<?php

@include('../assets/connection/config.php');

?>

<title> Student Dashboard </title>

<link rel="stylesheet" href="../assets/css/dashboard.css">

<!----===== Boxicons CSS ===== -->
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../Logo/logo4.png" style="width: 55px; height: 50px;" alt="">
                </span>

                <div class="text logo-text">
                    <img src="../Logo/logo5.png" style="width: 150px; height: 60px;" alt="">
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links p-0 ">

                    <li class="nav-link p-0 ">
                        <a href="../Student/student_index.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text"> Profile </span>
                        </a>
                    </li>

                    <li class="nav-link p-0 ">
                        <a href="../Student/result.php">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text"> Results </span>
                        </a>
                    </li>

                    <li class="nav-link p-0 ">
                        <a href="../Student/fee.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text"> Fees </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav.link">
                    <a onclick="checker()" href="../Login/logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text"><?php echo $_SESSION['name'] ?>
                        </span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>
    </nav>

    <script src="../assets/js/sidebar.js"></script>

    <script>
        function checker() {
            var result = confirm(' Are you sure Logout ?');
            if (result == false) {
                event.preventDefault();
            }
        }
    </script>

</body>

</html>