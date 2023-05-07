<title> Admission Office </title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
    .clg {
        width: 100%;
        height: 463px;
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
                <img class=" clg" src="https://3.files.edl.io/f114/19/08/07/185331-5f46e47b-35f8-4159-8e2c-9724771eaf89.jpg" alt="clg_image">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 placement-header">
                Admission Offices
            </div>
        </div>
    </div>

    <div aria-label="breadcrumb bor">
        <ol class="breadcrumb mx-2">
            <li class="breadcrumb-item">Home<a href="#"></a></li>
            <li class="breadcrumb-item">Admission<a href="#"></a></li>
            <li class="breadcrumb-item active" aria-current="page">Admission Offices</li>
        </ol>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <h4><i class="fa fa-university"></i> Rajkot Office</h4>

                <p class="mt-3"><b> Address </b></p>
                <p class="my-0"> Office No. 401, Lotus Arcade, </p>
                <p class="my-0"> 8-Royal Park, Near KKV Hall, </p>
                <p class="my-0"> 150 Feet Ring Road, </p>
                <p class="my-0"> Rajkot, Gujarat (INDIA) </p>

                <p class="mt-2"><b>Timings </b></p>
                <p class="my-0"> Monday to Saturday </p>
                <p class="my-0"> 05:00 PM - 08:00 PM (Evening) </p>
                <p class="my-0"> 09:00 AM - 01:00 PM (Morning) </p>

                <p class="mt-2"><b>Contact </b></p>
                <p class="my-0"> +91 - 94297 94513 </p>
                <p class="my-0"> +91 - 95127 70012 </p>
            </div>
            <div class="col-md-5">
                <h4><i class="fa fa-university"></i> Morbi Office </h4>

                <p class="mt-3"><b> Address </b></p>
                <p class="my-0"> F-1, Laxmi Plaza, </p>
                <p class="my-0"> Nr. Subh Restaurant, </p>
                <p class="my-0"> Opp. GIDC, </p>
                <p class="my-0"> Sanala Road, </p>
                <p class="my-0"> Morbi, Gujarat (INDIA) </p>

                <p class="mt-2"><b>Timings </b></p>
                <p class="my-0"> Monday to Saturday </p>
                <p class="my-0"> 05:00 PM - 08:00 PM (Evening) </p>
                <p class="my-0"> 09:00 AM - 01:00 PM (Morning) </p>

                <p class="mt-2"><b>Contact </b></p>
                <p class="my-0"> +91 - 97142 33355 </p>
            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-md-5">
                <h4><i class="fa fa-university"></i> Jamnagar Office</h4>

                <p class="mt-3"><b> Address </b></p>
                <p class="my-0"> 107, Cross Road Complex, </p>
                <p class="my-0"> Opp. DKV College, </p>
                <p class="my-0"> PN Marg, </p>
                <p class="my-0"> Jamnagar, Gujarat (INDIA) </p>

                <p class="mt-2"><b>Timings </b></p>
                <p class="my-0"> Monday to Saturday </p>
                <p class="my-0"> 05:00 PM - 08:00 PM (Evening) </p>
                <p class="my-0"> 09:00 AM - 01:00 PM (Morning) </p>

                <p class="mt-2"><b>Contact </b></p>
                <p class="my-0"> +91 - 99748 21691 </p>
            </div>
            <div class="col-md-5">
                <h4><i class="fa fa-university"></i> Gondal Office</h4>

                <p class="mt-3"><b> Address </b></p>
                <p class="my-0"> Near Patel Boarding, </p>
                <p class="my-0"> Opp. Akshar Mandir, </p>
                <p class="my-0"> Ashapura Main Road, </p>
                <p class="my-0"> Gondal, Gujarat (INDIA) </p>

                <p class="mt-2"><b>Timings </b></p>
                <p class="my-0"> Monday to Saturday </p>
                <p class="my-0"> 05:00 PM - 08:00 PM (Evening) </p>
                <p class="my-0"> 09:00 AM - 01:00 PM (Morning) </p>

                <p class="mt-2"><b>Contact </b></p>
                <p class="my-0"> +91 - 82001 60653 </p>
            </div>
        </div>
    </div>
    <br>

    <?php include('../index/footer.html') ?>

</body>

</html>