<?php

session_start();
if (!$_SESSION["admin"]) {
    header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<?php

if (isset($_POST['submit'])) {

    $sub = $_POST['subject'];
    $title = $_POST['title'];
    $message = $_POST['message'];


    // ***************************************** Student images upload code and save image/Student folder  ********************************************************** //

    $file = $_FILES['image'];

    $filename = $file['name'];
    $fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    // $exte = explode('.', $filename);
    // $filecheck = strtolower(end($exte));

    // $stored = array('png', 'jpg', 'jpeg');
    // if (in_array($filecheck, $stored)) {

    $image = '../Admin/image/News/' . $filename;
    move_uploaded_file($filetmp, $image);

    // }

    // ***************************************** Student images upload code and save image/Student folder  ********************************************************** //

    $insert = "INSERT INTO news (subject, title, image, message)  VALUES('$sub','$title','$image','$message')";

    if (mysqli_query($conn, $insert)) {
        echo "<script type='text/javascript'>alert('News & Update Upload Successfully ...');
        </script>";
        header("");
    } else {
        echo "<script type='text/javascript'>alert(' Opps! Not Upload ...');
        </script>";
        header("");
    }
}

?>

<?php

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $select = "SELECT * FROM news WHERE id = '$id' ";
    $delete = " DELETE FROM news WHERE id = '$id' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        mysqli_query($conn, $delete);
        echo "<script type='text/javascript'>alert(' News Delete successfully ...'); window.location.href='';  
					</script>";
    }
}

?>

<title> News & Update </title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<?php include('admin_sidebar.php') ?>

<style>
    input.form-control {
        height: 45px;
    }

    textarea.form-control {
        height: 200px;
    }
</style>

</head>

<body>

    <section class="abc">
        <div class="text"> News & Update </div>

        <div class="container">
            <div class="row">
                <div class="col-1"> </div>
                <div class="col-10 bg-warning p-3">
                    <div class="">
                        <input data-toggle="modal" data-target=".bd-example-modal-lg" type="submit" name="submit" class="btn  btn-dark" value="  Add News  ">
                    </div>

                    <div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-info text-white">
                                    <h4 class="modal-title text-center">Add News & Update</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row mt-3">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label> Subject :</label>
                                                    <input type="text" name="subject" class="form-control" placeholder="Subject Name" required>
                                                </div>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label> Title :</label>
                                                    <input type="text" name="title" class="form-control" placeholder="Title" required>
                                                </div>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label> Image :</label>
                                                    <input type="file" name="image" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="form-group h-25">
                                                    <label> Message :</label>
                                                    <textarea type="text" name="message" class="form-control" placeholder="Message & News" required> </textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <input class="btn btn-success" type="submit" name="submit" value="Done" />
                                            <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4 ">
            <div class="row">
                <center>
                    <div class="col-11">
                        <table class="table table-bordered table-striped color ">

                            <tr class="text-center" style="height: 60px;">
                                <th style="width: 100px ;"> Sr No. </th>
                                <th style="width: 200px ;"> Subject </th>
                                <th style="width: 200px ;"> Title </th>
                                <th style="width: 200px ;"> Image </th>
                                <th style="width: 400px ;"> Message </th>
                                <th style="width: 200px ;"> Action </th>
                            </tr>
                            <?php

                            $select = " SELECT * FROM news";
                            $result = mysqli_query($conn, $select);

                            $id = 1;
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                <th class="text-center"> <?php echo $id++ ?> </th>
                                    <td><?php echo $row["subject"] ?></td>
                                    <td><?php echo $row["title"] ?></td>
                                    <td align="center"> <img src="<?php echo $row['image']; ?>" height="160px" width="150px"> </td>
                                    <td><?php echo $row["message"] ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $row["id"] ?>" />
                                            <?php echo "<a class='btn btn-success' type='submit' name='save' href=update_news.php?id=" . $row['id'] . ">Edit</a> "
                                            ?>
                                            <input class="btn btn-danger mx-2" onclick="news()" type="submit" name="delete" value="Delete" />
                                        </form>
                                    </td>
                                </tr>
                            <?php }
                            ?>

                        </table>
                    </div>
                </center>
            </div>
        </div>

    </section>

    <script>
        function news() {
            var result = confirm(' Are you sure delete this news ? ');
            if (result == false) {
                event.preventDefault();
            }
        }
    </script>

</body>

</html>