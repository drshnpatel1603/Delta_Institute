<?php

session_start();
if (!$_SESSION["name"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>
<title>Student Result</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php include('student_sidebar.php') ?>

<style>
    body.dark {
        --body-color: #18191a;
        --sidebar-color: #242526;
        --primary-color: #3a3b3c;
        --primary-color-light: #3a3b3c;
        --toggle-color: #fff;
        --text-color: #ccc;
    }
</style>
</head>

<body>
    <section class="home">
        <div class="container-fluid">
            <div class="text"> Result </div>
        </div>


        <div class="container mt-4 colo">
            <div class="row">
                <center>
                    <div class="col-11" style="border: 1px solid black; padding: 10px 10px;">
                        <?php
                        $info = $_SESSION['result'];
                        $select = " SELECT i.last_name, i.student_name, i.father_name, i.branch, r.* FROM student_info i LEFT JOIN student_result r ON i.enrollment = r.enrollment WHERE i.enrollment ='$info' ";

                        $result = mysqli_query($conn, $select);
                        if ($row = mysqli_fetch_array($result)); {


                            $total_1 = $conn->query("SELECT SUM(in_1 + th_1) as sub_1  FROM student_result WHERE enrollment ='$info'");
                            $total_1 = $total_1->num_rows > 0 ? $total_1->fetch_array()['sub_1'] : '';

                            $total_2 = $conn->query("SELECT SUM(in_2 + th_2) as sub_2  FROM student_result WHERE enrollment ='$info'");
                            $total_2 = $total_2->num_rows > 0 ? $total_2->fetch_array()['sub_2'] : '';

                            $total_3 = $conn->query("SELECT SUM(in_3 + th_3) as sub_3  FROM student_result WHERE enrollment ='$info'");
                            $total_3 = $total_3->num_rows > 0 ? $total_3->fetch_array()['sub_3'] : '';

                            $total_4 = $conn->query("SELECT SUM(in_4 + th_4) as sub_4  FROM student_result WHERE enrollment ='$info'");
                            $total_4 = $total_4->num_rows > 0 ? $total_4->fetch_array()['sub_4'] : '';

                            $total = $total_1 + $total_2 + $total_3 + $total_4;

                            $grade_1 = $total_1;
                            $grade_2 = $total_2;
                            $grade_3 = $total_3;
                            $grade_4 = $total_4;

                            if ($row['branch'] == 'B.C.A') {
                                $name1 = "Advance java Programming";
                                $name2 = "Programming with ASP.NET";
                                $name3 = "Web Searching Technology & ... ";
                                $name4 = "Project Viva";
                            } elseif ($row['branch'] == 'B.B.A') {
                                $name1 = "abc";
                                $name2 = "def";
                                $name3 = "ghi";
                                $name4 = "jkl";
                            } else {
                                $name1 = "adc";
                                $name2 = "def";
                                $name3 = "ghi";
                                $name4 = "jkl";
                            };

                            if ($row['in_1'] <= 12 || $row['in_2'] <= 12 || $row['in_3'] <= 12 || $row['in_4'] <= 12) {
                                $result = "FAILL";
                            } elseif ($row['th_1'] <= 27 || $row['th_2'] <= 27 || $row['th_3'] <= 27 || $row['th_4'] <= 27) {
                                $result = "FAILL";
                            } else {
                                $result = "PASS";
                            };
                        ?>

                            <table class="table table-hover table-bordered color">
                                <tr>
                                    <td> <img src="../Logo/logo3.png" style="width: 175px; height: 57px;" alt=""> </td>
                                    <td colspan="9" align="center">
                                        <h2 style="margin-left: -300px;"> Delta University </h2>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="10"><b> Enrollment No : </b> <?php echo $row['enrollment'] ?> </td>
                                </tr>

                                <tr>
                                    <td colspan="10"><b> Student Name : </b> <?php echo $row['last_name'] . " " . $row['student_name'] . " " . $row['father_name'] ?> </td>
                                </tr>

                                <tr>
                                    <td colspan="10"><b> Exam Name : </b></td>
                                </tr>

                                <tr>
                                    <td colspan="10"><b> Acadamy Year : </b></td>
                                </tr>

                                <tr>
                                    <td colspan="10"><b> Examination Center : </b> </td>
                                </tr>

                                <tr>
                                    <td rowspan="2" align="center"><b> SUBJECT NAME </b> </td>
                                    <td colspan="4" align="center"><b> MIN / MAX MARKS </b></td>
                                    <td colspan="4" align="center"> <b> OBTAINED MARKS </b></td>
                                    <td rowspan="2" align="center"><b> GRADE </b> </td>
                                </tr>

                                <tr>
                                    <td align="center"><b> INT </b></td>
                                    <td align="center"><b> PR </b></td>
                                    <td align="center"><b> TH </b></td>
                                    <td align="center"><b> TOTAL </b></td>
                                    <td align="center"><b> INT </b></td>
                                    <td align="center"><b> PR </b></td>
                                    <td align="center"><b> TH </b></td>
                                    <td align="center"><b> TOTAL </b></td>
                                </tr>

                                <tr>
                                    <td><b> <?php echo $row['subject_1'] . " &nbsp " . $name1 ?> </b></td>
                                    <td align="center"> 6/30 </td>
                                    <td align="center"> - </td>
                                    <td align="center"> 28/70 </td>
                                    <td align="center"> 40/100 </td>
                                    <td align="center"> <?php echo $row['in_1'] ?> </td>
                                    <td align="center"> - </td>
                                    <td align="center"> <?php echo $row['th_1'] ?> </td>
                                    <td align="center"> <?php echo $total_1 ?></td>
                                    <td align="center"> <?php if ($grade_1 < 35) {
                                                            echo "F";
                                                        } elseif ($grade_1 >= 36 && $grade_1 < 50) {
                                                            echo "E";
                                                        } elseif ($grade_1 >= 51  && $grade_1 < 60) {
                                                            echo "D";
                                                        } elseif ($grade_1 >= 61 && $grade_1 < 70) {
                                                            echo "C";
                                                        } elseif ($grade_1 >= 71 && $grade_1 < 80) {
                                                            echo "B";
                                                        } else {
                                                            echo "A";
                                                        }
                                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td><b> <?php echo $row['subject_2'] . " &nbsp " . $name2 ?> </b></td>
                                    <td align="center"> 6/30 </td>
                                    <td align="center"> - </td>
                                    <td align="center"> 28/70 </td>
                                    <td align="center"> 40/100 </td>
                                    <td align="center"> <?php echo $row['in_2'] ?> </td>
                                    <td align="center"> - </td>
                                    <td align="center"> <?php echo $row['th_2'] ?> </td>
                                    <td align="center"> <?php echo $total_2 ?> </td>
                                    <td align="center"> <?php if ($grade_2 < 35) {
                                                            echo "F";
                                                        } elseif ($grade_2 >= 36 && $grade_2 < 50) {
                                                            echo "E";
                                                        } elseif ($grade_2 >= 51  && $grade_2 < 60) {
                                                            echo "D";
                                                        } elseif ($grade_2 >= 61 && $grade_2 < 70) {
                                                            echo "C";
                                                        } elseif ($grade_2 >= 71 && $grade_2 < 80) {
                                                            echo "B";
                                                        } else {
                                                            echo "A";
                                                        }
                                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td><b> <?php echo $row['subject_3'] . " &nbsp " . $name3 ?> </b></td>
                                    <td align="center"> 6/30 </td>
                                    <td align="center"> - </td>
                                    <td align="center"> 28/70 </td>
                                    <td align="center"> 40/100 </td>
                                    <td align="center"> <?php echo $row['in_3'] ?> </td>
                                    <td align="center"> - </td>
                                    <td align="center"> <?php echo $row['th_3'] ?> </td>
                                    <td align="center"> <?php echo $total_3 ?> </td>
                                    <td align="center"> <?php if ($grade_3 < 35) {
                                                            echo "F";
                                                        } elseif ($grade_3 >= 36 && $grade_3 < 50) {
                                                            echo "E";
                                                        } elseif ($grade_3 >= 51  && $grade_3 < 60) {
                                                            echo "D";
                                                        } elseif ($grade_3 >= 61 && $grade_3 < 70) {
                                                            echo "C";
                                                        } elseif ($grade_3 >= 71 && $grade_3 < 80) {
                                                            echo "B";
                                                        } else {
                                                            echo "A";
                                                        }
                                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td><b> <?php echo $row['subject_4'] . " &nbsp " . $name4 ?> </b></td>
                                    <td align="center"> 6/30 </td>
                                    <td align="center"> - </td>
                                    <td align="center"> 28/70 </td>
                                    <td align="center"> 40/100 </td>
                                    <td align="center"> <?php echo $row['in_4'] ?> </td>
                                    <td align="center"> - </td>
                                    <td align="center"> <?php echo $row['th_4'] ?> </td>
                                    <td align="center"> <?php echo $total_4 ?> </td>
                                    <td align="center"> <?php if ($grade_4 < 35) {
                                                            echo "F";
                                                        } elseif ($grade_4 >= 36 && $grade_4 < 50) {
                                                            echo "E";
                                                        } elseif ($grade_4 >= 51  && $grade_4 < 60) {
                                                            echo "D";
                                                        } elseif ($grade_4 >= 61 && $grade_4 < 70) {
                                                            echo "C";
                                                        } elseif ($grade_4 >= 71 && $grade_4 < 80) {
                                                            echo "B";
                                                        } else {
                                                            echo "A";
                                                        }
                                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="8" align="right"><b> Obtained Marks : </b></td>
                                    <td colspan="2" align="center"><b> <?php echo $total ?>/600 </b></td>
                                </tr>

                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="2" align="center"><b> Result : <?php echo $result ?> </b></td>
                                </tr>
                            </table>
                    </div>

                </center>
            </div>
        </div>
        <br>
        <br>

    <?php
                        } ?>



    </section>
</body>

</html>