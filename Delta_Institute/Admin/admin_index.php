<?php

session_start();
if (!$_SESSION["admin"]) {
	header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<?php


if (isset($_POST['delete'])) {
	$id = $_POST['id'];

	$select = "SELECT * FROM student_info WHERE id = '$id' ";
	$delete = " DELETE FROM student_info WHERE id = '$id' ";

	$result = mysqli_query($conn, $select);
	if (mysqli_num_rows($result) > 0) {
		mysqli_query($conn, $delete);
		echo "<script type='text/javascript'>alert(' Delete successfully...'); window.location.href='';  
					</script>";
	}
}

?>

<title> Admin Dashboard</title>

<?php include('admin_sidebar.php') ?>

<section class="abc">
	<div class="text"> Pending Request </div>

	<div class="container mt-4">
		<div class="row">
			<center>
				<div class="col-11 color">
					<table class="table table-hover table-bordered table-striped color ">
						<tr class="text-center" style="height: 60px;">
							<th> Sr No. </th>
							<th> Name </th>
							<th> Profile </th>
							<th> Birth Date </th>
							<th> Branch </th>
							<th> Phone No. </th>
							<th> Request Date </th>
							<th> Action </th>
						</tr>

						<?php
						$select = " SELECT * FROM student_info WHERE action ='Deactivate' ORDER BY admission_date ASC";
						$result = mysqli_query($conn, $select);

						$id = 1;

						while ($row = mysqli_fetch_array($result)) { ?>
							<tr style="height: 40px;">
								<th class="text-center"> <?php echo $id++ ?> </th>
								<td><?php echo $row["last_name"] . " " . $row["student_name"] . " " . $row["father_name"] ?></td>
								<td align="center"> <img src="<?php echo $row['student_image']; ?>" height="70px" width="60px"> </td>
								<td><?php echo date("d-M-y", strtotime($row["birth_date"])); ?></td>
								<td><?php echo $row["branch"] ?></td>
								<td><?php echo $row["phone_number"] ?></td>
								<td><?php echo date("d-M-y", strtotime($row["admission_date"])); ?></td>
								<td>
									<form action="" method="post">
										<input type="hidden" name="id" value="<?php echo $row["id"] ?>" />
										<?php echo "<a class='btn btn-success'  onclick='approve()' type='submit' name='save' href=pending_request.php?id=" . $row['id'] . ">Approve</a> "
										?>
										<input class="btn btn-danger mx-2" onclick="student()" type="submit" name="delete" value="Delete" />
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
	function approve() {
		var result = confirm(' Add this student ... ');
		if (result == false) {
			event.preventDefault();
		}
	}
</script>

<script>
	function student() {
		var result = confirm(' Are you sure ? Not accept this student ... ');
		if (result == false) {
			event.preventDefault();
		}
	}
</script>

</body>

</html>