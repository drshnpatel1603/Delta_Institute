<title>Library Services</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
    .clg {
        height: 543px;
        width: 100%;
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
        width: 609px;
        font-weight: 1000;
        text-align: center;
        padding: 16px 80px 16px 0px;
        color: white;
        margin: 0px 10px 10px 0px;
        z-index: 5;
    }

    .box {
        width: 24%;
        border-radius: 5px;
        margin: 3px 6px;
    }

    .box:hover {
        background-color: cadetblue;
    }

    .wid {
        width: 45%;
        border: 1px solid black;
        border-radius: 10px;
        padding: 15px 15px;
        margin: 5px;
    }

    .hii {
        text-decoration: none;
        color: black;
    }

    .hii:hover {
        color: white;
        border: none;
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
                <img class="clg img-fluid" src="https://www.themorgan.org/sites/default/files/slider-image/reading-room-1.jpg" alt="clg_image">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 placement-header">
                Library Services
            </div>
        </div>
    </div>

    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-2">
            <li class="breadcrumb-item">Home<a href="#"></a></li>
            <li class="breadcrumb-item active" aria-current="page">Life At Campus</li>
        </ol>
    </nav> -->

    <br>

    <div class="container">
        <div class="row">
            <div class="col">
                <h4><u> Library </u></h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <img src="https://www.darshan.ac.in/U01/Page/59---11-06-2021-10-09-57.jpg" class="img-fluid">
                <img src="https://www.darshan.ac.in/U01/Page/59---11-06-2021-10-10-11.jpg" class="img-fluid mt-3">
            </div>
            <div class="col-lg-6">
                <p> The Central Library of Darshan University is user-focused, innovative, and excellence-driven. The
                    Central Library spreads over to the first and second floors with an area of 1735 sq.m. It is
                    centrally air-conditioned with a well-furnished library and CCTV surveillance. It has specialized
                    collections of Books, Journals & other resources in Engineering and Technology, ranging from printed
                    books, e-books, back volumes, CD\DVDs and Kindle e-readers, etc. The Library implemented D-Lib
                    software (Library Software), which supports all housekeeping operations of the library. There is a
                    separate digital library having 24 computers running on the high-speed internet. The library system
                    and staff are meticulously focused on providing a comfortable, user-friendly environment to enables
                    learning and knowledge creation. </p>
                <p> Also, the library has a membership of the National Digital Library (NDL). More than 10 million
                    documents are available in NDL including e-books, journal articles, video lectures etc. Library LAN
                    has become a part of the campus wise network, which has made it possible for the academic community
                    of various departments to access information.</p>
                <p> The reading room of the library has a total seating capacity of 200 students at a time. The library
                    has over 28,000 volumes which are updated regularly by way of adding new collections in diverse
                    formats in the form of textbooks, reference books, reports, proceedings, abstracts & indexes,
                    encyclopedias, data books, standards (National & International) journals, Audio Visual Resources,
                    CDs, educational videos and thesis/reports.</p>
                <p> It has departmental libraries in all the departments, thus catering to the needs of Undergraduate,
                    Post Graduate students and faculty.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <button class="btn btn-outline-dark mx-2 mt-1 "><a href="#Section1" class="hii"> <i class="fa-solid fa-chart-simple"></i><b>
                            Collections</b></a></button>
                <button class="btn btn-outline-dark mx-2 mt-1"><a href="#Section2" class="hii"><i class="fa-solid fa-book-open"></i><b> Services
                        </b></a></button>
                <button class="btn btn-outline-dark mx-2 mt-1"><a href="#Section3" class="hii"><b><i class="fa-solid fa-align-right"></i> Organizational
                            Membership </b></a></button>
                <button class="btn btn-outline-dark mx-2 mt-1"><a href="#Section4" class="hii"><b><i class="fa-solid fa-user-group"></i> Library Staff
                        </b></a></button>
                <button class="btn btn-outline-dark mx-2 mt-1"><a href="#Section5" class="hii"><b><i class="fa-solid fa-chalkboard-user"></i> DIET
                            Library Membership </b></a></button>
            </div>

        </div>
        <hr>
    </div>


    <div class="container " id="Section1">
        <div class="row">
            <div class="col">
                <p> All Collections of the library can also be accessed through web OPAC at any terminal on the campus
                    network. The latest collection of English & Gujarati literature, self-help books, Gate exam book
                    etc. are continuously updated in the library. The library is also connected with DELNET for
                    interlibrary loan and document delivery services.</p>
                <p> The library has a well-developed book stack, reading room and digital library which makes studying a
                    unique and a lifetime experience.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">20000+</h4>
                    <p class=""> books</p>
                </center>
            </div>
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">115+</h4>
                    <p class=""> Madazin </p>
                </center>
            </div>
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">120+</h4>
                    <p class=""> Journals </p>
                </center>
            </div>
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">900+</h4>
                    <p class=""> Departmental Library Books</p>
                </center>
            </div>
            <!-- </div> -->

            <!-- <div class="row"> -->
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">14000+</h4>
                    <p class=""> E-Journals </p>
                </center>
            </div>
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">80000+</h4>
                    <p class=""> E-Books </p>
                </center>
            </div>
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">2000+</h4>
                    <p class=""> CD / DVDs </p>
                </center>
            </div>
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">10000+</h4>
                    <p class=""> Question Papers</p>
                </center>
            </div>
            <!-- </div> -->

            <!-- <div class="row"> -->
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">500+</h4>
                    <p class=""> Videos</p>
                </center>
            </div>
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">1200+</h4>
                    <p class=""> Hard Bound Journals </p>
                </center>
            </div>
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">1900+</h4>
                    <p class=""> Hard Bound Magazins </p>
                </center>
            </div>
            <div class="col-3 border border-dark box mt-4">
                <center>
                    <h4 class="mt-3">1500+</h4>
                    <p class="">Gate Exam Related Books</p>
                </center>
            </div>
        </div>
    </div>

    <hr>
    <div class="container " id="Section2">
        <div class="row">
            <div class="col">
                <ol>
                    <li> Circulation Services </li>
                    <li> Photocopy Service </li>
                    <li> Document Scan Service </li>
                    <li> Reference service / Referral Service </li>
                    <li> Current Awareness Service </li>
                    <li> Document Delivery Service </li>
                    <li> Resource Sharing </li>
                    <li> Magazine/Journal Content Service: Content Pages provided in hard copy and soft copy by e-mail
                        to registered users. </li>
                    <li>Amazon Kindle E-reader: Kindle device is issue for One Week to all Students and Staff of the
                        college. </li>
                    <li> Video Lecture Collection: Video lectures categories are…. TED talks, Let’s Talk English
                        speaking, Interview & Career, Motivational Speakers, Time Management, Health & Yoga, BBC,
                        National Geography, Scientific Movie and many more.(Updated regularly)</li>
                    <li> Book-Talk Activity (For Non-technical Book): Once in a month library organizes Book-Talk for
                        enhancement of reading among students and staff.</li>
                    <li> Book-Review Publication: Every month Book-Review of non-technical book is published in Our Diet
                        E-Newsletter.</li>
                    <li> Access and copy of CD/DVD</li>
                    <li>Online Access to E-resources</li>
                    <li>Newspapers Clipping Service </li>
                    <li>Back Dated Magazines Circulation</li>
                    <li>New Arrivals Display </li>
                    <li> Reading Room -Discussion room-Reference Section… Facility for Students & Staff. </li>
                    <li> Library service available on Facebook and by e-mail….free for all.
                        (It Includes Important G.K. News, Current Affairs materials, Technical News, list of important
                        Websites, etc.) </li>
                    <li> Reservation Facility </li>
                    <li> Overnight issue of Reference books </li>
                    <li> Library Orientation Program for New Students: Library orientation makes library users aware of
                        the library and the services it offers. Library orientation educates users regarding general use
                        of the library. </li>
                    <li> Latest News/Articles of Competitive Exam Related magazines send regularly every month to
                        Library Users by e-mail. </li>
                </ol>
            </div>
        </div>
    </div>

    <hr>

    <div class="container " id="Section3">
        <div class="row">
            <div class="col-3">
                <img src="https://www.darshan.ac.in/U01/Page/59---11-06-2021-10-28-01.png" class="img-fluid">
            </div>
            <div class="col-9">
                <h4> British Counsil Library - Ahmedabad</h4>
                <p> Darshan University is an institutional member of the British Council Library - Ahmedabad. The
                    library has over 20,000 books, DVDs, magazines and newspapers. You can browse through its full
                    collection online or you can visit the library from Tuesday to Sunday.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="https://www.darshan.ac.in/U01/Page/59---11-06-2021-10-28-06.jpg" class="img-fluid ">
            </div>
            <div class="col-9">
                <h4> DELNET</h4>
                <p> Darshan University is also a member of DELNET. DELNET has been established in 1988 by the Government
                    of India with the prime objective of promoting resource sharing among the libraries through the
                    development of a network of libraries. It aims to collect, store, and disseminate information
                    besides offering computerised services to users, coordinate efforts for suitable collection
                    development and also reduce unnecessary duplication wherever possible.</p>
            </div>
        </div>
    </div>

    <hr>

    <div class="container" id="Section4">
        <div class="row">
            <!-- <center> -->
            <div class="col-md-5 wid ">
                <center>
                    <img src="https://www.darshan.ac.in/U01/Page/59---11-06-2021-10-28-35.jpg" class="img-fluid img-rounded" height="174px" width="147px">
                    <h4> Dr. Alka Gohel </h4>
                    <p> Librarian </p>
                    <hr>
                    <div class="">
                        <i class=" fa fa-message"></i> : alka.gohel@darshan.ac.in
                    </div>
                    <div class="">
                        <i class="fa fa-phone"></i> : +91 - 97253 80777
                    </div>
                </center>
            </div>
            <!-- </center> -->

            <!-- <center> -->
            <div class="col-md-5 wid ">
                <center>
                    <img src="https://www.darshan.ac.in/U01/Page/59---11-06-2021-10-28-42.jpg" class="img-fluid img-rounded" height="174px" width="147px">
                    <h4>Dr. Nimesh Jotangia </h4>
                    <p> Librarian </p>
                    <hr>
                    <div class="">
                        <i class=" fa fa-message"></i>: nimesh.jotangia@darshan.ac.in

                    </div>
                    <div class="">
                        <i class="fa fa-phone"></i> : +91 - 98247 31510
                    </div>
                </center>
            </div>
        </div>
    </div>

    <hr>

    <div class="container " id="Section5">
        <div class="row">
            <div class="col-12">
                <i class="fa fa-bookmark"> </i> <b>&nbsp; DIET Library Membership is available for </b>
                <ol>
                    <li> Alumni Members
                        <ul type="circle">
                            <li> All Alumni of Darshan University, Rajkot can become members of the Central Library on
                                request.
                            </li>
                        </ul>
                    </li>
                    <li><b>Individual Membership for All </b>
                        <ul type="circle">
                            <li> Anyone can become a member of our institutional Library on a request submitted in the
                                prescribed application form along with the latest passport size photograph. Individual
                                Members will be issued a Membership Card which is mandatory for a library visit.
                            </li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="container target" id="div6"> -->
        <div class="row">
            <div class="col-12">
                <i class="fa fa-bookmark"> </i> <b>&nbsp; Services Offered </b>
                <p> Alumni and individual members can use the following services any time during library hours:</p>
                <ul>
                    <li> Reference and consultation</li>
                    <li> Borrowing of 2 books for 28 days, 1 magazine (from back issues) for 14 days and 1 bound volume
                        of magazines for 14 days.</li>
                    <li> Non-book materials (CD/DVD) access-copy in library</li>
                    <li> Internet access to electronic resources</li>
                </ul>
            </div>
        </div>
    </div>

    <br>

    <?php include('../index/footer.html') ?>

</body>

</html>