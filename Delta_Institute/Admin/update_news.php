<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<?php
$id = $_GET['id'];


if (isset($_POST['edit'])) {

    // $id = $_POST['id'];
    // $title = $_POST['title'];
    $message = $_POST['message'];

    $update = " UPDATE news SET message = '$message' WHERE id = '$id' ";


    if (mysqli_query($conn, $update)) {
        echo "<script type='text/javascript'>alert('update Successfully ...');window.location.href='news_message.php';
        </script>;";
    }
}

?>

<title> Update-News </title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<style>
    body {
        background-color: #E4E9F7;
    }

    input.form-control {
        height: 45px;
    }

    textarea.form-control {
        height: 200px;
    }
</style>
</head>

<body>
    <?php

    $select = " SELECT * FROM news WHERE id = '$id'";
    $result = mysqli_query($conn, $select);

    while ($row = mysqli_fetch_array($result)) { ?>

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h4 class="modal-title text-center"> Update News </h4>
                </div>
                <div class="modal-body">

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mt-3">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                    <label> Subject :</label>
                                    <input type="text" name="title" class="form-control" placeholder="<?php echo $row["subject"] ?>" required readonly>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <label> Title :</label>
                                    <input type="text" name="title" class="form-control" placeholder="<?php echo $row["title"] ?>" required readonly>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <label> Image :</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="">
                                <div class="form-group h-25">
                                    <label> Message :</label>
                                    <textarea name="message" class="form-control" placeholder="<?php echo $row["message"] ?>" required></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input class="btn btn-success" onclick="done()" type="submit" name="edit" value="Done">
                            <?php echo "<a class='btn btn-secondary' type='submit' name='save' href=news_message.php>Close</a> "
                            ?>
                        </div>
                    </form>

                <?php }

                ?>
                </div>
            </div>
        </div>

        <script>
            function done() {
                var result = confirm(' Are you confirm update news ? ');
                if (result == false) {
                    event.preventDefault();
                }
            }
        </script>

</body>