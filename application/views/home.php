	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Medical</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url("assets_home/") ?>css/linearicons.css">=
			<link rel="stylesheet" href="<?php echo base_url("assets_home/") ?>css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url("assets_home/") ?>css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url("assets_home/") ?>css/nice-select.css">
			<link rel="stylesheet" href="<?php echo base_url("assets_home/") ?>https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="<?php echo base_url("assets_home/") ?>css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url("assets_home/") ?>css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="<?php echo base_url("assets/") ?>images/icon/logo.png" alt="" width="150px"></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="">
									<a href="#home">Home</a>
									<a href="#deskripsi">Deskrispsi</a>
									<a href="#keluhan">List Keluhan</a>
									<a href="#tambahkeluhan">Tambah Keluhan</a>
									<?php if ($this->session->userdata("logged_in_user") == null): ?>
										<a href="<?php echo base_url("Login") ?>">Login</a>
										<?php else: ?>
											<a href="<?php echo base_url("Login/logout") ?>">Logout</a>
										<?php endif ?>
										<?php if ($this->session->userdata("logged_in") != null): ?>
											<a href="<?php echo base_url("Admin/Dashboard") ?>">Dashboard</a>
										<?php endif ?>
									</nav>
									<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<!-- End Header Area -->

				<!-- start banner Area -->
				<section class="banner-area relative" id="home">
					<div class="container">
						<div class="row fullscreen align-items-center justify-content-center">
							<div class="banner-content col-lg-6 col-md-12" style="padding-top:20px ">
								<h1 class="text-uppercase">
									Komplen Untuk<br>
									Polinema lebih baik
								</h1>
								<p>
									Tulis komplain dan saranmu
								</p>
								<button class="primary-btn2 mt-20 text-uppercase ">Get Started<span class="lnr lnr-arrow-right"></span></button>
							</div>
							<div class="col-lg-6 d-flex align-self-end img-right">
								<img class="img-fluid" src="<?php echo base_url("assets_home/") ?>img/logo.png" alt="">
							</div>
						</div>
					</div>
				</section>
				<!-- End banner Area -->

				<!-- Start feature Area -->
				<section class="consultans-area section-gap" id="deskripsi">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-md-8 pb-80 header-text">
								<h1>Deskripsi</h1>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
								</p>
							</div>
						</div>
					</div>
				</section>
				<!-- End feature Area -->


				<!-- Start about Area -->
				<section class="about-area" id="tambahkeluhan">
					<div class="container-fluid">
						<div class="row d-flex justify-content-end align-items-center">
							<div class="col-lg-6 col-md-12 about-left no-padding">
								<img class="img-fluid" src="<?php echo base_url("assets_home/") ?>img/as.png" alt="" style="height: 750px;">
							</div>
							<div class="col-lg-6 col-md-12 about-right no-padding">
								<h1>Masukan <br> Komplain & Saran</h1>
								<?php if ($this->session->userdata('logged_in_user')): ?>
									<form class="booking-form" action="<?php echo base_url("Home/keluhan") ?>" method="post">
										<div class="row">
											<div class="col-lg-12 d-flex flex-column">
												<input name="judul" placeholder="Judul" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul'" class="form-control mt-20" required="" type="text" required>
											</div>
											<div class="col-lg-6 d-flex flex-column">
												<select name="fk_lingkup_keluhan" id="" class="form-control mt-20">
													<?php foreach ($this->db->get("lingkup_keluhan")->result() as $value): ?>
													<option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-lg-6 d-flex flex-column">
											<select name="fk_unit_kerja" id="" class="form-control mt-20">
												<?php foreach ($this->db->get("unit_kerja")->result() as $value): ?>
												<option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="col-lg-12 flex-column">
										<textarea class="form-control mt-20" name="keluhan" placeholder="Keluhan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Keluhan'" required=""></textarea>
									</div>
									<div class="col-lg-12 flex-column">
										<textarea class="form-control mt-20" name="solusi" placeholder="Solusi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Solusi'" required=""></textarea>
									</div>
									<div class="col-lg-12 d-flex justify-content-end send-btn">
										<input class="submit-btn primary-btn mt-20 text-uppercase" type="submit" value="Keluhkan">
									</div>

									<div class="alert-msg"></div>
								</div>
							</form>
							<?php else: ?>	
								<a href="<?php echo base_url("Login") ?>" class="submit-btn primary-btn mt-20 text-uppercase">Login Dahulu</a>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End about Area -->

		<!-- Start fact Area -->
		<section class="facts-area pt-100 pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 single-fact">
						<h2 class="counter"><?php echo $this->db->get("keluhan")->num_rows(); ?></h2>
						<p class="text-uppercase">Komplain / Saran Masuk</p>
					</div>
					<div class="col-lg-3 col-md-6 single-fact">
						<h2 class="counter"><?php echo $this->db->group_by("fk_keluhan")->get("respon")->num_rows(); ?></h2>
						<p class="text-uppercase">Komplain / Saran Terjawab</p>
					</div>
					<div class="col-lg-3 col-md-6 single-fact">
						<h2 class="counter"><?php echo $this->db->group_by("fk_mahasiswa")->get("keluhan")->num_rows(); ?></h2>
						<p class="text-uppercase">Jumlah Mahasiswa yang melakukan Keluhan</p>
					</div>
					<div class="col-lg-3 col-md-6 single-fact">
						<h2 class="counter"><?php echo $this->db->get("mahasiswa")->num_rows(); ?></h2>
						<p class="text-uppercase">Jumlah Mahasiswa</p>
					</div>
				</div>
			</div>
		</section>
		<!-- end fact Area -->

		<!-- Start blog Area -->
		<?php if ($this->session->userdata("logged_in_user") != null): ?>
			<section class="blog-area section-gap" id="keluhan">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 pb-30 header-text">
						<h1>Keluhan</h1>

					</div>
				</div>
				<div class="row">
					<div class="col-md-8 mx-auto">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Kode</th>
									<th>Tanggal</th>
									<th>Judul</th>
									<th>Unit Kerja</th>
									<th>Lingkup Kerja</th>
									<th>Balasan</th>
								</tr>
							</thead>
							<tbody>
								<?php $notification = 0; ?>
								<?php foreach ($keluhan as $value): ?>
									<?php if($value->is_readed == 0){ $notification++;} ?>
									<tr>
										<td><?php echo $value->kode ?></td>
										<td><?php echo date("d-m-Y",strtotime($value->tanggal)) ?></td>
										<td><?php echo $value->judul ?></td>
										<td><?php echo $value->unit_kerja ?></td>
										<td><?php echo $value->lingkup_keluhan ?></td>
										<td>
											<button type="button" class="btn <?php echo ($value->is_readed == 1 ? "btn-secondary" : "btn-primary") ?> btn-sm" data-toggle="modal" data-target="#modal" onclick="open_respon('<?php echo $value->id ?>')">
												Respon
											</button>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<script>
							var open_respon = (id) => {
								$.ajax({
									url: "<?php echo base_url('Home/modal_respon/') ?>"+id,
									data: null,
									success: function(data)
									{
										$('#modal-content').html(data);
									}
								});
							}
						</script>
						<!-- Modal -->
						<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content" id="modal-content">
									
								</div>
							</div>
						</div>
						<?php if ($notification != 0): ?>
							<style>
							.notification{
								position: fixed;
								right: 20px;
								top: 120px;
							}
						</style>
						<div class="notification">
							<a href="#keluhan" class="btn btn-primary">
								Notification <span class="badge badge-light"><?php echo $notification ?></span>
								<span class="sr-only">unread messages</span>
							</a>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>		
	</section>
		<?php endif ?>
	<!-- end blog Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2  col-md-6">
					<div class="single-footer-widget">
						<h6>Top Products</h6>
						<ul class="footer-nav">
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Contact Us</h6>
						<p>
							56/8, bir uttam qazi nuruzzaman road, west panthapath, kalabagan, Dhanmondi, Dhaka - 1205
						</p>
						<h3>012-6532-568-9746</h3>
						<h3>012-6532-568-97468</h3>
					</div>
				</div>
				<div class="col-lg-6  col-md-12">
					<div class="single-footer-widget newsletter">
						<h6>Newsletter</h6>
						<p>You can trust us. we only send promo offers, not a single spam.</p>
						<div id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

								<div class="form-group row" style="width: 100%">
									<div class="col-lg-8 col-md-12">
										<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
									</div>

									<div class="col-lg-4 col-md-12">
										<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
									</div>
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="<?php echo base_url("assets_home/") ?>js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="<?php echo base_url("assets_home/") ?>js/vendor/bootstrap.min.js"></script>
	<script src="<?php echo base_url("assets_home/") ?>js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url("assets_home/") ?>js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url("assets_home/") ?>js/jquery.sticky.js"></script>
	<script src="<?php echo base_url("assets_home/") ?>js/parallax.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="<?php echo base_url("assets_home/") ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url("assets_home/") ?>js/waypoints.min.js"></script>
	<script src="<?php echo base_url("assets_home/") ?>js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url("assets_home/") ?>js/main.js"></script>
</body>
</html>
