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

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
			<style>
				.thumbnail {
					height: 300px;
					overflow: auto;
					display: table-cell;
					vertical-align: middle;
				}
				.thumbnail img{
					max-height: 290px;
				}


				/* sdfasdf */

				.full {
				    width: 100%;	
				}
				.gap {
					height: 30px;
					width: 100%;
					clear: both;
					display: block;
				}
				.footer {
					background: #EDEFF1;
					height: auto;
					padding-bottom: 30px;
					position: relative;
					width: 100%;
					border-bottom: 1px solid #CCCCCC;
					border-top: 1px solid #DDDDDD;
				}
				.footer p {
					margin: 0;
				}
				.footer img {
					max-width: 100%;
				}
				.footer h3 {
					border-bottom: 1px solid #BAC1C8;
					color: #54697E;
					font-size: 18px;
					font-weight: 600;
					line-height: 27px;
					padding: 40px 0 10px;
					text-transform: uppercase;
				}
				.footer ul {
					font-size: 13px;
					list-style-type: none;
					margin-left: 0;
					padding-left: 0;
					margin-top: 15px;
					color: #7F8C8D;
				}
				.footer ul li a {
					padding: 0 0 5px 0;
					display: block;
				}
				.footer a {
					color: #78828D
				}
				.supportLi h4 {
					font-size: 20px;
					font-weight: lighter;
					line-height: normal;
					margin-bottom: 0 !important;
					padding-bottom: 0;
				}
				.newsletter-box input#appendedInputButton {
					background: #FFFFFF;
					display: inline-block;
					float: left;
					height: 30px;
					clear: both;
					width: 100%;
				}
				.newsletter-box .btn {
					border: medium none;
					-webkit-border-radius: 3px;
					-moz-border-radius: 3px;
					-o-border-radius: 3px;
					-ms-border-radius: 3px;
					border-radius: 3px;
					display: inline-block;
					height: 40px;
					padding: 0;
					width: 100%;
					color: #fff;
				}
				.newsletter-box {
					overflow: hidden;
				}
				.bg-gray {
					background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
					box-shadow: 0 1px 0 #B4B3B3;
				}
				.social li {
					background: none repeat scroll 0 0 #B5B5B5;
					border: 2px solid #B5B5B5;
					-webkit-border-radius: 50%;
					-moz-border-radius: 50%;
					-o-border-radius: 50%;
					-ms-border-radius: 50%;
					border-radius: 50%;
					float: left;
					height: 36px;
					line-height: 36px;
					margin: 0 8px 0 0;
					padding: 0;
					text-align: center;
					width: 36px;
					transition: all 0.5s ease 0s;
					-moz-transition: all 0.5s ease 0s;
					-webkit-transition: all 0.5s ease 0s;
					-ms-transition: all 0.5s ease 0s;
					-o-transition: all 0.5s ease 0s;
				}
				.social li:hover {
					transform: scale(1.15) rotate(360deg);
					-webkit-transform: scale(1.1) rotate(360deg);
					-moz-transform: scale(1.1) rotate(360deg);
					-ms-transform: scale(1.1) rotate(360deg);
					-o-transform: scale(1.1) rotate(360deg);
				}
				.social li a {
					color: #EDEFF1;
				}
				.social li:hover {
					border: 2px solid #2c3e50;
					background: #2c3e50;
				}
				.social li a i {
					font-size: 16px;
					margin: 0 0 0 5px;
					color: #EDEFF1 !important;
				}
				.footer-bottom {
					background: #E3E3E3;
					border-top: 1px solid #DDDDDD;
					padding-top: 10px;
					padding-bottom: 10px;
				}
				.footer-bottom p.pull-left {
					padding-top: 6px;
				}
				.payments {
					font-size: 1.5em;	
				}
				.fa-facebook-f:after, .fa-facebook:after {
					content: "" !important;
				}
			</style>
			
		</head>
		<body>
			<?php
			$themes = [
				[
					"name_theme"   => "Vitality-v1.3.6",
					"link_zip"     => "store/vitality-v1.3.6/vitality-v1.3.6.zip",
					"link_preview" => "store/vitality-v1.3.6",
					"link_img"     => "store/images_preview/2015-12-25 10_09_21-Vitality.png",
				],

				[
					"name_theme"   => "Webapplayers.com",
					"link_zip"     => "store/webapplayers.com/webapplayers.com.zip",
					"link_preview" => "store/webapplayers.com",
					"link_img"     => "store/images_preview/2015-12-25 10_09_37-INSPINIA _ Dashboard.png",
				],

				[
					"name_theme"   => "Templatevideo",
					"link_zip"     => "store/templatevideo/templatevideo.zip",
					"link_preview" => "store/templatevideo",
					"link_img"     => "store/images_preview/2015-12-25 10_09_52-Video 1.png",
				],

				[
					"name_theme"   => "Templatevideo2",
					"link_zip"     => "store/templatevideo2/templatevideo2.zip",
					"link_preview" => "store/templatevideo2",
					"link_img"     => "store/images_preview/2015-12-25 10_09_10-Video Cafe _ The Best Media Uploader.png",
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
								<a href="<?= $value["link_preview"]; ?>" class="thumbnail">
									<img src="<?= $value["link_img"]; ?>">
								</a>
								<h4><?= $value["name_theme"]; ?></h4>
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
