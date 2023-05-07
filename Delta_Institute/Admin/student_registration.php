<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<?php

if (isset($_POST['submit'])) {

    $sname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $sphone = $_POST['s_phone'];
    $gender = $_POST['gender'];
    $branch = $_POST['branch'];
    $date = $_POST['admission_date'];
    $add = $_POST['address'];
    $cat = $_POST['cat'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $fname = $_POST['f_name'];
    $fphone = $_POST['f_phone'];
    $focc = $_POST['f_occupation'];
    $status = $_POST['status'];
    $sid = $_POST['sid'];
    $enroll = $_POST['enroll_no'];
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['con_password']);


    // ***************************************** Student images upload code and save image/Student folder  ********************************************************** //

    $file = $_FILES['stu_image'];

    $filename = $file['name'];
    $fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    // $exte = explode('.', $filename);
    // $filecheck = strtolower(end($exte));

    // $stored = array('png', 'jpg', 'jpeg');
    // if (in_array($filecheck, $stored)) {

    $image = '../Admin/image/Student/' . $filename;
    move_uploaded_file($filetmp, $image);

    // }

    // ***************************************** Student images upload code and save image/Student folder  ********************************************************** //


    $select = " SELECT * FROM student_info WHERE stu_id = '$sid' or enrollment = '$enroll' ";

    $insert = "INSERT INTO student_info (stu_id, enrollment, password, student_name, last_name, student_image, birth_date, email, phone_number, gender, status, branch, admission_date, category ,father_name, father_phone_no, father_occupation, address, pincode, city, action) 
        VALUES('$sid','$enroll','$pass','$sname','$lname','$image','$dob','$email','$sphone','$gender','$status','$branch','$date','$cat','$fname','$fphone','$focc','$add','$pincode','$city', 'Activate')";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'>alert('Allready Register This ID');
            </script>";
    }
    if ($pass != $cpass) {
        echo "<script type='text/javascript'>alert('Password not match...');
                </script>";
    } else {
        mysqli_query($conn, $insert);
        echo "<script type='text/javascript'>alert('New Student Registration successfully...');
                </script>";
        header("");
    }
}

mysqli_close($conn);
?>



<title>Student Registration from</title>


<?php include('../Admin/admin_sidebar.php') ?>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .container {
        position: relative;
        max-width: 900px;
        border-radius: 15px;
        padding: 30px;
        height: 480px;
        margin-top: 2%;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .home1 {
        left: -2%;
    }

    .container header {
        position: relative;
        font-size: 20px;
        font-weight: 600;
        color: #333;
    }

    .container header::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -2px;
        height: 3px;
        width: 27px;
        border-radius: 8px;
        background-color: #4070f4;
    }

    .container form {
        position: relative;
        height: 440px;
        background-color: #fff;
        overflow: hidden;
    }

    .container form .form {
        position: absolute;
        background-color: #fff;
        transition: 0.3s ease;
    }

    .container form .form.third {
        opacity: 0;
        pointer-events: none;
        transform: translateX(100%);
    }

    form.thiActive .form.third {
        opacity: 1;
        pointer-events: auto;
        transform: translateX(0);
    }

    form.thiActive .form.second {
        opacity: 0;
        pointer-events: none;
        transform: translateX(-100%);
    }

    .container form .form.second {
        opacity: 0;
        pointer-events: none;
        transform: translateX(100%);
    }

    form.secActive .form.second {
        opacity: 1;
        pointer-events: auto;
        transform: translateX(0);
    }

    form.secActive .form.first {
        opacity: 0;
        pointer-events: none;
        transform: translateX(-100%);
    }

    .container form .title {
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
        font-weight: 500;
        margin: 6px 0;
        color: #333;
    }

    .container form .fields {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    form .fields .input-field {
        display: flex;
        /* width: calc(100% / 3 - 15px); */
        flex-direction: column;
        margin: 4px 0;
    }

    .input-field label {
        font-size: 12px;
        font-weight: 500;
        color: #2e2e2e;
    }

    .img label {
        font-size: 12px;
        font-weight: 500;
        color: #2e2e2e;
    }

    .input-field input,
    select {
        outline: none;
        font-size: 14px;
        font-weight: 400;
        color: #333;
        border-radius: 5px;
        border: 1px solid #aaa;
        padding: 0 15px;
        height: 42px;
        margin: 8px 0;
        width: 260px;
    }

    .input-field input :focus,
    .input-field select:focus {
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
    }

    .input-field select,
    .input-field input[type="date"] {
        color: #707070;
    }

    .input-field input[type="date"]:valid {
        color: #333;
    }

    .container form button,
    .backBtn {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 45px;
        max-width: 200px;
        width: 100%;
        border: none;
        outline: none;
        color: #fff;
        border-radius: 5px;
        margin: 25px 0;
        background-color: #4070f4;
        transition: all 0.3s linear;
        cursor: pointer;
    }

    .container form .btnText {
        font-size: 14px;
        font-weight: 400;
    }

    form button:hover {
        background-color: #265df2;
    }

    form button i,
    form .backBtn i {
        margin: 0 6px;
    }

    form .backBtn i {
        transform: rotate(180deg);
    }

    form .buttons {
        display: flex;
        align-items: center;
    }

    form .buttons button,
    .backBtn {
        margin-right: 14px;
    }
</style>
</head>

<body>
    <section class="home">
        <div class="text"> Student Registration </div>
        <div class="container ">
            <form action="" method="post" enctype="multipart/form-data">
                <header>Student Registration From</header>

                <div class="form first">
                    <div class="Student information">
                        <span class="title">Student Information</span>

                        <div class="fields">
                            <div class="input-field">
                                <label> Student Name</label>
                                <input type="text" name="first_name" placeholder="Student Name" required>
                            </div>

                            <div class="input-field">
                                <label>Last Name</label>
                                <input type="text" name="last_name" placeholder="Last Name" required>
                            </div>

                            <div class="input-field">
                                <label> Father Name </label>
                                <input type="text" name="f_name" placeholder="Student Father name" required>
                            </div>

                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" name="dob" placeholder="Birth date" required>
                            </div>

                            <div class="input-field">
                                <label>Upload Student Profile</label>
                                <!-- <input class="box"> -->
                                <input type="file" name="stu_image" value="there is no image" required>
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="input-field">
                                <label>Phone Number</label>
                                <input type="phone" name="s_phone" pattern="[0-9]{10}" placeholder="Mobile number" required>
                            </div>

                            <div class="input-field">
                                <label>Gender</label>
                                <select name="gender" required>
                                    <option disabled selected>Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Others</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label> Branch </label>
                                <select name="branch" required>
                                    <option disabled selected>Select branch</option>
                                    <option value="B.B.A">B.B.A</option>
                                    <option value="B.Com">B.Com</option>
                                    <option value="B.C.A">B.C.A</option>
                                </select>
                            </div>


                            <button class="nextBtn1">
                                <span class="btnText">Next</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form second">
                    <div class="other information">
                        <span class="title"> Other Information </span>

                        <div class="fields">

                            <div class="input-field">
                                <label> Admission Date </label>
                                <input type="date" name="admission_date" required>
                            </div>

                            <div class="input-field">
                                <label> Father Phone number</label>
                                <input type="phone" name="f_phone" pattern="[0-9]{10}" placeholder="Father phone number" required>
                            </div>

                            <div class="input-field">
                                <label> Father Occupation </label>
                                <input type="text" name="f_occupation" placeholder="Occupation" required>
                            </div>

                            <div class="input-field">
                                <label> Address </label>
                                <input type="text" name="address" placeholder="Address" required>
                            </div>

                            <div class="input-field">
                                <label> City </label>
                                <input type="text" name="city" placeholder="City Name" required>
                            </div>

                            <div class="input-field">
                                <label> Pincode </label>
                                <input type="text" name="pincode" placeholder="Pincode" required>
                            </div>

                            <div class="input-field">
                                <label> Married Status </label>
                                <select name="status" required>
                                    <option disabled selected> Married Status </option>
                                    <option value="single">Single</option>
                                    <option value="married"> Married</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label> Category </label>
                                <input type="text" name="cat" placeholder="Category" required>
                            </div>

                            <div class="buttons">
                                <button class="backBtn1">
                                    <span class="btnText">Back</span>
                                    <i class="uil uil-navigator"></i>
                                </button>

                                <button class="nextBtn2">
                                    <span class="btnText">Next</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form third">
                    <div class="Set id password">
                        <span class="title"> Set Id Password </span>

                        <div class="fields">
                            <div class="input-field">
                                <label> College ID </label>
                                <input type="text" name="sid" placeholder="Give Student id" required>
                            </div>

                            <div class="input-field">
                                <label> Enrollment Number </label>
                                <input type="text" name="enroll_no" pattern="[0-9]{12}" placeholder="Give Student enrollment" required>
                            </div>

                            <div class="input-field">
                                <label> Give Password </label>
                                <input type="text" name="password" placeholder="Enter Password" required>
                            </div>

                            <div class="input-field">
                                <label> Confirm Password </label>
                                <input type="password" name="con_password" placeholder="Re-enter Password" required>
                            </div>

                        </div>

                        <div class="buttons">
                            <button class="backBtn2">
                                <span class="btnText">Back</span>
                                <i class="uil uil-navigator"></i>
                            </button>

                            <button class="btn" type="submit" name="submit">
                                <span class="btnText">Submit</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="../assets/js/registration_form.js"></script>
    <script src="../assets/js/admin_sidebar.js"></script>

</body>

</html>