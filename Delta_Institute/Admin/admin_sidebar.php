<title> Admin Dashboard</title>

<link rel="stylesheet" href="../assets/css/dashboard.css">

<!----===== Boxicons CSS ===== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<style>
    .drop {
        margin: 0px 9px -25px 12px;
        padding: 0px 0px 38px 0px;
    }

    .logo {
        margin: 8px;
        padding: 2px 3px;
    }
</style>

</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../Logo/logo4.png" style="width: 53px; height: 50px;" alt="">
                </span>

                <div class="text logo-text">
                    <img src="../Logo/logo5.png" style="width: 150px; height: 60px;" alt="">
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links p-0">

                    <li class="nav-link p-0">
                        <a href="../Admin/admin_index.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text"> Pending Rqueest </span>
                        </a>
                    </li>

                    <li class="nav-link p-0">
                        <a href="../Admin/student_registration.php">
                            <i class='bx bx-user-pin icon'></i>
                            <span class="text nav-text"> Student Registration </span>
                        </a>
                    </li>

                    <li class="nav-link p-0">
                        <a href="../Admin/student_result.php">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text"> Student Results </span>
                        </a>
                    </li>

                    <li class="nav-link p-0">
                        <a href="../Admin/student_fee.php">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text"> Student Fees </span>
                        </a>
                    </li>

                    <li class="nav-link p-0">
                        <a href="../Admin/faculty_info.php">
                            <i class='fa fa-user-tie icon'></i>
                            <span class="text nav-text"> Faculty Information </span>
                        </a>
                    </li>

                    <li class="nav-link p-0">
                        <a href="../Admin/news_message.php">
                            <i class='bx bx-detail icon'></i>
                            <span class="text nav-text"> News & Update </span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav.link">
                    <a onclick="checker()" href="../Login/logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text"><?php echo $_SESSION['admin'] ?>
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