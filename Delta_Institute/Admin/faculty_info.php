<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<title>Faculty Information</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<?php include('admin_sidebar.php') ?>

<style>
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
    <section class="abc">
        <div class="text"> Faculty Information </div>

        <div class="container">
            <div class="row">
                <!-- <center> -->
                <div class="col-1"></div>
                <div class="col-8 bg-warning p-3">
                    <div class="">
                        <form action="" method="post">
                            <label style="font-size:20px; margin-bottom: 5px;"> Enter Faculty Id :</label>
                            <div class="">
                                <input style="height: 40px; width: 300px;" type="text" class="" name="name" placeholder="Serach here...">
                                <input type="submit" name="serach" class="btn btn-dark" value="Serach">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-2 bg-warning p-3">
                    <div class="mt-2">
                        <a class="btn btn-dark" href="faculty_registration.php" role="button"> Add <br> Faculty </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- </center> -->
        </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <center>
                    <div class="col-11">
                        <form action="" method="post">
                            <table class="table table-hover table-bordered color table-striped ">
                                <tr class="text-center" style="height: 60px;">
                                    <th> Sr No. </th>
                                    <th> Faculty Id </th>
                                    <th> Name </th>
                                    <th> Profile </th>
                                    <th> Branch </th>
                                    <th> Phone No. </th>
                                    <th> Joining Date </th>
                                    <th> Degree </th>
                                </tr>
                                <?php

                                if (isset($_POST['serach'])) {
                                    $fid = $_POST['name'];

                                    $select = " SELECT * FROM faculty_info WHERE CONCAT(faculty_name, faculty_id, phone_no, email, branch, degree) LIKE '%$fid%' ORDER BY faculty_name ASC";
                                    $result = mysqli_query($conn, $select);

                                    $id = 1;

                                    if (mysqli_num_rows($result) == 0) {
                                        echo "<h3> Sorry! not found faculty... </h3>";
                                    } else {
                                        while ($row = mysqli_fetch_array($result)) { ?>
                                            <tr style="height: 40px;">
                                                <th class="text-center"> <?php echo $id++ ?> </th>
                                                <td><?php echo $row["faculty_id"] ?></td>
                                                <td><?php echo $row["faculty_name"] ?></td>
                                                <td align="center"> <img src="<?php echo $row['image']; ?>" height="65px" width="60px"> </td>
                                                <td><?php echo $row["branch"] ?></td>
                                                <td><?php echo $row["phone_no"] ?></td>
                                                <td><?php echo date("d-M-y", strtotime($row["joining_date"])); ?></td>
                                                <td><?php echo $row["degree"] ?></td>
                                            </tr>
                                        <?php }
                                        ?>

                                    <?php }
                                    ?>

                                    <?php
                                } else {

                                    $select = " SELECT * FROM faculty_info ORDER BY faculty_name ASC";
                                    $result = mysqli_query($conn, $select);
                                    $id = 1;

                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <tr style="height: 40px;">
                                            <th class="text-center"> <?php echo $id++ ?> </th>
                                            <td><?php echo $row["faculty_id"] ?></td>
                                            <td><?php echo $row["faculty_name"] ?></td>
                                            <td align="center"> <img src="<?php echo $row['image']; ?>" height="65px" width="60px"> </td>
                                            <td><?php echo $row["branch"] ?></td>
                                            <td><?php echo $row["phone_no"] ?></td>
                                            <td><?php echo date("d-M-y", strtotime($row["joining_date"])); ?></td>
                                            <td><?php echo $row["degree"] ?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                    <tr class="text-center" style="height: 60px;">
                                        <th> Sr No. </th>
                                        <th> Faculty Id </th>
                                        <th> Name </th>
                                        <th> Profile </th>
                                        <th> Branch </th>
                                        <th> Phone No. </th>
                                        <th> Joining Date </th>
                                        <th> Degree </th>
                                    </tr>
                                <?php }
                                ?>

                            </table>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </section>

</body>

</html>