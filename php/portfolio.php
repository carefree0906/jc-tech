<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<?php
	@include('head.php');
	?>
</head>

<body>
	
	<?php
	@include('header.php');
	?>	
		<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">成功案例</li>
				</ul>
			</div>
		</div>
	</div>
	</section>	
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="portfolio.php">All</a></li>
					<li class="typo"><a href="#" title="電腦週邊設備">電腦週邊設備</a></li>
					<li class="ab"><a href="#" title="視聽教室建置">視聽教室建置</a></li>
					<li class="ed"><a href="#" title="電子看板規劃">電子看板規劃</a></li>
					<li class="soft"><a href="#" title="軟硬體設計">軟硬體設計</a></li>
					<li class="wd"><a href="#" title="行動穿戴裝置">行動穿戴裝置</a></li>
				</ul>
				<div class="clearfix">
				</div>
	<?php
	@include('projects.php');
	?>
		</div>
		</div>
		</div>
	</section>
	
	
	<?php
	@include('footer.php');
	?>
	
</body>
</html>