<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";
?>

<?php


if (isset($_POST['save'])) {
    $sid = $_POST['sid'];
    $fee = $_POST['fee'];
    $date = $_POST['date'];

    // $total = $_POST['total'];
    // $paid = $_POST['paid'];
    // $pending = $_POST['pending'];

    $select = " SELECT * FROM student_fee WHERE stu_id = '$sid' ";

    // $update = " UPDATE student_fee SET pay_fee = '$pay', paid_fee ='$paid', pending_fee='$pending', last_paid_fee_date='$date' WHERE stu_id= '$sid' ";
    // $insert = " INSERT INTO student_fee (stu_id, total_fee, paid_fee, pending_fee, amount, last_paid_fee_date) VALUES ('$sid', '$total', '$paid', '$pending' ,'$fee','$date')";
    // $result = mysqli_query($conn, $select);

    $insert = " INSERT INTO student_fee (stu_id, amount, last_paid_fee_date) VALUES ('$sid','$fee','$date')";

    if (mysqli_query($conn, $insert)) {
        echo "<script type='text/javascript'>alert(' payment Fee successfully...');window.location.href='fee_structure.php?sid=$sid&fee=$fee';
                </script>";
    } else {
        echo "<script type='text/javascript'>alert(' Opps not payment fee ...');  
        </script>";
    }
};
// mysqli_close($conn);

?>

<title> Student Fee </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
    .input {
        height: 34px;
        width: 200px;
        padding: 6px;
    }
</style>

<?php

include('admin_sidebar.php');

?>

</head>

<body>
    <section class="home">
        <div class="text"> Student Fee Payment </div>

        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 bg-warning p-3">
                    <form action="" method="post">
                        <div>
                            <label style="font-size:20px; margin-bottom: 5px;"> Enter Student Id :</label>
                            <div class="">
                                <input style="height: 40px; width: 300px;" type="text" class="" name="sid" placeholder="Enter Student Id">
                                <input type="submit" name="submit" class="btn btn-dark" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <center>
                        <table class="table table-hover table-bordered  table-striped w-75 color">
                            <tbody>
                                <?php
                                if (isset($_POST['submit'])) {
                                    $sid = $_POST['sid'];

                                    $select = " SELECT i.stu_id,i.enrollment,i.student_name,i.last_name,i.father_name,i.branch,f.*
                            FROM student_info i LEFT JOIN student_fee f on f.stu_id = i.stu_id WHERE i.stu_id='$sid' ";

                                    $result = mysqli_query($conn, $select);

                                    if ($row = mysqli_fetch_array($result)) {

                                        $paid = $conn->query("SELECT SUM(amount) AS paid FROM student_fee WHERE stu_id = '$sid'");
                                        $paid = $paid->num_rows > 0 ? $paid->fetch_array()['paid'] : '';

                                        if ($row['branch'] == 'B.C.A') {
                                            $total = 30000;
                                        } elseif ($row['branch'] == 'B.B.A') {
                                            $total = 28000;
                                        } else {
                                            $total = 25000;
                                        }

                                        $pending = $total - $paid;

                                ?>

                                        <form action="" method="post">

                                            <tr>
                                                <td><b>Student Name</b></td>
                                                <td><?php echo $row['last_name'] . " " . $row['student_name'] . " " . $row['father_name'] ?></td>
                                            </tr>

                                            <tr>
                                                <td class="w-25"><b>Student Id.</b></td>
                                                <td class="w-75"> <?php echo $sid ?></td>
                                                <input type="hidden" name="sid" value=<?php echo $sid ?>>
                                            </tr>

                                            <tr>
                                                <td><b>Enrollment No.</b></td>
                                                <td><?php echo $row['enrollment'] ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Branch</b></td>
                                                <td><?php echo $row['branch'] ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Pay Amount ₹</b></td>
                                                <td>
                                                    <input style="height: 35px ;" type="text" name="fee" placeholder="Enter Amount for fee" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>Paid Fee</b></td>
                                                <td>
                                                    <span> <?php echo number_format($paid, 2) ?></span>
                                                    <!-- <input type="hidden" name="paid" value=""> -->
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>Pending Fee</b></td>
                                                <td>
                                                    <span> <?php echo number_format($pending, 2) ?></span>
                                                    <!-- <input type="hidden" name="pending" value=""> -->
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>Total Fee</b></td>
                                                <td>
                                                    <span> <?php echo number_format($total, 2) ?></span>
                                                    <!-- <input style="border: none;" type="text" name="total" placeholder="Total fee" value=""> -->
                                                </td>
                                            <tr>
                                                <td><b>Today Date</b></td>
                                                <td>
                                                    <input class="input" style="border: none;" type="date" name="date" placeholder="Today date" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="">
                                                        <center>
                                                            <!-- <a class='btn btn-success' onclick="fee()" name='save'>Submit</a> -->
                                                            <input class="btn btn-success" onclick="payment()" type="submit" name="save" value="Submit" />
                                                        </center>
                                                    </div>

                                                </td>
                                            </tr>

                            </tbody>
                    <?php
                                    }
                                }
                    ?>


                        </table>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <script>
        function payment() {
            var result = confirm(' Are you confirm this payment ? ');
            if (result == false) {
                event.preventDefault();
            }
        }
    </script>

</body>



</html>