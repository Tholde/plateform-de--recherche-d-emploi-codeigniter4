<!DOCTYPE html>
<html lang="en">

<head>
	<title>RH | Edit Offer</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('admin/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('admin/vendor/fontawesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('admin/vendor/themify-icons/themify-icons.min.css') ?>">
	<link href="<?= base_url('admin/vendor/animate.css/animate.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/perfect-scrollbar/perfect-scrollbar.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/switchery/switchery.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/select2/select2.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('admin/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css') ?>" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="<?= base_url('admin/assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?= base_url('admin/assets/css/plugins.css') ?>">
	<link rel="stylesheet" href="<?= base_url('admin/assets/css/themes/theme-1.css') ?>" id="skin_color" />
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>

<body>
	<div id="app">
		<?php include('include/sidebar.php'); ?>
		<div class="app-content">

			<?php include('include/header.php'); ?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">RH | Edit Offer</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>RH </span>
								</li>
								<li class="active">
									<span>Edit Offer</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<h5 style="color: green; font-size:18px; ">
								</h5>
								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">Edit Offer</h5>
											</div>
											<div class="panel-body">
                                                <form role="form" action="<?= base_url('offerEdt') ?>" name="adddoc"
                                                    method="post" enctype="multipart/form-data"
                                                    onSubmit="return valid();">
                                                    <div class="form-group">
                                                        <label for="firstname">
                                                            Offer Title
                                                        </label>
                                                        <input type="text" name="title" class="form-control"
                                                            value="<?php echo $rhInfo['title']; ?>"
                                                            placeholder="Enter Title for your offer" required="true">
                                                    </div>

                                                    <div class="form-group">
														<label for="firstname">
                                                        RH Society
														</label>
														<input type="text" name="society" class="form-control"
                                                        value="<?php echo $rhInfo['society']; ?>"
															placeholder="Enter RH Society name" required="true">
													</div>
                                                    <div class="form-group">
                                                        <label for="address">
                                                            RH Address
                                                        </label>
                                                        <textarea name="description" class="form-control"
                                                        value="<?php echo $rhInfo['description']; ?>"
                                                            placeholder="Enter Description for your offer"
                                                            required="true"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fess">
                                                            Type de Contrat
                                                        </label>
                                                        <input type="text" name="typeContrat" class="form-control"
                                                        value="<?php echo $rhInfo['typeContrat']; ?>"
                                                            placeholder="Enter RH Phone Number" required="true">
                                                    </div>
                                                    <button type="submit" name="submit" id="submit"
                                                        class="btn btn-o btn-primary">
                                                        Submit
                                                    </button>
                                                </form>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="panel panel-white">
								</div>
							</div>
						</div>
					</div>

					<!-- end: BASIC EXAMPLE -->

					<!-- end: SELECT BOXES -->

				</div>
			</div>
		</div>
		<!-- start: FOOTER -->
		<?php include('include/footer.php'); ?>
		<!-- end: FOOTER -->

		<!-- start: SETTINGS -->
		<?php include('include/setting.php'); ?>

		<!-- end: SETTINGS -->
	</div>
	<!-- start: MAIN JAVASCRIPTS -->
	<script src="<?= base_url('admin/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/modernizr/modernizr.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/jquery-cookie/jquery.cookie.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/switchery/switchery.min.js') ?>"></script>
	<!-- end: MAIN JAVASCRIPTS -->
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="<?= base_url('admin/vendor/maskedinput/jquery.maskedinput.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/autosize/autosize.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/selectFx/classie.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/selectFx/selectFx.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/select2/select2.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
	<script src="<?= base_url('admin/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js') ?>"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<!-- start: CLIP-TWO JAVASCRIPTS -->
	<script src="<?= base_url('admin/assets/js/main') ?>"></script>
	<!-- start: JavaScript Event Handlers for this page -->
	<script src="<?= base_url('admin/assets/js/form-elements') ?>"></script>
	<script>
		jQuery(document).ready(function() {
			Main.init();
			FormElements.init();
		});
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>