<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<title> Student Profile</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<style>
    tr td {
        border: none;
    }

    .width {
        width: 850px;
    }
</style>

</head>

<body>

    <?php

    $stu_id = $_GET['sid'];

    $select = " SELECT * FROM student_info WHERE stu_id = '$stu_id' ";

    $result = mysqli_query($conn, $select);
    while ($row = mysqli_fetch_array($result)) {
    ?>

        <div class="container-md mt-5 width">
            <div class="row">
                <div class="col border border-dark bg-info ">
                    <table class="table mt-5 mb-5">
                        <tr>
                            <td rowspan="3">
                                <center> <img class="img-fluid border border-dark" src="<?php echo $row['student_image']; ?>" height="200px" width="200px"> </center>
                            </td>
                            <td class="py-2">
                                <b> Full Name : </b><br> &nbsp;&nbsp;
                                <?php echo $row["last_name"] . " " . $row["student_name"] . " " . $row["father_name"] ?>
                            </td>
                            <td>
                                <b> Branch : </b><br>&nbsp;&nbsp;
                                <?php echo $row["branch"] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b> Enrollment No :</b><br>&nbsp;&nbsp;
                                <?php echo $row["enrollment"] ?>
                            </td>
                            <td>
                                <b> Student id : </b><br>&nbsp;&nbsp;
                                <?php echo $row["stu_id"] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>Email Id : </b> <br>&nbsp;&nbsp;
                                <?php echo $row["email"] ?>
                            </td>
                            </td>
                            <td>
                                <b> Phone No : </b> <br>&nbsp;&nbsp;
                                <?php echo $row["phone_number"] ?>
                            </td>
                            </td>
                        </tr>

                        <tr>
                            <td class="padd px-5 py-2">
                                <b> D.O.B : </b><br>&nbsp;&nbsp;
                                <?php echo $row["birth_date"] ?>
                            </td>
                            <td class="py-2">
                                <b> Gender : </b><br>&nbsp;&nbsp;
                                <?php echo $row["gender"] ?>
                            </td>
                            <td class="py-2">
                                <b> Status : </b><br>&nbsp;&nbsp;
                                <?php echo $row["status"] ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="padd px-5 py-2">
                                <b> Father No : </b><br>&nbsp;&nbsp;
                                <?php echo $row["father_phone_no"] ?>
                            </td>
                            <td>
                                <b> Father Occupation : </b><br>&nbsp;&nbsp;
                                <?php echo $row["father_occupation"] ?>
                            </td>
                            <td>
                                <b> Admission Date : </b><br>&nbsp;&nbsp;
                                <?php echo date("d-M-y", strtotime($row["admission_date"])); ?>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="padd px-5 py-2">
                                <b> Address : </b><br>&nbsp;&nbsp;
                                <?php echo $row["address"] . ",<br> &nbsp;&nbsp;   " . $row["city"] . ", <br> &nbsp;&nbsp;  " . $row["pincode"] . "." ?>
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