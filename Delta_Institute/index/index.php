<?php

include_once "../assets/connection/config.php";

?>

<title>Delta Institute</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<style>
    html,
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: "Helvetica", sans-serif;
    }

    img {
        max-width: 100%;
    }

    .slider-container {
        height: 75%;
        width: 100%;
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .menu {
        position: absolute;
        left: 0;
        z-index: 900;
        width: 100%;
        bottom: 0;
    }

    .menu label {
        cursor: pointer;
        display: inline-block;
        width: 16px;
        height: 16px;
        background: #fff;
        border-radius: 50px;
        margin: 0 0.2em 1em;
    }

    .menu label:hover,
    .menu label:focus {
        background: #1c87c9;
    }

    .slide {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 100%;
        z-index: 10;
        padding: 8em 1em 0;
        background-size: cover;
        background-position: 50% 50%;
        transition: left 0s 0.75s;
    }

    [id^="slide"]:checked+.slide {
        left: 0;
        z-index: 100;
        transition: left 0.65s ease-out;
    }

    .slide-1 {
        background-image: url("https://darshan.ac.in/U01/Slider/Slide_8.jpg?V=1");
    }

    .slide-2 {
        background-image: url("https://www.marwadiuniversity.ac.in/wp-content/uploads/2022/08/web_bannner.jpg");
    }

    .slide-3 {
        background-image: url("https://www.marwadiuniversity.ac.in/wp-content/uploads/2022/05/website_banner_rj_5.jpg");
    }

    .slide-4 {
        background-image: url("https://www.marwadiuniversity.ac.in/wp-content/uploads/2022/03/banner-naac-a01-min.jpg");
    }

    .slide-5 {
        background-image: url("https://www.marwadiuniversity.ac.in/wp-content/uploads/2022/05/website_banner_rj_1.jpg");
    }

    .slide-6 {
        background-image: url("https://www.marwadiuniversity.ac.in/wp-content/uploads/2021/05/pearson-desktop.jpg");
    }

    .slide-7 {
        background-image: url("https://www.marwadiuniversity.ac.in/wp-content/uploads/2021/01/whatsapp-image-2021-01-27-at-10.55.29-am.jpeg");
    }

    .para {
        font-size: 20px;
        font-weight: 0;
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px 28px;
        font-style: italic;
        font-weight: lighter;
    }

    .img_margin {
        margin: 14px 16px;
    }

    h2 {
        border-bottom: 1px solid black;
        padding-bottom: 19px;
    }

    .bgimg {
        background-repeat: repeat-x;
        background-image: linear-gradient(225deg, #d61b3c, #13294b);
        color: white;
    }

    .i_size {
        font-size: 32px;
        margin-top: 20px;
    }

    .font-size {
        font-size: 33px;
    }

    .h5 {
        font-size: 16px;
    }

    .font-size-22 {
        font-size: 22px;
    }
</style>
</head>

<body>
    <?php include('header.html') ?>

    <div class="slider-container">
        <div class="menu">
            <label for="slide-dot-1"></label>
            <label for="slide-dot-2"></label>
            <label for="slide-dot-3"></label>
            <label for="slide-dot-4"></label>
            <label for="slide-dot-5"></label>
            <label for="slide-dot-6"></label>
            <label for="slide-dot-7"></label>
        </div>
        <input id="slide-dot-1" type="radio" name="slides" checked>
        <div class="slide slide-1"></div>
        <input id="slide-dot-2" type="radio" name="slides">
        <div class="slide slide-2"></div>
        <input id="slide-dot-3" type="radio" name="slides">
        <div class="slide slide-3"></div>
        <input id="slide-dot-4" type="radio" name="slides">
        <div class="slide slide-4"></div>
        <input id="slide-dot-5" type="radio" name="slides">
        <div class="slide slide-5"></div>
        <input id="slide-dot-6" type="radio" name="slides">
        <div class="slide slide-6"></div>
        <input id="slide-dot-7" type="radio" name="slides">
        <div class="slide slide-7"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/06/student-study.jpg">
            </div>
            <div class="col-6">
                <p style="font-size: 36px; color: #ffba00; margin-top: 9px;"> Education </p>
                <p> Unique ‘Three Tier Education’ structure ensures that there is an ample opportunity for every
                    individual to learn all the educational and professional attributes </p>
                <div class="row">
                    <div class="col">
                        <div class="d-flex">
                            <i class="fa fa-sharp fa-solid fa-user-tie" style="color: #234260; margin-top:0px; font-size: 25px;"></i>
                            <p style="font-size: 18px; padding-left:7px; color: #234260;"> KNOWLEDGE </p>
                        </div>
                        <p> Marwadi University syllabus along with innovative teaching methodology with classrooms, lab
                            work, project training, team work, industrial visits, case studies ensures that students are
                            always updated with the current knowledge. </p>

                        <div class="d-flex">
                            <i class="fa fa-solid fa-thumbs-up" style="color: #234260; margin-top:0px; font-size: 25px;"></i>
                            <p style="font-size: 18px; padding-left:7px; color: #34495e;"> SKILLS </p>
                        </div>
                        <p> Marwadi University nurture every student for the Global Careers through the rigorous skill
                            enhancement programs thereby bridges the gap of students coming out from education system
                            and requirement of corporate world. </p>
                        <div class="d-flex">
                            <i class="fa fa-solid fa-square-up-right" style="color: #234260; margin-top:0px; font-size: 25px;"></i>
                            <p style="font-size: 18px; padding-left:7px; color: #34495e;"> DEVELOPMENT </p>
                        </div>
                        <p> Marwadi University aims to deliver holistic experiences to students to ensure their success
                            not only in academics & professional careers, but also their overall life. Tertiary
                            institution is created with the objective to make students more competent by imparting life
                            skills, leadership skills and to foster the spirit of respect towards the society. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Counter -->
    <section class="g-bg-du-lineargradient-v1 bgimg p-5">
        <div class="container-du-content u-bg-overlay__inner g-color-white g-pt-50 g-pb-30">
            <div class="row text-center">
                <div class="col-lg-3 col-6 g-mb-30 g-mb-0--lg">
                    <!-- <i class="fa fa-education-007 u-line-icon-pro g-color-white g-font-size-40 g-mb-25"></i><br /> -->
                    <p> <i class="fa fa-solid fa-book-open-reader i_size"></i> </p>
                    <div class="d-inline-block js-counter font-size g-mb-0 g-font-secondary g-font-weight-700">9800
                    </div>
                    <span class="d-inline-block g-color-white g-font-weight-600 font-size-22 mb-0">+</span>
                    <h4 class="h5 g-mb-15 g-font-weight-300">Students<br />Shown Faith in us</h4>
                </div>

                <div class="col-lg-3 col-6 g-mb-30 g-mb-0--lg">
                    <!-- <i class="icon-real-estate-066 u-line-icon-pro g-color-white g-font-size-40 g-mb-25"></i><br /> -->
                    <p> <i class="fa fa-solid fa-building i_size"></i></p>
                    <div class="d-inline-block js-counter font-size g-mb-0 g-font-secondary g-font-weight-700">22
                    </div>
                    <span class="d-inline-block g-color-white g-font-weight-600 font-size-22 mb-0">Acre</span>
                    <h4 class="h5 g-mb-15 g-font-weight-300">World Class<br />Infrastructure</h4>
                </div>

                <div class="col-lg-3 col-6 g-mb-30 g-mb-0--lg">
                    <!-- <i class="icon-real-estate-088 u-line-icon-pro g-color-white g-font-size-40 g-mb-25"></i><br /> -->
                    <p> <i class="fa-solid fa-city i_size"></i> </p>
                    <div class="d-inline-block js-counter font-size g-mb-0 g-font-secondary g-font-weight-700">125
                    </div>
                    <span class="d-inline-block g-color-white g-font-weight-600 font-size-22 mb-0">+</span>
                    <h4 class="h5 g-mb-15 g-font-weight-300">Consultancy / Research<br />Projects</h4>
                </div>

                <div class="col-lg-3 col-6 g-mb-30 g-mb-0--lg">
                    <!-- <i class="icon-education-001 u-line-icon-pro g-color-white g-font-size-40 g-mb-25"></i><br /> -->
                    <p> <i class="fa fa-thin fa-graduation-cap i_size"></i> </p>
                    <div class="d-inline-block js-counter font-size g-mb-0 g-font-secondary g-font-weight-700">20
                    </div>
                    <span class="d-inline-block g-color-white g-font-weight-600 font-size-22 mb-0">+</span>
                    <h4 class="h5 g-mb-15 g-font-weight-300">Courses Offered<br />in UG / PG / Diploma</h4>
                </div>
            </div>

        </div>
    </section>
    <br>
    <div class="container-fluid">


        <div class="container">
            <div class="row">
                <div class="col-12 text-center m-3">
                    <h2 style="color: #ffba00; font-size:40px;"><i class="fa-solid fa-calendar-days" style="color: black;"></i> &nbsp;News & Activities</h2>
                </div>

                <?php
                $select = " SELECT * FROM news";
                $result = mysqli_query($conn, $select);

                while ($row = mysqli_fetch_array($result)) { ?>

                    <div class=" col-md-4">
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="<?php echo $row['image']; ?>"  width="380px" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $row["subject"] ?> </h5>
                                <h6 class="card-subtitle"> <?php echo $row["title"] ?> </h6>
                                <p class="card-text"><?php echo $row["message"] ?> </p>
                            </div>
                        </div>
                        <br>
                    </div>
                <?php
                }
                ?>

                <div class=" col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://darshan.ac.in/U01/Files/Post/1160---12-09-2022-02-20-36.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-text">08 Sep 2022</h6>
                            <p class="card-text">Final year Students of Diploma civil are visited at WTP & STP Rajkot.</p>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://darshan.ac.in/U01/Files/Post/1156---03-09-2022-08-09-01.jpeg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-title">29 Aug 2022</h6>
                            <p class="card-text">Industrial Visit for 3rd Semester Students</p>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://darshan.ac.in/U01/Files/Post/1155---31-08-2022-12-26-00.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-text">30 Aug 2022</h6>
                            <p class="card-text">3rd sem Students of Diploma civil are visited at AERCON INDIA, Paddhari</p>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://darshan.ac.in/U01/Files/Post/1157---03-09-2022-08-49-15.jpeg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-title">26 Aug 2022</h6>
                            <p class="card-text">BIS Standard Writing Competition</p>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://darshan.ac.in/U01/Files/Post/1154---27-08-2022-08-12-25.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-text">25 Aug 2022</h6>
                            <p class="card-text">Final year Students of Diploma civil are visited at RJ Concrete Plant, Rajkot.</p>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://darshan.ac.in/U01/Files/Post/1147---21-07-2022-09-25-23.jpeg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-text">08 Jul 2022</h6>
                            <p class="card-text">Industrial Visit at Falcon Pumps Pvt. Ltd. in Association with BIS Standard Club, Rajkot</p>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://darshan.ac.in/U01/Files/Post/1146---06-07-2022-11-50-27.jpeg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-text">04 Jul 2022</h6>
                            <p class="card-text">Industrial Visit at Aditi Toys Pvt. Ltd. organized for BBA & B.COM. Students</p>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://darshan.ac.in/U01/Files/Post/1144---04-07-2022-12-26-34.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-text">02 JUl 2022</h6>
                            <p class="card-text">Orientation of 'Competitive Exams Preparation Cell' organized for BBA & B.COM Students.</p>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://darshan.ac.in/U01/Files/Post/1152---22-08-2022-09-44-22.JPG" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">18 May 2022</h4>
                            <p class="card-text">Project Exhibition of 4th Sem students - 2022</p>
                        </div>
                    </div>
                    <br>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center m-3">
                <h2 style="color: #ffba00; font-size:40px;"> Our Testimonials </h2>
            </div>
            <div class="col-md-6">
                <p class="para">
                    Our association with the Marwadi University has been very fruitful. We have been able to pick out
                    some very capable and confident students for our company. We are very impressed by the hard work
                    that has been done on these students by the teachers. We would love to come back here for placements
                    again.
                </p>
            </div>
            <div class="col-md-6">
                <p class="para">
                    I have got the offer of 9 Lac per annum. Credit goes to Marwadi University. At Marwadi, the
                    atmosphere is full of motivation and innovation and faculties are enthusiastic and always ready to
                    help, that helps me think out of the box. I thank my parents; my department and placement team for
                    making my dream come true.
                </p>
            </div>
            <hr>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 style="color: #ffba00;  font-size:40px;"> Top Recruiters </h2>
            </div>
            <div class="col">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/01/1.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/02/17.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/02/capegemini.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/06/2-11.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/02/16.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/02/10-1.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2016/12/byju-logo.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2016/12/5-4.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/03/9-1.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/02/indian-navy.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/04/hffc.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/04/zomato.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/02/reliance-1.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/06/cognizant.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/04/coca-cola.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/04/swiggy.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/04/hdfc-bank.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/04/flipkart.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/04/nestle.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/04/wipro.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/05/tcs.png" class="img_margin">
                <img src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2019/05/adani-gas.png" class="img_margin">

            </div>
        </div>
    </div>

    <?php include('footer.html') ?>


</body>

</html>