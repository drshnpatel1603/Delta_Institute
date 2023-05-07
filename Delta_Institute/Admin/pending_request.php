<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<?php

$id = $_GET['id'];

if (isset($_POST['approve'])) {

    $id = $_POST['id'];
    $sid = $_POST['sid'];
    $enroll = $_POST['enrollment'];
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['conpass']);

    $select = " SELECT * FROM student_info WHERE stu_id = '$sid' or enrollment = '$enroll' ";
    $update = " UPDATE student_info SET stu_id = '$sid', enrollment = '$enroll', password = '$pass', action = 'Activate' WHERE id = '$id' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'>alert('Allready Register This ID'); window.location.href='';
            </script>";
    }
    if ($pass != $cpass) {
        echo "<script type='text/javascript'>alert('Password not match...'); window.location.href='';
            </script>";
    } else {
        mysqli_query($conn, $update);
        echo "<script type='text/javascript'>alert(' Student Request Approve Successfully...'); window.location.href='admin_index.php';  
                    </script>";
    }
}



?>

<title> Approve Request </title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<style>
    body {
        background-color: #E4E9F7;
    }

    input.form-control {
        height: 45px;

    }

    textarea.form-control {
        height: 200px;
    }
</style>
</head>

<body>
    <?php

    $select = " SELECT * FROM student_info WHERE id = '$id'";
    $result = mysqli_query($conn, $select);

    while ($row = mysqli_fetch_array($result)) { ?>

        <div class="modal-dialog modal-md ">
            <div class="modal-content" style="width: 600px;">
                <div class="modal-header bg-info text-white">
                    <h4 class="modal-title text-center"> Give Student Id </h4>
                </div>
                <div class="modal-body">

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mt-3">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Name :</label>
                                    <input class="form-control" placeholder="<?php echo $row["last_name"] . " " . $row["student_name"] . " " . $row["father_name"]  ?>" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Email :</label>
                                    <input class="form-control" placeholder="<?php echo $row["email"] ?>" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Branch :</label>
                                    <input class="form-control" placeholder="<?php echo $row["branch"] ?>" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Request Date :</label>
                                    <input class="form-control" placeholder="<?php echo date("d-M-y", strtotime($row["admission_date"])); ?>" readonly>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                    <label> Student id :</label>
                                    <input type="text" name="sid" class="form-control" placeholder="Student I'd" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Enrollment No. :</label>
                                    <input type="text" name="enrollment" pattern="[0-9]{12}" class="form-control" placeholder="Give Enter Enrollment" required>
                                </div>
                            </div>

                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label> Password :</label>
                                    <input type="text" name="password" placeholder="Give Password" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label> Confirm Password :</label>
                                    <input type="password" name="conpass" class="form-control" placeholder="Re-Enter Password" required>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input class="btn btn-success" type="submit" onclick="done()" name="approve" value="Done" />
                            <?php echo "<a class='btn btn-secondary' type='submit' name='save' href=admin_index.php>Close</a> "
                            ?>
                        </div>
                    </form>

                <?php }

                ?>
                </div>
            </div>
        </div>

        <script>
            function done() {
                var result = confirm(' You confirm to add student ? ');
                if (result == false) {
                    event.preventDefault();
                }
            }
        </script>


</body>