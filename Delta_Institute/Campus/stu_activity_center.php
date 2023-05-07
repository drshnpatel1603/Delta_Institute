<title> Student_Activity_center </title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
    .clg {
        height: 489px;
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
        width: 609px;
        font-weight: 1000;
        text-align: center;
        padding: 16px 211px 16px 0px;
        color: white;
        margin: 0px 10px 10px 0px;
        z-index: 5;
    }

    .border1 {
        border-bottom: 2px solid black;
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
                <img class="clg img-fluid" src="https://www.marwadiuniversity.ac.in/wp-content/uploads/2017/03/about-sports-min.jpg" alt="clg_image" height="200px" width="1450px">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 placement-header">
                Student Activity
            </div>
        </div>
    </div>

    <div class="container">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb mx-2">
                <li class="breadcrumb-item">Home<a href="#"></a></li>
                <li class="breadcrumb-item active" aria-current="page">Life At Campus</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 border1">
                <h3>Student Activity Center (SAC)</h3>
            </div>
            <div class="col-12">
                <img src="https://www.darshan.ac.in/U01/Page/67---16-06-2021-03-38-27.png" class="img-fluid" width="1450px"><br>
                <p>University has a Students Activity Center (SAC) with 5 major clubs and associated satellite clubs
                    currently in place. Student’s creativity, leadership quality, add-on skills, civic virtues, etc. are
                    nurtured here through round-the-year activities and association with professional bodies.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 border1">
                <h3>Technical Club</h3>
            </div>
            <div class="col-12">
                <br>
                <p> Main objective of this club is to promote and encourage student’s participation in various technical
                    activities like developing project and working models, exploring new technologies, conducting
                    workshops and expert lectures, coaching for different competitive exams, participating as well as
                    organizing technical competitions, etc. Various satellite clubs currently active under this are:
                </p>
                <ul>
                    <li><b> ISTE Student's Chapter </b>
                        <p> Indian Society for Technical Education - New Delhi, is a professional organization working
                            in area of technical education. The major objective of ISTE is to assist and contribute to
                            the development of top quality professional engineers and technicians needed by the industry
                            through meaningful interactions among various technical institutions. Various activities are
                            conducted round the year by students under this chapter, the major being Frolic –
                            Institute’s annual technical festival organized in odd semesters every year.</p>
                    </li>
                    <li><b> Robotics Club </b>
                        <p> Robotics club provides platform to students across the disciplines to experiment and learn
                            principles and practices in engineering through fun activities and robot design. Club is
                            equipped with resources and currently offers three courses viz. Beginners’ course, Advance
                            course and Application design using Robotics. Students are also encouraged to participate in
                            various national and international competitions.</p>
                    </li>
                    <li><b> GATE study Club </b>
                        <p>Graduate Aptitude Test in Engineering (GATE) is an all India examination conducted jointly by
                            IISc. and IITs on behalf of MHRD, Govt. of India. GATE is used as screening exam for
                            admission to postgraduate programs, scholarships/assistantships during studies, recruitments
                            in PSUs, etc. Branch wise complete one year coaching program is designed for GATE aspirants
                            which starts from semester VI of engineering. Coaching is provided by faculties at the
                            institute as well as experts from outside.</p>
                    </li>
                    <li><b>Mobile and Wireless Technologies Club </b>
                        <p> Mobile and Wireless Technologies Club (MWTC) works in affiliation to MWTC at GTU. Various
                            workshops and expert lectures on mobile platforms, mobile and wireless technologies are
                            arranged.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-12 border1">
                <h3>Sports Club</h3>
            </div>
            <div class="col-12">
                <br>
                <p> Main objective of sports club is encourage all students at the Institute to participate in games and
                    sports activities of their choice. The club facilitates both indoor and outdoor sports and has many
                    active satellite clubs like Cricket club, Football club, Table tennis club, Badminton club, Chess
                    club, Rubik’s cube club, Carrom club etc. All clubs are equipped with required resources and
                    students regularly meet to play and practice.</p>
                <p> Sports club also organizes coaching of students in various sports. Coaching is provided by peers as
                    well as professionals. The club organizes Annual Sports Meet every year in even semesters. Students
                    are encouraged and supported to participate in various sports competitions at university, state and
                    national levels.</p>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-12 border1">
                <h3>Literature & Arts Club</h3>
            </div>
            <div class="col-12">
                <br>
                <p> Literature and Arts club supports all form of activities related to literature, fine arts and
                    performing arts. Satellite club related to literature and fine arts administers activities related
                    to painting, clay art, poetry, creative writing, elocutions, etc. Satellite club related to
                    performing arts covers activities on dance, drama and theater.</p>
                <p> The club provides platform where members meet regularly and share their creation with peers. Such
                    interactions not only nurture their talent but also polish it through constructive criticism and
                    discussions. The club also plans monthly theme based activities, annual exhibitions and stage
                    performances. The major event under this club is Institute’s Annual Cultural Festival – Udaan which
                    is organized in even semesters every year.</p>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-12 border1">
                <h3>Film & Music Club</h3>
            </div>
            <div class="col-12">
                <br>
                <p> Music Club is aimed to be a place where musically gifted students will come together and explore
                    their talents. Music Club at the Institute is furnished with musical instruments like keyboards,
                    tabala, guitar, drum set, etc. The club encourages amateur music enthusiast through regular training
                    and practice sessions by peers and professionals. The club organizes related events at the Institute
                    and participates in various university level competitions.</p>
                <p> Film club supports activities like photography, film screening, film review and various other
                    aspects related to film making like film writing, directing, set designing, cinematography, editing,
                    VFX creations, audio recording and processing, etc. Club organizes various expert lectures and
                    workshops by professionals.
                </p>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-12 border1">
                <h3>Community Activities Club</h3>
            </div>
            <div class="col-12">
                <br>
                <p> Community Activities Club represents intention of the Institute and its members to reach out beyond
                    its wall to contribute to society and to share what we have for the benefit of the community at
                    large. The club engages in several activities like blood donation camps, environment awareness
                    programs, swachhta abhiyan, smart city program, collection and distribution programs for needy
                    people, etc. The club also involves in activities to make advantage of technology reach to society.
                    Few good examples of this are Urja-mitra Van for educating society on energy management, mobile apps
                    related to BRTS/RMTS, engineering admissions, GUJCET preparations, etc.</p>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-12 border1">
                <h3>Coordinators</h3>
            </div>
            <div class="col-12">
                <table class="table table-hover">
                    <tr>
                        <th> Sr. </th>
                        <th> Cordinator Name </th>
                        <th> </th>
                    </tr>
                    <tr>
                        <td> 1. </td>
                        <td> Prof. K. C. Agola </td>
                        <td> Institute Coordinator</td>
                    </tr>
                    <tr>
                        <td> 2. </td>
                        <td> Prof. D. S. Dadhaniya </td>
                        <td> Sports Coordinator</td>
                    </tr>
                    <tr>
                        <td> 3. </td>
                        <td> Prof. N. R. Vadodariya </td>
                        <td> Department Coordinator - Computer Science & Engineering</td>
                    </tr>
                    <tr>
                        <td> 4. </td>
                        <td> Prof. R. M. Fataniya </td>
                        <td> Department Coordinator - Civil Engineering</td>
                    </tr>
                    <tr>
                        <td> 5. </td>
                        <td> Prof. H. K. Lakhani </td>
                        <td> Department Coordinator - Electrical Engineering</td>
                    </tr>
                    <tr>
                        <td> 6. </td>
                        <td>Prof. A. N. Tank </td>
                        <td> Department Coordinator - Mechanical Engineering</td>
                    </tr>

                </table>

            </div>
        </div>
    </div>
    <hr>

    <?php include('../index/footer.html') ?>

</body>

</html>