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
					"link_img"     => "store/00_images_preview/vitality-v1.3.6.png",
					"price"        => "16$",
				],

				[
					"name_theme"   => "Webapplayers.com",
					"link_zip"     => "store/webapplayers.com/webapplayers.com.zip",
					"link_preview" => "store/webapplayers.com",
					"link_img"     => "store/00_images_preview/webapplayers.com.png",
					"price"        => "20$",
				],

				[
					"name_theme"   => "Templatevideo",
					"link_zip"     => "store/templatevideo/templatevideo.zip",
					"link_preview" => "store/templatevideo",
					"link_img"     => "store/00_images_preview/templatevideo.png",
					"price"        => "10$",
				],

				[
					"name_theme"   => "Templatevideo2",
					"link_zip"     => "store/templatevideo2/templatevideo2.zip",
					"link_preview" => "store/templatevideo2",
					"link_img"     => "store/00_images_preview/templatevideo2.png",
					"price"        => "31$",
				],

				[
					"name_theme"   => "Porto 4.4.0",
					"link_zip"     => "store/porto/porto.zip",
					"link_preview" => "store/porto",
					"link_img"     => "store/00_images_preview/porto.png",
					"price"        => "40$",
				],

				[
					"name_theme"   => "Chelsea",
					"link_zip"     => "store/chelsea/chelsea.zip",
					"link_preview" => "store/chelsea",
					"link_img"     => "store/00_images_preview/chelsea.png",
					"price"        => "33$",
				],

				[
					"name_theme"   => "Alliance-html",
					"link_zip"     => "store/alliance-html/alliance-html.zip",
					"link_preview" => "store/alliance-html",
					"link_img"     => "store/00_images_preview/alliance-html.png",
					"price"        => "23$",
				],

				[
					"name_theme"   => "Smartstart",
					"link_zip"     => "store/smartstart/smartstart.zip",
					"link_preview" => "store/smartstart",
					"link_img"     => "store/00_images_preview/smartstart.png",
					"price"        => "23$",
				],

				[
					"name_theme"   => "vcard",
					"link_zip"     => "store/vcard/vcard.zip",
					"link_preview" => "store/vcard",
					"link_img"     => "store/00_images_preview/vcard.png",
					"price"        => "17$",
				],

				[
					"name_theme"   => "wedding-bells",
					"link_zip"     => "store/wedding-bells/wedding-bells.zip",
					"link_preview" => "store/wedding-bells",
					"link_img"     => "store/00_images_preview/wedding-bells.png",
					"price"        => "19$",
				],

				[
					"name_theme"   => "ortheme",
					"link_zip"     => "store/ortheme/ortheme.zip",
					"link_preview" => "store/ortheme",
					"link_img"     => "store/00_images_preview/ortheme.png",
					"price"        => "19$",
				],
			];

			?>
			<pre><?php
			$list = scandir("store/");
			$themes=[];
			foreach ($list as $key => $value) {
				if($value == ".." || $value == "." || $value == "00_images_preview"){
					continue;
				}
				$themes [$key] =[
					"name_theme"   => $value,
					"link_zip"     => "store/".$value."/".$value.".zip",
					"link_preview" => "store/".$value."",
					"price"        => "19$",
				];
				if(file_exists("store/00_images_preview/".$value.".png")){
					$themes [$key]["link_img"] ="store/00_images_preview/".$value.".png";
				}else{
					$themes [$key]["link_img"] ="http://placehold.it/500x500";
				}
			}
			 ?></pre>
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
								<p ><a href="#" onclick="alert('Đâu dễ vậy cưng !'); return false;"><i class="fa fa-download"></i> Download</a></p>
								<p class="hidden"><a href="<?= $value["link_zip"]; ?>"><i class="fa fa-download"></i> Download</a></p>
							</div>
						</div>
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
