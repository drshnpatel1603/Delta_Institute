<title> Placement Overview </title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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

    .blue {
        background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(81, 57, 240));
        border: 1px solid blue;
    }

    .purple {
        background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(242, 57, 226));
        border: 1px solid purple;
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
                <img class="clg img-fluid" src="../image/clg.jpg" alt="clg_image" height="200px" width="1450px">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 placement-header">
                Placement summary
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="stream mb-2 ">
                <button class="btn btn-dark mx-2">2019</button>
                <button class="btn btn-dark mx-2">2020</button>
                <button class="btn btn-dark mx-2">2021</button>
            </div>
            <hr style="position:relative; bottom: 8px;">
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

    <div class="container mt-3">
        <table class="table table-hover table-bordered  table-striped ">
            <tbody>

                <thead class="thead-dark">
                    <td>#</td>
                    <td>Branch</td>
                    <td>Registered Students</td>
                    <td>Placed Students</td>
                    <td>Placed %</td>
                    <td>Companies Visited</td>
                    <td>Highest Package</td>
                </thead>

                <tr>
                    <td>1</td>
                    <td>BCA</td>
                    <td>201</td>
                    <td>144</td>
                    <td>71.64</td>
                    <td>38</td>
                    <td>20.00</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>BBA</td>
                    <td>85</td>
                    <td>45</td>
                    <td>52.94</td>
                    <td>15</td>
                    <td>5.00</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>BCOM</td>
                    <td>112</td>
                    <td>40</td>
                    <td>35.71</td>
                    <td>15</td>
                    <td>3.80</td>
                </tr>
            </tbody>

        </table>
    </div>
    <br>

    <?php include('../index/footer.html') ?>

</body>

</html>