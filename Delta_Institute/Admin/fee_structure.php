<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<title> Fee Receipt </title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fee Receipt </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<style>
    .top {
        margin-top: 50px;
    }
</style>

<body onload="print()">

    <?php

    $sid = $_GET['sid'];
    $pay = $_GET['fee'];

    // $select = " SELECT i.enrollment, i.student_name, i.father_name, i.last_name, i.branch, f.totel_fee, f.stu_id, i.stu_id  FROM student_info i LEFT JOIN student_fee f on f.stu_id = i.stu_id WHERE  f.stu_id = '$sid' ";

    $select = " SELECT i.stu_id,i.enrollment,i.student_name,i.last_name,i.father_name,i.branch,f.*
    FROM student_info i LEFT JOIN student_fee f on f.stu_id = i.stu_id WHERE i.stu_id='$sid' ";

    $result = mysqli_query($conn, $select);
    if ($row = mysqli_fetch_array($result)) {


        $select = " SELECT i.stu_id,i.enrollment,i.student_name,i.last_name,i.father_name,i.branch,f.*
                            FROM student_info i LEFT JOIN student_fee f on f.stu_id = i.stu_id WHERE i.stu_id='$sid' ";


        $paid = $conn->query("SELECT SUM(amount) AS paid FROM student_fee WHERE stu_id = '$sid'");
        $paid = $paid->num_rows > 0 ? $paid->fetch_array()['paid'] : '';

        if ($row['branch'] == 'B.C.A') {
            $total = 30000;
        } elseif ($row['branch'] == 'B.B.A') {
            $total = 28000;
        } else {
            $total = 25000;
        }

        $pending = $total - $paid - $pay;

    ?>

        <div class="container w-70">
            <div class="row">
                <div class="col border border-dark p-3 m-4">
                    <table class="table table-hover ">
                        <tr style="height: 55px;">
                            <th> <img src="../Logo/logo3.png" style="width: 120px; margin-left: 50px; margin-top: 10px;"> </th>
                            <th>
                                <center>
                                    <h2 style="font-family: Times New Roman; margin-top: 10px; margin-left: -20px;"> Detla Institute </h2>
                                </center>
                            </th>
                        </tr>
                        <tr style="height: 30px;">
                            <td style="width: 280px;"> Receipt No. : &nbsp;<span> 124 </span></td>
                            <td align="right"> Date : &nbsp; <span>
                                    <?php echo $row["last_paid_fee_date"] ?>
                                </span> </td>
                        </tr>
                        <tr style="height: 20px;">
                            <td> Name : &nbsp; <span>
                                    <?php echo $row["last_name"] . " " . $row["student_name"] . " " . $row["father_name"] ?>
                                </span> </td>
                            <td> Enrollment No. : &nbsp; <span>
                                    <?php echo $row["enrollment"] ?>
                                </span> </td>
                        </tr>
                        <tr style="height: 20px;">
                            <td> Branch : &nbsp; <span>
                                    <?php echo $row["branch"] ?>
                                </span> </td>
                            <td> Semester : &nbsp; <span> 5 </span> </td>
                        </tr>
                        <tr>

                        </tr>

                        <tr class="top" style="height: 40px;">
                            <td> Fee :</td>
                            <td> Pay : &nbsp; <span>
                                    <?php echo $pay ?>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3" align="center" style="vertical-align: bottom; "><span> Signature :</span></td>
                            <td> Paid : &nbsp; <span>
                                    <?php echo $paid ?>
                            </td>
                        </tr>
                        <tr>
                            <td> pending : &nbsp; <span>
                                    <?php echo $pending ?>
                            </td>
                        </tr>
                        <tr>
                            <td> Total : &nbsp; <span>
                                    <?php echo $total ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    <?php
    }
    ?>


</body>

</html>