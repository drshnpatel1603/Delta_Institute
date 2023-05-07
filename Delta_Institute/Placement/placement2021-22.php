<!DOCTYPE html>

<title> placement 2021-22 </title>

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

    .border1 {
        border: 1px solid black;
        border-radius: 10px;
        width: 24%;
        margin: 5px 0.5%;
    }

    .blue {
        background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(81, 57, 240));
    }

    .purple {
        background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(242, 57, 226));
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
                Placement 2021-22
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

            <div class="col-3 borders blue d-flex justify-content-between">
                <div>
                    <i class="fa fa-briefcase font"></i>
                </div>
                <div class="">
                    <h3>173</h3>
                    <h5>Placed Students</h5>
                </div>
            </div>

            <div class="col-3 borders purple d-flex justify-content-between">
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

            <div class="col-3 borders blue d-flex justify-content-between">
                <div>
                    <i class="fa fa-briefcase font"></i>
                </div>
                <div class="">
                    <h3>5.75 Lac</h3>
                    <h5>Average Package</h5>
                </div>
            </div>

            <div class="col-3 borders purple d-flex justify-content-between">
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
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107121---11-05-2022-10-07-57.JPG" alt="student_img" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">KATHAN
                            LUNAGARIYA </h5>
                        <p class="car-text my-0">190540107121 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/ZOMATO---14-07-2022-05-21-40.png" class="img-fluid">
                        <p class="car-text">Gurgaon </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107007---11-05-2022-10-47-38.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">DHAVAL
                            BERA </h5>
                        <p class="car-text my-0"> 190540107007</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/Motadata---03-08-2022-10-43-46.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107085---11-05-2022-10-20-13.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> SOHAM
                            JOSHI</h5>
                        <p class="car-text my-0">190540107085 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/6-7_Asite_18032020_080100AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107030---11-05-2022-10-25-24.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">IKSHIKA
                            CHOTAI </h5>
                        <p class="car-text my-0"> 190540107030</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/6-7_Asite_18032020_080100AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107005---25-06-2022-05-56-49.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> DRASHTI
                            ATKOTIYA</h5>
                        <p class="car-text my-0"> 190540107005</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/6-7_Asite_18032020_080100AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107106---12-07-2022-07-59-44.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> SWAPNIL
                            KATHIRIYA</h5>
                        <p class="car-text my-0">190540107106 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/6-7_Asite_18032020_080100AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107181---22-06-2022-04-13-35.JPG" class="car-img-top img-fluid">
                    <div class="car-body">
                        <h5 class="car-title my-3">MIRAL
                            SANGANI </h5>
                        <p class="car-text my-0"> 190540107181</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/6-7_Asite_18032020_080100AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107116---11-05-2022-10-17-37.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">SURAJ
                            KUSHVAHA </h5>
                        <p class="car-text my-0">190540107116 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/6-7_Asite_18032020_080100AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/200540107516---11-05-2022-10-45-24.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">DRASHTI
                            KANSAGARA </h5>
                        <p class="car-text my-0">200540107516 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/42gears---05-08-2022-10-31-10.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107109---19-05-2022-08-47-41.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">MIHIR
                            KHUNT </h5>
                        <p class="car-text my-0"> 190540107109</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/9_Simform_19032020_050654AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/200540107519---25-06-2022-05-43-17.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> SUNNY
                            MARTHAK</h5>
                        <p class="car-text my-0">200540107519 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/9_Simform_19032020_050654AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/200540107520---25-06-2022-05-44-15.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> JAY
                            GOHEL</h5>
                        <p class="car-text my-0"> 200540107520</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/9_Simform_19032020_050654AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107014---13-05-2022-08-15-43.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> KRUTI
                            BHIMANI</h5>
                        <p class="car-text my-0">190540107014 </p>
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
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107092---13-05-2022-08-17-56.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">SHREYA
                            KANANI </h5>
                        <p class="car-text my-0"> 190540107092</p>
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
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107214---20-06-2022-11-16-12.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">SMIT
                            VAGHASIYA </h5>
                        <p class="car-text my-0">190540107214 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/MarutiTechlab_10022015_025830AM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/190540107008---19-05-2022-09-21-31.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">MILAN
                            BHALODIYA</h5>
                        <p class="car-text my-0"> 190540107008 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/Version-1_19012015_034015AM.jpg" class="img-fluid">
                        <p class="car-text">Rajkot </p>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <br>
    
    <?php include('../index/footer.html') ?>

</body>

</html>