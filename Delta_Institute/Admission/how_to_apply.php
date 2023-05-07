<?php
@include '../assets/connection/config.php';

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

    $insert = "INSERT INTO student_info (student_name, last_name, student_image, birth_date, email, phone_number, gender, status, branch, admission_date, category, father_name, father_phone_no, father_occupation, address, pincode, city, action) 
        VALUES('$sname','$lname','$image','$dob','$email','$sphone','$gender','$status','$branch','$date','$cat','$fname','$fphone','$focc','$add','$pincode','$city', 'Deactivate')";


    if (mysqli_query($conn, $insert)) {
        echo "<script type='text/javascript'>alert('Your Admission Request has been pending ...');window.location.href=' ../index/index.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>alert(' Opps! Not Submitted Your Form ...');
        </script>";
        header("");
    }
}
?>


<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/ne.css">

<title>Student Admission Form </title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #4070f4;
    }

    .container {
        position: relative;
        width: 800px;
        border-radius: 15px;
        padding: 30px;
        height: 450px;
        margin-top: 2%;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
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
        height: 350px;
        background-color: #fff;
        overflow: hidden;
    }

    .container form .form {
        position: absolute;
        background-color: #fff;
        transition: 0.3s ease;
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
        width: calc(100% / 3 - 15px);
        flex-direction: column;
        margin: 4px 0;
    }

    .input-field label {
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
        /* display: flex; */
        align-items: center;
        justify-content: center;
        height: 43px;
        /* max-width: 200px;
        width: 100%; */
        width: 200px;
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
        width: 230px;
    }

    form .buttons button,
    .backBtn {
        margin-right: 14px;
    }

    .btnwidth {
        position: relative;
        top: 12px;
        left: 15px;
    }
</style>
</head>

<body>



    <div class="container">

        <header>Student Admission From</header>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
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

                        <button class="nextBtn">
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
                            <label> Today's Date </label>
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

                        <div class="buttons">
                            <div class="backBtn">
                                <i class="uil uil-navigator"></i>
                                <span class="btnText btnwidth">Back</span>
                            </div>

                            <button class="sumbit" onclick="request()" type="submit" name="submit">
                                <span class="btnText">Submit</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        const form = document.querySelector("form"),
            nextBtn = form.querySelector(".nextBtn"),
            backBtn = form.querySelector(".backBtn"),
            allInput = form.querySelectorAll(".first input");


        nextBtn.addEventListener("click", () => {
            allInput.forEach(input => {
                if (input.value != "") {
                    form.classList.add('secActive');
                } else {
                    form.classList.remove('secActive');
                }
            })
        })

        backBtn.addEventListener("click", () => form.classList.remove('secActive'));
    </script>

    <script>
        function request() {
            var result = confirm(' Are you confirm this payment ? ');
            if (result == false) {
                event.preventDefault();
            }
        }
    </script>

</body>

</html>