<title> placement 2020-21 </title>

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
                Placement 2020-21
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
                    <img src="https://darshan.ac.in/U01/Student-Photo/170540107136---16-07-2021-09-52-59.JPG" alt="student_img" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">SHYAM
                            RAVAL </h5>
                        <p class="car-text my-0"> 170540107136</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/TCS---13-03-2022-03-33-19.jpg" class="img-fluid">
                        <p class="car-text">Gandhinagar </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/170540107142---16-07-2021-09-58-05.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> AKASH
                            SANTWANI </h5>
                        <p class="car-text my-0"> 170540107142 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/TCS---13-03-2022-03-33-19.jpg" class="img-fluid">
                        <p class="car-text">Gandhinagar </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/170540107128---16-07-2021-10-54-14.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> NAMRA
                            RAMANI</h5>
                        <p class="car-text my-0">170540107128 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/42gears---05-08-2022-10-31-10.png" class="img-fluid">
                        <p class="car-text"> Rajkot </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180543107011_11012021_035523AM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">SATISH
                            KOTADIYA </h5>
                        <p class="car-text my-0"> 180543107011</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/Fero-ai%20logo_11012021_045522AM.jpg" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180543107006---18-07-2021-11-54-40.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> KENIL
                            DHAMSANIYA </h5>
                        <p class="car-text my-0"> 180543107006 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/NeoFruition---18-07-2021-11-48-11.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/170540107014_08122020_051031PM.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">YASH
                            BHATASANA </h5>
                        <p class="car-text my-0"> 170540107014</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/14-18_Tatvasoft_20032020_053024AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/170540107035---16-07-2021-09-55-22.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">JIGAR
                            DHAMSANIYA</h5>
                        <p class="car-text my-0"> 170540107035 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/40_RKIT_20032020_021851PM.png" class="img-fluid">
                        <p class="car-text">Rajkot </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/170540107173---16-07-2021-09-55-42.JPG" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> DHRUVI
                            VANPARIYA </h5>
                        <p class="car-text my-0"> 170540107173 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/40_RKIT_20032020_021851PM.png" class="img-fluid">
                        <p class="car-text">Rajkot </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180540107074---18-01-2022-10-45-19.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">ADITYA
                            KADECHA </h5>
                        <p class="car-text my-0"> 180540107074</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/Satva%20Solutions---29-07-2021-11-52-05.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180540107068---08-01-2022-11-36-52.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">RUSHI
                            JOBANPUTRA </h5>
                        <p class="car-text my-0"> 180540107068</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/Satva%20Solutions---29-07-2021-11-52-05.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180540107146---18-01-2022-10-38-29.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> MANALI
                            SANGANI</h5>
                        <p class="car-text my-0">180540107146 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/41_tridhyatech_20032020_022055PM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180540107019---21-01-2022-09-25-55.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">SUNITABEN
                            BHAYANI </h5>
                        <p class="car-text my-0">180540107019 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/Systenics%20Solutions---21-01-2022-08-17-52.png" class="img-fluid">
                        <p class="car-text"> Mumbai</p>
                    </div>
                </center>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180540107046---18-01-2022-10-26-27.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> MAGDHI
                            DOSHI</h5>
                        <p class="car-text my-0">180540107046 </p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/Silent%20Infotech_Logo_09122020_045552PM.png" class="img-fluid">
                        <p class="car-text">Ahmedabad </p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180540107034---21-01-2022-10-31-13.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3"> RUTU
                            DALSANIYA</h5>
                        <p class="car-text my-0"> 180540107034</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/TCS---13-03-2022-03-33-19.jpg" class="img-fluid">
                        <p class="car-text"> Pune</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180540107070---21-01-2022-09-27-45.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">DISHA
                            JOSHI </h5>
                        <p class="car-text my-0"> 180540107070</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/TCS---13-03-2022-03-33-19.jpg" class="img-fluid">
                        <p class="car-text"> Pune</p>
                    </div>
                </center>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 px-3 border1">
                <center>
                    <img src="https://darshan.ac.in/U01/Student-Photo/180540107084---19-01-2022-09-57-35.jpg" class="car-img-top img-fluid">

                    <div class="car-body">
                        <h5 class="car-title my-3">RAJ
                            KAPURIYA </h5>
                        <p class="car-text my-0"> 180540107084</p>
                        <hr class="my-0">
                        <p class="car-text my-1"> CTC per annum</p>
                        <p class="car-text" style="background: red; color:white;"> $20.00 Lac </p>
                        <hr>
                        <img src="https://darshan.ac.in//U01/Recruiter/33_Inexture_20032020_101710AM.png" class="img-fluid">
                        <p class="car-text"> Ahmedabad</p>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <br>

    <?php include('../index/footer.html') ?>

</body>

</html>