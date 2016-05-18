<?php 
	if(isset($_GET["auth"]) && $_GET["auth"]!="999999son"){
		require("login.php");
	}
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
		}
	}
?>
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
			<div class="container">
				<h1 class="text-center">Sharing Template Website</h1>

				<div class="row">
					<?php foreach ($themes as $key => $value) {
						?>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<div class="">
								<a target="_blank" href="<?= $value["link_preview"]; ?>" class="thumbnail">
									<img src="<?= $value["link_img"]; ?>" onError="this.src='http://placehold.it/500x500'">
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
			<script>
				console.log("%cĐể download được về các bạn thêm dòng này trong console nhé $('.hidden').removeClass('hidden')", "color: red; font-size: x-large");
			</script>
		</body>
		</html>
