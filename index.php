<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Template Website</title>

	<!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="vendor/css/style.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>
			<?php
			$themes = [
				[
					"name_theme"   => "Vitality-v1.3.6",
					"link_zip"     => "store/vitality-v1.3.6/vitality-v1.3.6.zip",
					"link_preview" => "store/vitality-v1.3.6",
					"link_img"     => "store/00_images_preview/2015-12-25 10_09_21-Vitality.png",
					"price"        => "16$",
				],

				[
					"name_theme"   => "Webapplayers.com",
					"link_zip"     => "store/webapplayers.com/webapplayers.com.zip",
					"link_preview" => "store/webapplayers.com",
					"link_img"     => "store/00_images_preview/2015-12-25 10_09_37-INSPINIA _ Dashboard.png",
					"price"        => "20$",
				],

				[
					"name_theme"   => "Templatevideo",
					"link_zip"     => "store/templatevideo/templatevideo.zip",
					"link_preview" => "store/templatevideo",
					"link_img"     => "store/00_images_preview/2015-12-25 10_09_52-Video 1.png",
					"price"        => "10$",
				],

				[
					"name_theme"   => "Templatevideo2",
					"link_zip"     => "store/templatevideo2/templatevideo2.zip",
					"link_preview" => "store/templatevideo2",
					"link_img"     => "store/00_images_preview/2015-12-25 10_09_10-Video Cafe _ The Best Media Uploader.png",
					"price"        => "31$",
				],

				[
					"name_theme"   => "Porto 4.4.0",
					"link_zip"     => "store/porto/porto.zip",
					"link_preview" => "store/porto",
					"link_img"     => "store/00_images_preview/2015-12-25 11_47_17-Porto - Responsive HTML5 Template 4.4.0.png",
					"price"        => "40$",
				],

				[
					"name_theme"   => "Chelsea",
					"link_zip"     => "store/chelsea/chelsea.zip",
					"link_preview" => "store/chelsea",
					"link_img"     => "store/00_images_preview/2015-12-25 12_20_21-Chelsea - Multi-Purpose Business Bootstrap HTML5 Template.png",
					"price"        => "33$",
				],

				[
					"name_theme"   => "Alliance-html",
					"link_zip"     => "store/alliance-html/alliance-html.zip",
					"link_preview" => "store/alliance-html",
					"link_img"     => "store/00_images_preview/2015-12-25 13_11_52-Alliance - A Responsive Bootstrap 3 Admin Dashboard Template.png",
					"price"        => "23$",
				],

				[
					"name_theme"   => "Smartstart",
					"link_zip"     => "store/smartstart/smartstart.zip",
					"link_preview" => "store/smartstart",
					"link_img"     => "store/00_images_preview/2015-12-28 08_40_41.png",
					"price"        => "23$",
				],

			];

			?>
			<div class="container">
				<h1 class="text-center">Sharing Template Website</h1>

				<div class="row">
					<?php foreach ($themes as $key => $value) {
						?>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<div class="">
								<a target="_blank" href="<?= $value["link_preview"]; ?>" class="thumbnail">
									<img src="<?= $value["link_img"]; ?>">
								</a>
								<h4><?= $value["name_theme"]; ?></h4>
								<?= ($value["price"]?"Price: ".$value["price"]:""); ?>
							</div>
						</div>
						<?php
					} ?>
				</div>

				<h2><i class="fa fa-download"></i> Link download</h2>
				<div class="list-group">
					<?php foreach ($themes as $key => $value) {
						?>
						<a class="list-group-item" target="_blank" href="<?= $value["link_zip"]; ?>"><i class="fa fa-thumbs-up"></i> <?= $value["name_theme"]; ?></a>
						<?php
					} ?>
				</div>
			</div>

			<footer>
				<div class="footer" id="footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
								<h3> Find us at</h3>
								<ul class="social">
									<li> <a href="http://fb.com/vihoangson"> <i class=" fa fa-facebook"></i> </a></li>
									<li> <a href="http://fb.com/vihoangson"> <i class="fa fa-twitter"></i> </a></li>
									<li> <a href="http://fb.com/vihoangson"> <i class="fa fa-google-plus"></i></a> </li>
								</ul>
							</div>
						</div>
						<!--/.row--> 
					</div>
					<!--/.container--> 
				</div>
				<!--/.footer-->

				<div class="footer-bottom">
					<div class="container">
						<p class="pull-left"> Copyright © Santo. All right reserved. </p>
					</div>
				</div>
				<!--/.footer-bottom--> 
			</footer>
			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		</body>
		</html>
