<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<title> student Information </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

<link rel="stylesheet" href="../assets/css/dashboard.css">

<style>
    body {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .border1 {
        border: 1px solid black;

    }

    /* .header{
        width: 10px  ;
    } */

    .bgcolor {
        background-color: #6610f2;
        color: white;
        width: 9%;
    }

    .wid {
        width: 91%;
    }

    .tran {
        transform: rotate(270deg);
        position: relative;
        top: 380px;
    }

    li {
        list-style: none;
    }

    .right {
        justify-content: space-between;
    }

    .logbutton {
        height: 50px;
        width: 135px;
        margin-right: 50px;
        margin-top: 15px;
        text-align: center;
        justify-content: center;
        padding-top: 13px;
        cursor: none;
    }
</style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 border1 bg-warning ">
                <div class="logo">
                    <img class="mx-1 my-1" src="../Logo/logo2.png" style="height: 70px; width: 210px; ">
                </div>
            </div>
            <div class="col-10 border d-flex right">
                <h3 class="m-4"> Student Information</h3>
                <button class="btn btn-info mr-5 logbutton d-flex ">
                    <span class="text"><?php echo $_SESSION['admin'] ?>
                    </span>
                    <div class="dropdown mx-2">
                        <li class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></li>
                        <div class="dropdown-menu" aria-labelledby="my-dropdown">
                            <a onclick="checker()" href="../login/logout.php" class="dropdown-item text-decoration-none"> Log Out </a>
                        </div>
                    </div>
                </button>
            </div>
        </div>


        <div class="row vh-100">
            <div class="col-2 border1 bgcolor ">
                <div class="sidebar-menu-content">
                    <h1 class="tran"> Welcome&nbsp;<?php echo $_SESSION['admin'] ?> </h1>
                </div>
            </div>


            <div class="col-10 border1 wid">
                <div class="row">
                    <div class="col-11 my-4 m-5 bg-warning" style="height: 95px;">
                        <form action="" method="post">
                            <div>
                                <label style="font-size:20px; margin: 5px;"> Enter Student Id :</label>
                                <div class="">
                                    <input style="height: 40px; width: 300px;" type="text" class="" name="name" placeholder="Serach here ...">
                                    <input type="submit" name="submit" class="btn btn-dark" value="Serach">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <center>
                        <form action="" method="post">
                            <table id="table" class="table table-hover table-bordered  table-striped w-100">
                                <tr class="text-center" style="height: 55px;">
                                    <th> Sr No. </th>
                                    <th> Stduent Id </th>
                                    <th> Enrollment No. </th>
                                    <th> Name </th>
                                    <th> Profile </th>
                                    <th> Branch </th>
                                    <th> Phone No. </th>
                                    <th> Admission Date </th>
                                    <th> View </th>
                                </tr>
                                <?php

                                if (isset($_POST['submit'])) {
                                    $sid = $_POST['name'];

                                    $select = " SELECT * FROM student_info WHERE CONCAT(stu_id, enrollment, student_name, branch, phone_number) LIKE '%$sid%' and action = 'Activate' ORDER BY last_name ASC ";
                                    $result = mysqli_query($conn, $select);

                                    $id = 1;

                                    if (mysqli_num_rows($result) == 0) {
                                        echo " <h3> Sorry! not found student...";
                                    } else {
                                        while ($row = mysqli_fetch_array($result)) { ?>
                                            <tr style="height: 40px;">
                                                <th class="text-center"> <?php echo $id++ ?> </th>
                                                <td><?php echo $row["stu_id"] ?></td>
                                                <td><?php echo $row["enrollment"] ?></td>
                                                <td><?php echo $row["last_name"] . " " . $row["student_name"] . " " . $row["father_name"] ?></td>
                                                <td align="center"> <img src="<?php echo $row['student_image']; ?>" height="65px" width="60px"> </td>
                                                <td><?php echo $row["branch"] ?></td>
                                                <td><?php echo $row["phone_number"] ?></td>
                                                <td><?php echo date("d-M-y", strtotime($row["admission_date"])); ?></td>
                                                </td>
                                                <td class="text-center">
                                                    <?php
                                                    echo "<a class='btn btn-primary' href=student_profile.php?sid=" . $row['stu_id'] . ">Profile</a> "
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>

                                    <?php }
                                    ?>

                                    <?php
                                } else {

                                    $select = " SELECT * FROM student_info WHERE action ='Activate' ORDER BY last_name ASC ";
                                    $result = mysqli_query($conn, $select);

                                    $id = 1;

                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <tr style="height: 40px;">
                                            <th class="text-center"> <?php echo $id++ ?> </th>
                                            <td><?php echo $row["stu_id"] ?></td>
                                            <td><?php echo $row["enrollment"] ?></td>
                                            <td><?php echo $row["last_name"] . " " . $row["student_name"] . " " . $row["father_name"] ?></td>
                                            <td align="center"> <img src="<?php echo $row['student_image']; ?>" height="65px" width="60px"> </td>
                                            <td><?php echo $row["branch"] ?></td>
                                            <td><?php echo $row["phone_number"] ?></td>
                                            <td><?php echo date("d-M-y", strtotime($row["admission_date"])); ?></td>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                echo "<a class='btn btn-primary' href=student_profile.php?sid=" . $row['stu_id'] . ">Profile</a> "
                                                ?>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>

                                    <tr class="text-center" style="height: 55px;">
                                        <th> Sr No. </th>
                                        <th> Stduent Id </th>
                                        <th> Enrollment No. </th>
                                        <th> Name </th>
                                        <th> Profile </th>
                                        <th> Branch </th>
                                        <th> Phone No. </th>
                                        <th>Admission Date </th>
                                        <th> View </th>
                                    </tr>
                                <?php }
                                ?>

                            </table>
                        </form>
                    </center>
                </div>
            </div>

        </div>
    </div>

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