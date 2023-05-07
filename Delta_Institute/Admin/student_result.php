<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<?php

if (isset($_POST['save'])) {
    $enroll = $_POST['enroll'];

    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];

    $in1 = $_POST['in1'];
    $in2 = $_POST['in2'];
    $in3 = $_POST['in3'];
    $in4 = $_POST['in4'];

    $th1 = $_POST['th1'];
    $th2 = $_POST['th2'];
    $th3 = $_POST['th3'];
    $th4 = $_POST['th4'];

    $select = " SELECT * FROM student_result WHERE enrollment = '$enroll' ";

    $insert = " INSERT INTO student_result (enrollment, subject_1, in_1, th_1, subject_2, in_2, th_2, subject_3, in_3, th_3, subject_4, in_4, th_4) VALUES ('$enroll', '$sub1', '$in1', '$th1', '$sub2', '$in2', '$th2', '$sub3', '$in3', '$th3', '$sub4', '$in4', '$th4')";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'>alert(' result already...');  
                    </script>";
    } else {
        if (mysqli_query($conn, $insert)) {
            echo "<script type='text/javascript'>alert(' Add result successfully ...');
        </script>";
        } else {
            echo "<script type='text/javascript'>alert(' Not Add result ...');
        </script>";
        }
    }
}

?>


<title>Student Result</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
    table input {
        height: 30px;
        width: 170px;
    }

    .form-control-plaintext {
        height: 30px;

    }

    .input {
        height: 30px;
        width: 65px;
        border: none;
        background: none;
    }

    td {
        height: 40px;
    }
</style>

<?php include('admin_sidebar.php') ?>

<section class="home">
    <div class="text"> Student Result </div>

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-warning p-3">
                <form action="" method="post">
                    <div>
                        <h2><label style="font-size:20px; margin-bottom: 5px;"> Enter Enrollment :</label></h2>
                        <div>
                            <input style="height: 40px; width: 300px;" type="text" class="" name="enroll" placeholder="Student Enrollment No">
                            <input type="submit" name="serach" class="btn btn-dark" value="Search">
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
                            if (isset($_POST['serach'])) {
                                $no = $_POST['enroll'];

                                $select = " SELECT enrollment, student_name, last_name, father_name, branch
                            FROM student_info i  WHERE enrollment='$no' ";

                                $result = mysqli_query($conn, $select);

                                if ($row = mysqli_fetch_array($result)) {

                                    if ($row['branch'] == 'B.C.A') {
                                        $sub1 = "CS-25";
                                        $name1 = "Advance java Programming";
                                        $sub2 = "CS-26";
                                        $name2 = "Programming with ASP.NET";
                                        $sub3 = "CS-27";
                                        $name3 = "Web Searching Technology & ... ";
                                        $sub4 = "CS-28";
                                        $name4 = "Project Viva";
                                    } elseif ($row['branch'] == 'B.B.A') {
                                        $sub1 = "501";
                                        $name1 = "abc";
                                        $sub2 = "502";
                                        $name2 = "def";
                                        $sub3 = "503";
                                        $name3 = "ghi";
                                        $sub4 = "504";
                                        $name4 = "jkl";
                                    } else {
                                        $sub1 = "1";
                                        $name1 = "adc";
                                        $sub2 = "2";
                                        $name2 = "def";
                                        $sub3 = "3";
                                        $name3 = "ghi";
                                        $sub4 = "4";
                                        $name4 = "jkl";
                                    }

                            ?>

                                    <form action="" method="post">
                                        <input type="hidden" name="enroll" value=<?php echo $row['enrollment'] ?>>

                                        <tr>
                                            <td><b> Enrollment :</b>
                                                <span> <?php echo $row['enrollment'] ?></span>
                                            </td>

                                            <td colspan="2"><b> Branch : </b>
                                                <span> <?php echo $row['branch'] ?></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="3"><b>Student Name : </b>
                                                <span> <?php echo $row['last_name'] . " " . $row['student_name'] . " " . $row['father_name'] ?></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="3">

                                            </td>
                                        </tr>

                                        <tr align="center">
                                            <td style="width: 350px;">
                                                <lable> <b> Subject Name </b> </lable>
                                            </td>
                                            <td>
                                                <lable> <b> Internal Marks </b> </lable>
                                            </td>
                                            <td>
                                                <lable> <b> Theory Marks </b> </lable>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="input" name="sub1" value="<?php echo $sub1 ?>" readonly>
                                                <span> <?php echo $name1 ?></span>

                                                <!-- <select name="sub1">
                                                    <option value="ASP.NET" selected>ASP.NET</option>
                                                    <option value="J2EE">J2EE</option>
                                                    <option value="SEO">SEO</option>
                                                    <option value="PROJECT">PROJECT</option>
                                                </select> -->

                                            </td>
                                            <td align="center">
                                                <input type="text" pattern="[0-9]{2}" name="in1" required>
                                            </td>
                                            <td align="center">
                                                <input type="text" pattern="[0-9]{2}" name="th1" required>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="input" name="sub2" value="<?php echo $sub2 ?>" readonly>
                                                <span> <?php echo $name2 ?></span>

                                                <!-- <select name="sub2">
                                                    <option value="ASP.NET">ASP.NET</option>
                                                    <option value="J2EE" selected>J2EE</option>
                                                    <option value="SEO">SEO</option>
                                                    <option value="PROJECT">PROJECT</option>
                                                </select> -->

                                            </td>
                                            <td align="center">
                                                <input type="text" pattern="[0-9]{2}" name="in2" required>
                                            </td>
                                            <td align="center">
                                                <input type="text" pattern="[0-9]{2}" name="th2" required>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="input" name="sub3" value="<?php echo $sub3 ?>" readonly>
                                                <span> <?php echo $name3 ?></span>

                                                <!-- <select name="sub3">
                                                    <option value="ASP.NET">ASP.NET</option>
                                                    <option value="J2EE">J2EE</option>
                                                    <option value="SEO" selected>SEO</option>
                                                    <option value="PROJECT">PROJECT</option>
                                                </select> -->

                                            </td>
                                            <td align="center">
                                                <input type="text" pattern="[0-9]{2}" name="in3" required>
                                            </td>
                                            <td align="center">
                                                <input type="text" pattern="[0-9]{2}" name="th3" required>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="input" name="sub4" value="<?php echo $sub4 ?>" readonly>
                                                <span> <?php echo $name4 ?></span>

                                                <!-- <select name="sub4">
                                                    <option value="ASP.NET">ASP.NET</option>
                                                    <option value="J2EE">J2EE</option>
                                                    <option value="SEO">SEO</option>
                                                    <option value="PROJECT" selected> PROJECT</option>
                                                </select> -->

                                            </td>
                                            <td align="center">
                                                <input type="text" pattern="[0-9]{2}" name="in4" required>
                                            </td>
                                            <td align="center">
                                                <input type="text" pattern="[0-9]{2}" name="th4" required>
                                            </td>

                                        </tr>
                                        <tr>
                                            <right>
                                                <td colspan="3" align="right">
                                                    <button class='btn btn-success' onclick="result()" style="margin-right: 55px ;" name='save'>Save
                                                    </button>
                                                </td>
                                            </right>

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
    function result() {
        var result = confirm(' Are you confirm this result ? ');
        if (result == false) {
            event.preventDefault();
        }
    }
</script>

<body>

</body>

</html>