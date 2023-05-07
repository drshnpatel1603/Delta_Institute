<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<?php

if (isset($_POST['submit'])) {

    $id = $_POST['faculty_id'];
    $name = $_POST['f_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $date = $_POST['join_date'];
    $branch = $_POST['branch'];
    $deg = $_POST['degree'];

    // ***************************************** Faculty images upload code and save image/Faculty folder  ********************************************************** //

    $file = $_FILES['faculty_image'];

    $filename = $file['name'];
    $fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    // $exte = explode('.', $filename);
    // $filecheck = strtolower(end($exte));

    // $stored = array('png', 'jpg', 'jpeg');
    // if (in_array($filecheck, $stored)) {

    $image = '../Admin/image/Faculty/' . $filename;
    move_uploaded_file($filetmp, $image);

    // }


    // ***************************************** Faculty images upload code and save image/Faculty folder  ********************************************************** //


    $select = " SELECT * FROM faculty_info WHERE faculty_id = '$id' ";

    $insert = "INSERT INTO faculty_info (faculty_id, faculty_name, image, phone_no, email, birth_date, joining_date, branch, degree) 
        VALUES('$id','$name','$image','$phone','$email','$dob','$date','$branch','$deg')";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'>alert('Allready Register This I`d');
        </script>";
    } else {
        mysqli_query($conn, $insert);
        echo "<script type='text/javascript'>alert('Faculty Registration successfully...');window.location.href='faculty_info.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title> Faculty Registration </title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <style>
        :root {
            --primary: #6b59d3;
            --secondary: #bfc0c0;
            --white: #fff;
            --text-clr: #5b6475;
            --header-clr: #25273d;
            --next-btn-hover: #8577d2;
            --back-btn-hover: #8b8c8c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            outline: none;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background: var(--primary);
            color: var(--text-clr);
            font-size: 16px;
            position: relative;
        }

        .wrapper {
            width: 550px;
            /* max-width: 100%; */
            height: 510px;
            background: var(--white);
            margin: 100px auto 0;
            padding: 30px;
            border-radius: 5px;
        }

        .wrapper .header {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        .wrapper .header ul {
            display: flex;
        }

        .wrapper .header ul li {
            margin-right: 50px;
            position: relative;
        }

        .wrapper .header ul li:last-child {
            margin-right: 0;
        }

        .wrapper .header ul li:before {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 55px;
            width: 100%;
            height: 2px;
            background: var(--secondary);
        }

        .wrapper .header ul li:last-child:before {
            display: none;
        }

        .wrapper .header ul li div {
            padding: 5px;
            border-radius: 50%;
        }

        .wrapper .header ul li p {
            width: 50px;
            height: 50px;
            background: var(--secondary);
            color: var(--white);
            text-align: center;
            line-height: 50px;
            border-radius: 50%;
        }

        .wrapper .header ul li.active:before {
            background: var(--primary);
        }

        .wrapper .header ul li.active p {
            background: var(--primary);
        }

        .wrapper .form_wrap {
            margin-bottom: 35px;
        }

        .wrapper .form_wrap h2 {
            color: var(--header-clr);
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .wrapper .form_wrap .input_wrap {
            width: 350px;
            max-width: 100%;
            margin: 0 auto 20px;
        }

        .wrapper .form_wrap .input_wrap:last-child {
            margin-bottom: 0;
        }

        .wrapper .form_wrap .input_wrap label {
            display: block;
            margin-bottom: 5px;
        }

        .wrapper .form_wrap .input_wrap input {
            border: 2px solid var(--secondary);
            border-radius: 3px;
            padding: 10px;
            display: block;
            width: 100%;
            font-size: 16px;
            transition: 0.5s ease;
        }

        .wrapper .form_wrap .input_wrap .input {
            border: 2px solid var(--secondary);
            border-radius: 3px;
            padding: 10px;
            display: block;
            width: 100%;
            font-size: 16px;
            transition: 0.5s ease;
        }

        .wrapper .form_wrap .input_wrap .input:focus {
            border-color: var(--primary);
        }

        .wrapper .btns_wrap {
            width: 350px;
            max-width: 100%;
            margin: 0 auto;
        }

        .wrapper .btns_wrap .common_btns {
            display: flex;
            justify-content: space-between;
        }

        .wrapper .btns_wrap .common_btns.form_1_btns {
            justify-content: flex-end;
        }

        .wrapper .btns_wrap .common_btns button {
            border: 0;
            padding: 12px 15px;
            background: var(--primary);
            color: var(--white);
            width: 135px;
            justify-content: center;
            display: flex;
            align-items: center;
            font-size: 16px;
            border-radius: 3px;
            transition: 0.5s ease;
            cursor: pointer;
        }

        .wrapper .btns_wrap .common_btns button.btn_back {
            background: var(--secondary);
        }

        .wrapper .btns_wrap .common_btns button.btn_next .icon {
            display: flex;
            margin-left: 10px;
        }

        .wrapper .btns_wrap .common_btns button.btn_back .icon {
            display: flex;
            margin-right: 10px;
        }

        .wrapper .btns_wrap .common_btns button.btn_next:hover,
        .wrapper .btns_wrap .common_btns button.btn_done:hover {
            background: var(--next-btn-hover);
        }

        .wrapper .btns_wrap .common_btns button.btn_back:hover {
            background: var(--back-btn-hover);
        }
    </style>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="wrapper">
            <div class="header">
                <ul>
                    <li class="active form_1_progessbar">
                        <div>
                            <p>1</p>
                        </div>
                    </li>
                    <li class="form_2_progessbar">
                        <div>
                            <p>2</p>
                        </div>
                    </li>
                    <li class="form_3_progessbar">
                        <div>
                            <p>3</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <div class="form_wrap">
                    <div class="form_1 data_info">
                        <h2>Basic Information</h2>
                        <!-- <form> -->
                        <div class="form_container">
                            <div class="input_wrap">
                                <label> Faculty Id</label>
                                <input type="text" name="faculty_id" placeholder="Give Faculty i`d" required>
                            </div>
                            <div class="input_wrap">
                                <label> Faculty Name </label>
                                <input type="text" name="f_name" placeholder="Enter Name" required>
                            </div>
                            <div class="input_wrap">
                                <label> Upload Faculty Profile</label>
                                <input type="file" name="faculty_image" required>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>

                    <div class="form_2 data_info" style="display: none;">
                        <h2>Personal Information</h2>
                        <!-- <form> -->
                        <div class="form_container">
                            <div class="input_wrap">
                                <label> Phone Number </label>
                                <input type="phone" name="phone" pattern="[0-9]{10}" placeholder="Phone Number" required>
                            </div>
                            <div class="input_wrap">
                                <label> Email </label>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="input_wrap">
                                <label> Date Of Birth </label>
                                <input type="date" name="dob" placeholder="Date of Birth" required>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>

                    <div class="form_3 data_info" style="display: none;">
                        <h2>Other Informationrmation</h2>
                        <!-- <form> -->
                        <div class="form_container">
                            <div class="input_wrap">
                                <label> Joining Date </label>
                                <input type="date" name="join_date" placeholder="Joining Date" required>
                            </div>
                            <div class="input_wrap">
                                <label> Posting A Branch </label>
                                <select class="input" name="branch" required>
                                    <option disabled selected>Select branch</option>
                                    <option value="B.B.A">B.B.A</option>
                                    <option value="B.Com">B.Com</option>
                                    <option value="B.C.A">B.C.A</option>
                                </select>
                            </div>
                            <div class="input_wrap">
                                <label> Qualification </label>
                                <input type="text" name="degree" placeholder="Qualification Degree" required>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="btns_wrap">
                    <div class="common_btns form_1_btns">
                        <button type="button" class="btn_next">Next <span class="icon">
                                <ion-icon name="arrow-forward-sharp"></ion-icon>
                            </span></button>
                    </div>
                    <div class="common_btns form_2_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon">
                                <ion-icon name="arrow-back-sharp"></ion-icon>
                            </span>Back</button>
                        <button type="button" class="btn_next">Next <span class="icon">
                                <ion-icon name="arrow-forward-sharp"></ion-icon>
                            </span></button>
                    </div>
                    <div class="common_btns form_3_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon">
                                <ion-icon name="arrow-back-sharp"></ion-icon>
                            </span>Back</button>
                        <button type="submit" onclick="reg()" name="submit" class="btn_done">Done</button>
                    </div>
                </div>
            </div>
        </div>
</form>

    <script src="../assets/js/faculty_form.js"></script>

    <script>
        function reg() {
            var result = confirm(' Are you sure add faculty ? ');
            if (result == false) {
                event.preventDefault();
            }
        }
    </script>

</body>

</html>