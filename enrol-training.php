 <?php session_start() ?>
 <?php include "db.php"; ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="utf-8">
 	<meta content="IE=edge" http-equiv="X-UA-Compatible">
 	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
 	<meta content="" name="description">
 	<meta content="" name="author">
 	<link href="img/logo/logo.png" rel="icon">
 	<title>189074054 - Enrol Training</title>
 	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Select2 -->
 	<link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap DatePicker -->
 	<link href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet"><!-- Bootstrap Touchspin -->
 	<link href="vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet"><!-- ClockPicker -->
 	<link href="vendor/clock-picker/clockpicker.css" rel="stylesheet"><!-- RuangAdmin CSS -->
 	<link href="css/ruang-admin.min.css" rel="stylesheet">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 </head>

 <body id="page-top">
 	<div id="wrapper">
 		<?php include "bars/staff-sidebar.php"; ?>
 		<!-- Sidebar -->
 		<div class="d-flex flex-column" id="content-wrapper">
 			<div id="content">
 				<!-- TopBar -->
 				<?php include "bars/topbar.php"; ?>
 				<!-- Topbar -->
 				<!-- Container Fluid-->
 				<div class="container-fluid" id="container-wrapper">
 					<div class="d-sm-flex align-items-center justify-content-between mb-4">
 						<h1 class="h3 mb-0 text-gray-800">Enrol Training</h1>
 						<ol class="breadcrumb">
 							<li class="breadcrumb-item">
 								<a href="#">Trainings</a>
 							</li>
 							<li class="breadcrumb-item active">Enrol Training</li>
 						</ol>
 					</div>
 					<div class="row">
 						<div class="col-lg-12">
 							<!-- Add Training -->
 							<form method="post">
 								<div class="card mb-4">
 									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
 										<h6 class="m-0 font-weight-bold text-primary">Enrol Training</h6>
 									</div>

 									<?php

										if (isset($_GET["check"])) {
											$id = $$_GET["check"];
											$sql = $pdo->prepare("SELECT * FROM training WHERE id=$id");
											$sql->execute();
											while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
												$name = $row['name'];
												$training_date = $row['training_date'];
												$training_time = $row['training_time'];
												$no_of_participant = $row['no_of_participant'];
											}
										}
										if (isset($_POST['enrol'])) {
											$name = $_POST['name'];
											$training_date = $_POST['training_date'];
											$training_time = $_POST['training_time'];
											$no_of_participant = $_POST['no_of_participant'];

											$insert = "INSERT INTO enrol(name,training_date,training_time,participant) VALUE(:name,:training_date,training_time:no_of_participant)";
											$insert = $pdo->prepare($insert);
											$insert->bindValue(':name', $name);
											$insert->bindValue(':training_date', $training_date);
											$insert->bindValue(':training_time', $training_time);
											$insert->bindValue(':no_of_participant', $no_of_participant);
											$insert->execute();
										}
										?>

 									<div class="card-body">
 										<div class="row">

 											<div class="col-md-6">
 												<label for="">Name</label>
 												<select class="form-control" id="check" name="name" value="">
 													<?php
														$query = $pdo->prepare("SELECT * FROM training");
														$query->execute();
														while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
															$cid = $row['id'];
															$name = $row['name'];
														?>
 														<option value="<?php echo $cid ?> "><?php echo $name ?></option>
 													<?php } ?>
 												</select>

 											</div>
 											<div class="col-md-6">
 												<label for="">Date</label>
 												<input aria-describedby="" class="form-control" id="" placeholder="Date" type="date" name='training_date' value="<?php echo $training_date; ?>" readonly="readonly">
 											</div>
 										</div><br>

 										<div class="row">
 											<div class="col-md-6">
 												<label for="">Time</label>
 												<input aria-describedby="" class="form-control" id="" placeholder="Time" type="time" name='training_time' value="<?php $training_time; ?>" readonly="readonly">
 											</div>
 											<div class="col-md-6">
 												<label for="">No. of Participants</label>
 												<input aria-describedby="" class="form-control" id="" placeholder="Max. Participants" name='no_of_participant' value="<?php echo $no_of_participant; ?>" type="text" readonly="readonly">
 											</div>

 										</div><br>
 										<button type="submit" name="enrol" class="btn btn-primary">Enrol Training</button>
 									</div>
 								</div>
 							</form>
 						</div>
 					</div>
 					<!--Row-->

 				</div>
 				<!---Container Fluid-->
 			</div><!-- Footer -->
 			<?php include "bars/footer.php"; ?>
 			<!-- Footer -->
 		</div>
 	</div><!-- Scroll to top -->
 	<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
 	<script src="vendor/jquery/jquery.min.js">
 	</script>
 	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js">
 	</script>
 	<script src="vendor/jquery-easing/jquery.easing.min.js">
 	</script> <!-- Select2 -->

 	<script src="vendor/select2/dist/js/select2.min.js">
 	</script> <!-- Bootstrap Datepicker -->

 	<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js">
 	</script> <!-- Bootstrap Touchspin -->

 	<script src="vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js">
 	</script> <!-- ClockPicker -->

 	<script src="vendor/clock-picker/clockpicker.js">
 	</script> <!-- RuangAdmin Javascript -->

 	<script src="js/ruang-admin.min.js">
 	</script> <!-- Javascript for this page -->

 	<script>
 		$(document).ready(function() {

 			$('#check').on('change', (function() {
 				var check = $(this).val();
 				console.log($.get);
 				$.ajax({
 					url: "http://localhost/zojatech/enrol-training.php?check=" + check
 				})
 			}))


 			$('.select2-single').select2();

 			// Select2 Single  with Placeholder
 			$('.select2-single-placeholder').select2({
 				placeholder: "Select a Province",
 				allowClear: true
 			});

 			// Select2 Multiple
 			$('.select2-multiple').select2();

 			// Bootstrap Date Picker
 			$('#simple-date1 .input-group.date').datepicker({
 				format: 'dd/mm/yyyy',
 				todayBtn: 'linked',
 				todayHighlight: true,
 				autoclose: true,
 			});

 			$('#simple-date2 .input-group.date').datepicker({
 				startView: 1,
 				format: 'dd/mm/yyyy',
 				autoclose: true,
 				todayHighlight: true,
 				todayBtn: 'linked',
 			});

 			$('#simple-date3 .input-group.date').datepicker({
 				startView: 2,
 				format: 'dd/mm/yyyy',
 				autoclose: true,
 				todayHighlight: true,
 				todayBtn: 'linked',
 			});

 			$('#simple-date4 .input-daterange').datepicker({
 				format: 'dd/mm/yyyy',
 				autoclose: true,
 				todayHighlight: true,
 				todayBtn: 'linked',
 			});

 			// TouchSpin

 			$('#touchSpin1').TouchSpin({
 				min: 0,
 				max: 100,
 				boostat: 5,
 				maxboostedstep: 10,
 				initval: 0
 			});

 			$('#touchSpin2').TouchSpin({
 				min: 0,
 				max: 100,
 				decimals: 2,
 				step: 0.1,
 				postfix: '%',
 				initval: 0,
 				boostat: 5,
 				maxboostedstep: 10
 			});

 			$('#touchSpin3').TouchSpin({
 				min: 0,
 				max: 100,
 				initval: 0,
 				boostat: 5,
 				maxboostedstep: 10,
 				verticalbuttons: true,
 			});

 			$('#clockPicker1').clockpicker({
 				donetext: 'Done'
 			});

 			$('#clockPicker2').clockpicker({
 				autoclose: true
 			});

 			let input = $('#clockPicker3').clockpicker({
 				autoclose: true,
 				'default': 'now',
 				placement: 'top',
 				align: 'left',
 			});

 			$('#check-minutes').click(function(e) {
 				e.stopPropagation();
 				input.clockpicker('show').clockpicker('toggleView', 'minutes');
 			});

 		});
 	</script>
 </body>

 </html>