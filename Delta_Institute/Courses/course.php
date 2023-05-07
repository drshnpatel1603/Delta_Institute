
    <title>Course</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        .clg {
            height: 450px;
            width: 1550px;
            border: 2px solid black;
            position: relative;
            z-index: 2;
        }

        .placement-header {
            position: relative;
            /* top: 363px; */
            bottom: 28px;
            font-size: 36px;
            background: #34495e;
            border-radius: 20px;
            color: red;
            width: 570px;
            font-weight: 1000;
            text-align: center;
            padding: 16px 80px 16px 0px;
            color: white;
            margin: 0px 10px 10px 0px;
            z-index: 5;
        }

        .text {
            font-size: 10px;
            margin-right: 4px;
        }

        .bb {
            border: 2px solid black;

        }

        @media (min-width:768px) and (max-width:992px) {

            .placement-header {
                width: 50%;
                font-size: 25px;
            }

        }

        @media (min-width:576px) and (max-width:767px) {
            .placement-header {
                width: 65%;
                font-size: 22px;
            }
        }

        @media(max-width:575px) {
            .placement-header {
                width: 75%;
                font-size: 20px;
            }

        }
    </style>
    <script>
        $(document).ready(function() {
            $('#popup').click(function() {
                $('ul').toggleClass('show');
            });
        });
    </script>
</head>

<body>

<?php include('../index/header.html') ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <img class="clg img-fluid" src="https://tse4.mm.bing.net/th?id=OIP.6t0-H5CxRRzs4BIcz2yWiwHaEK&pid=Api&P=0" alt="clg_image" height="200px" width="1450px">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 placement-header">
                Courses & Fees
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-9 col-md-11 col-sm-12 p-0 mb-2 border">
                <div class="bb px-2">
                    <h4>Courses Offered By Darshan College, Rajkot</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 col-md-11 col-sm-12 border border-dark">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h5><a href="../Courses/bcom.php">Bachelor of Commerce [B.Com]</a></h5>
                        <div class=""><b> ₹ 17,610 </b>1st Yr Fees </div>
                    </div>
                    <i class="text fa fa-clock-four"></i><span class="text">3 YEARS</span>
                    <i class="text fa fa-book-open"></i><span class="text"> DEGREE</span>
                    <i class="text fa fa-building"></i><span class="text">ON CAMPUS </span>
                    <i class="text fa fa-graduation-cap"></i><span class="text"> GRADUATION</span>
                    <i class="text fa fa-circle-plus"></i><span class="text">FULL TIME </span>
                    <p class="mb-1">Specialization : General</p>
                </div>
                <div class="bg-light px-2">
                    <p class="m-0"> Eligibility </p>
                    <p class=""> 10+2 </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-3">
            <div class="col-12 col-lg-9 col-md-11 col-sm-12 border border-dark">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h5><a href="../Courses/bba.php">Bachelor of Business Administration [BBA]</a></h5>
                        <div class=""><b>₹ 19,610</b> 1st Yr Fees</div>
                    </div>
                    <i class="text fa fa-clock-four"></i><span class="text">3 YEARS</span>
                    <i class="text fa fa-book-open"></i><span class="text"> DEGREE</span>
                    <i class="text fa fa-building"></i><span class="text">ON CAMPUS </span>
                    <i class="text fa fa-graduation-cap"></i><span class="text"> GRADUATION</span>
                    <i class="text fa fa-circle-plus"></i><span class="text">FULL TIME </span>
                    <p class="mb-1">Specialization : General</p>
                </div>
                <div class="bg-light">
                    <p class="m-0"> Eligibility </p>
                    <p class=""> 10+2 </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 col-md-11 col-sm-12 border border-dark">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h5><a href="../Courses/bca.php">Bachelor of Computer Applications [BCA]</a></h5>
                        <div class=""><b>₹ 21,610 </b>1st Yr Fees</div>
                    </div>
                    <i class="text fa fa-clock-four"></i><span class="text">3 YEARS</span>
                    <i class="text fa fa-book-open"></i><span class="text"> DEGREE</span>
                    <i class="text fa fa-building"></i><span class="text">ON CAMPUS </span>
                    <i class="text fa fa-graduation-cap"></i><span class="text"> GRADUATION</span>
                    <i class="text fa fa-circle-plus"></i><span class="text">FULL TIME </span>
                    <p class="mb-1">Specialization : General</p>
                </div>
                <div class="bg-light">
                    <p class="m-0"> Eligibility </p>
                    <p class=""> 10+2 </p>
                </div>
            </div>
        </div>
    </div>

    <br>

    <?php include('../index/footer.html') ?>

</body>

</html>