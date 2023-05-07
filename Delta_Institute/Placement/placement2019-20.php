<title> placement 2019-20 </title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
    .clg {
        height: 388px;
        width: 1550px;
        border: 2px solid black;
        position: relative;
        z-index: 2;
    }

    .placement-header {
        position: relative;
        bottom: 28px;
        font-size: 36px;
        background: #34495e;
        border-radius: 20px;
        color: red;
        width: 609px;
        font-weight: 1000;
        text-align: center;
        padding: 16px 80px 16px 0px;
        color: white;
        margin: 0px 10px 10px 0px;
        z-index: 5;
    }

    .stream {
        position: relative;
        padding: 5px 15px 5px 15px;
        margin: 0px 0px 0px 0px;
        width: 250px;
        background-color: #34495e;
        color: white;
        font-size: 20px;
        border-radius: 10px;
    }

    .stream1 {
        padding: 5px 15px 5px 15px;
        margin: 0px 0px 0px 0px;
        background-color: #34495e;
        color: white;
        font-size: 17px;
        border-radius: 10px;
    }

    .borders {
        border: 1px solid red;
        background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(241, 67, 67));
        border-radius: 10px;
        margin: 10px 10px;
    }

    .borders12 {
        border: 1px solid red;
        background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(81, 57, 240));
        border-radius: 10px;
        margin: 10px 10px;
    }

    .borders34 {
        border: 1px solid red;
        background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(242, 57, 226));
        border-radius: 10px;
        margin: 10px 10px;
    }

    .border1 {
        border: 1px solid black;
        border-radius: 10px;
        width: 24%;
        margin: 5px 0.5%;

    }

    .font {
        font-size: 28px;
        margin-top: 8px;
    }

    h3 {
        text-align: end;
    }

    @media (min-width:768px) and (max-width:992px) {
        .border1 {
            width: 32%;
        }

        .borders {
            width: 32%;
        }

        .placement-header {
            width: 50%;
            font-size: 25px;
        }

        .stream1 {
            width: 40%;
        }
    }

    @media (min-width:576px) and (max-width:767px) {
        .border1 {
            width: 48%;
        }

        .borders {
            width: 45%;
        }

        .placement-header {
            width: 65%;
            font-size: 22px;
        }
    }

    @media(max-width:575px) {
        .border1 {
            width: 80%;
        }

        .borders {
            width: 80%;
        }

        .placement-header {
            width: 75%;
            font-size: 20px;
        }

        .stream1 {
            width: 50%;
        }

        .center {
            justify-content: center;
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
                <img class="clg img-fluid" src="https://tse2.mm.bing.net/th?id=OIP.HZ3hsbQEpKeP0qZljF6aKwFmCu&pid=Api&P=0" alt="clg_image" height="200px" width="1450px">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 placement-header">
                Placement 2019-20
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-4 stream">
                computer Science & IT
            </div>
            <hr style="position:relative; bottom: 20px;">
        </div>
    </div>


    <!-- palcement Details -->

    <div class="container">
        <div class="row">
            <div class="col-3 borders d-flex justify-content-between">
                <div>
                    <i class="fa fa-user font"></i>
                </div>
                <div class="">
                    <h3 class="">212</h3>
                    <h5>Registered Students</h5>
                </div>
            </div>

            <div class="col-3 borders12 d-flex justify-content-between">
                <div>
                    <i class="fa fa-briefcase font"></i>
                </div>
                <div class="">
                    <h3>173</h3>
                    <h5>Placed Students</h5>
                </div>
            </div>

            <div class="col-3 borders34 d-flex justify-content-between">
                <div>
                    <i class="fa-solid fa-building font"></i>
                </div>
                <div class="">
                    <h3>80%</h3>
                    <h5>Placement Rate</h5>
                </div>
            </div>

            <div class="col-3 borders d-flex justify-content-between">
                <div>
                    <i class="fa fa-user font "></i>
                </div>
                <div class="">
                    <h3>20.00 Lac</h3>
                    <h5>Highest Package</h5>
                </div>
            </div>

            <div class="col-3 borders12 d-flex justify-content-between">
                <div>
                    <i class="fa fa-briefcase font"></i>
                </div>
                <div class="">
                    <h3>5.75 Lac</h3>
                    <h5>Average Package</h5>
                </div>
            </div>

            <div class="col-3 borders34 d-flex justify-content-between">
                <div>
                    <i class="fa-solid fa-building font"></i>
                </div>
                <div class="">
                    <h3>37 </h3>
                    <h5>Companies Visited</h5>
                </div>
            </div>

        </div>
    </div>

    <!-- headung -->


    <div class="container">
        <div class="row">
            <div class="col-4 stream1 my-3">
                Placed Students
            </div>
            <hr style="position:relative; bottom: 35px;">
        </div>
    </div>


    <!-- placed Student -->


    <div class="container">
        <div class="row center">
            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107088_21082020_070812PM.jpg" alt="student_img" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> SHUBHAM MER </h5>
                        <p class="car-text my-0"> 160540107088 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $10.00 Lac </p>
                        <hr>
                        <img class="img-fluid" src="https://darshan.ac.in//U01/Recruiter/BYJUS_NEW_LOGO_21082020_065339PM.png">
                        <p class="car-text">Bhavnagar </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107061_17032020_080443AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">KEYUR JANI</h5>
                        <p class="car-text my-0">160540107061 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img class="img-fluid" src="https://darshan.ac.in//U01/Recruiter/1_Cognizant_17032020_072218AM.png">
                        <p class="car-text"> Mumbai</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107134_18032020_073119AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">PARAG
                            SANCHANIYA </h5>
                        <p class="car-text my-0"> 160540107134</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/4_Gantner_18032020_072946AM.png" class="img-fluid">
                        <p class="car-text"> Gandhinagar</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/170543107001_20032020_065306AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">BHAGYESH
                            AGHERA </h5>
                        <p class="car-text my-0">170543107001
                        </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/22-26_bacancy_20032020_070753AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107022_20032020_065517AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> SHUBHAM
                            CHANDROLIYA</h5>
                        <p class="car-text my-0"> 160540107022</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/22-26_bacancy_20032020_070753AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107048_20032020_065610AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">AYUSHI
                            GHONIYA </h5>
                        <p class="car-text my-0"> 160540107048</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/22-26_bacancy_20032020_070753AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107082_20032020_065721AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">KALP
                            LATHIA </h5>
                        <p class="car-text my-0">160540107082 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/22-26_bacancy_20032020_070753AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107086_20032020_071829AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> MANTHAN
                            TRIVEDI</h5>
                        <p class="car-text my-0"> 160540107086
                        </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/22-26_bacancy_20032020_070753AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107030_18032020_074959AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> NILESH
                            CHUDASAMA</h5>
                        <p class="car-text my-0">160540107030 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/infostretch_logo_22122018_072944AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107106_18032020_064350AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> SHWETA
                            PARSANIYA </h5>
                        <p class="car-text my-0">160540107106 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/TCS---13-03-2022-03-33-19.jpg" class="img-fluid">
                        <p class="car-text"> Pune </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107146_18032020_075338AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> MEGHA
                            TRIVEDI </h5>
                        <p class="car-text my-0"> 160540107146 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/TCS---13-03-2022-03-33-19.jpg" class="img-fluid">
                        <p class="car-text">Pune </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107113_19032020_053504AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">UTSAV
                            PATEL </h5>
                        <p class="car-text my-0"> 160540107113</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/logo_07122016_040059AM_22122018_035341AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/170543107023_19032020_053554AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> SAVAN
                            SERASIYA </h5>
                        <p class="car-text my-0"> 170543107023 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/logo_07122016_040059AM_22122018_035341AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107145_19032020_054208AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> MOHIL
                            TRAMBADIYA </h5>
                        <p class="car-text my-0"> 160540107145 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/logo_07122016_040059AM_22122018_035341AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107009_20032020_052108AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> MANALI
                            BHALODIA </h5>
                        <p class="car-text my-0"> 160540107009 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/14-18_Tatvasoft_20032020_053024AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/160540107020_20032020_052210AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">SIDDHARTH
                            BUSA </h5>
                        <p class="car-text my-0"> 160540107020 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/14-18_Tatvasoft_20032020_053024AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <br>
    
    <?php include('../index/footer.html') ?>

</body>

</html>