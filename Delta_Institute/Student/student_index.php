<?php

session_start();
if (!$_SESSION["name"]) {
	header('location:../home.html');
}
require_once "../assets/connection/config.php";

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<title> Student Dashboard </title>
<style>
	.t1 {
		width: 160px;
		height: 59px;
	}

	.t2 {
		width: 450px;
		height: 59px;
	}

	.row {
		border: 1px solid black;
		margin: 22px;
		box-shadow: 5px 5px 5px #555555;
		box-shadow: -5px -5px 19px #555555;

	}
</style>

<?php include('student_sidebar.php') ?>

<section class="home">
	<div class="text"> Hii <?php echo $_SESSION['name'] ?>... </div>
	<!-- <div class=""> -->


	<?php
	$info = $_SESSION['name'];
	$select = " SELECT * FROM student_info WHERE student_name ='$info' ";

	$result = mysqli_query($conn, $select);
	if ($row = mysqli_fetch_array($result)) {
	?>
		<div class="container-md mb-5 color w-75">
			<div class="row ">
				<div class="col-12 p-3">
					<h3> <i class="fa fa-thin fa-user mt-2"></i> &nbsp; Personal Details </h3>
					<hr>
				</div>
				<div class="col-12">
					<table class="color">
						<tr>
							<td class="t1"> Full Name :</td>
							<td class="t2"><?php echo $row['last_name'] . " " . $row['student_name'] . " " . $row['father_name'] ?></td>
							<td class="t1"> Profile :</td>
							<td class="t2 " rowspan="2" valign="top"> <img src="<?php echo $row['student_image']; ?>" height="120px" width="120px"> </td>
						</tr>
						<tr>
							<td class="t1"> Date of Birth : </td>
							<td class="t2"><?php echo date("d-M-y", strtotime($row["birth_date"])); ?> </td>
						</tr>
						<tr>
							<td class="t1"> E-mail :</td>
							<td class="t2"> <?php echo $row['email'] ?> </td>
							<td class="t1"> Mobile Number :</td>
							<td class="t2"> <?php echo $row['phone_number'] ?> </td>
						</tr>
						<tr>
							<td class="t1"> Gender : </td>
							<td class="t2"> <?php echo $row['gender'] ?> </td>
							<td class="t1"> Category :</td>
							<td class="t2"> <?php echo $row['category'] ?> </td>

						</tr>
					</table>

				</div>
			</div>
		</div>

		<div class="container-md mb-5 color w-75">
			<div class="row">
				<div class="col-12 p-3">
					<h3> <i class="fa fa-solid fa-building-columns"></i> &nbsp; Academic Details </h3>
					<hr>
				</div>
				<div class="col-12">
					<table class="color">
						<tr>
							<td class="t1"> College Name :</td>
							<td class="t2"> Delta University </td>
							<td class="t1"> Department :</td>
							<td class="t2"> <?php echo $row['branch'] ?> </td>
						</tr>
						<tr>
							<td class="t1"> Semester :</td>
							<td class="t2"> 1 </td>
							<td class="t1"> Roll No. :</td>
							<td class="t2"> 4 </td>
						</tr>
						<tr>
							<td class="t1"> Enrollment No. :</td>
							<td class="t2"> <?php echo $row['enrollment'] ?> </td>
							<td class="t1"> Admission Year : </td>
							<td class="t2"> 20<?php echo date("y", strtotime($row["admission_date"])); ?> </td>
						</tr>
						<tr>
							<td class="t1"> Admission Type :</td>
							<td class="t2"> </td>
							<td class="t1"> </td>
							<td class="t2"> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="container-md color w-75">
			<div class="row">
				<div class="col-12 p-3 ">
					<h3><i class="fa fa-phone"></i> &nbsp; Contact Details </h3>
					<hr>
				</div>
				<div class="col-12">
					<table class="color">
						<tr>
							<td class="t1"> Father Mobile No. : </td>
							<td class="t2"> <?php echo $row['father_phone_no'] ?> </td>
							<td class="t1"> Father Occupation :</td>
							<td class="t2"> <?php echo $row['father_occupation'] ?> </td>
						</tr>
						<tr>
							<td class="t1"> Address Line-1 :</td>
							<td class="t2"> <?php echo $row['address'] ?> </td>
							<td class="t1"> Adress Line-2 : </td>
							<td class="t2"> <?php echo $row['address'] ?> </td>
						</tr>
						<tr>
							<td class="t1"> City :</td>
							<td class="t2"> <?php echo $row['city'] ?> </td>
							<td class="t1"> Pin code :</td>
							<td class="t2"> <?php echo $row['pincode'] ?> </td>
						</tr>
						<tr>
							<td class="t1"> State :</td>
							<td class="t2"> Gujarat </td>
							<td class="t1"> Country :</td>
							<td class="t2"> India </td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<br>

	<?php
	} ?>

	<!-- </div> -->

</section>

</body>

</html>