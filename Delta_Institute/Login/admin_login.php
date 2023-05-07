<?php

session_start();
    require_once "../assets/connection/config.php"; 

if (isset($_POST['submit'])) {
 
    $id = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $select = " SELECT * FROM admin_login WHERE admin_id = '$id' and admin_password = '$password' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($row['admin_type'] == 'admin') {    
            $_SESSION['admin'] = $row['admin_name'];
            header('location:../Admin/admin_index.php');
        } elseif ($row['admin_type'] == 'staff') {
            $_SESSION['admin'] = $row['admin_name'];
            header('location:../Admin/student_information.php');
        }
    } else {
        echo "<script type='text/javascript'>alert('incorrect email or password!');
                </script>";
    }
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Admin </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <!-- integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="home.css"> -->
    <style>
        body {
            background-color: rgb(43, 41, 41);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .center {
            justify-content: center;
            text-align: center;
        }

        .a_icon {
            margin-bottom: 10px;
            font-size: 25px;
        }

        p {
            font-size: 20px;
        }

        .main {
            /* border: 2px solid red; */
            border-radius: 3%;
            display: inline-block;
            margin-top: auto;
            margin-bottom: auto;
            background-color: black;
            padding: 40px 70px;
            color: white;
        }

        .btn {
            color: black;
            font-weight: 500;
            background-color: chartreuse;
            margin-top: 22px;
            padding: 5px 20px;
            border-radius: 12%;
        }

        .btn:hover {
            background-color: rgb(123, 198, 48);

        }

        input {
            padding: 5px 5px;
            max-width: 200px;
        }

        @media screen and (max-width:576px) {
            .main {
                padding: 27px 25px;
                font-size: 12px;
            }

            p {
                font-size: 17px;
            }
        }

        @media (min-width:577px) and (max-width:767px) {
            .main {
                padding: 31px 40px;
                font-size: 14px;
            }
        }

        @media (min-width:768px) and (max-width:992px) {
            .main {
                padding: 34px 50px;
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <div class="main">
        <form action="" method="post">  
            <div class="a_icon center">
                <icon class="fa fa-user"></icon>
            </div>
            <p class="center"> Admin Login </p>
            <div class="center">
                <icon class="fa-regular fa-user mx-2"></icon>
                <input type="email" name="email" placeholder="Admin ID" required>
                <br><br>
                <icon class="fa fa-key mx-2"></icon>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="center">
                <button type="submit" name="submit" class="btn"> Login </button>
            </div>
        </form>
    </div>

</body>

</html>