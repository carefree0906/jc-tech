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
					<li class="active">聯絡我們</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.8997554982143!2d120.657722715407!3d24.175248178329337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469162e8359fbe3%3A0xc7f6cf9e370b25ea!2zNDA35Y-w5Lit5biC6KW_5bGv5Y2A5rKz5Y2X6Lev5LqM5q61ODbomZ8!5e0!3m2!1szh-TW!2stw!4v1470277284862" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4><strong>您好～ 歡迎透過以下方式連絡我們或填妥資料告訴我們有甚麼需要為您服務的地方～</strong></h4>
				<form id="contactform" action="mail.php" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 您的信件已寄出，我們將盡速回覆您!!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* 請輸入您的姓名" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* 請輸入您的電子信箱" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="subject" placeholder="* 請輸入您的信件主旨" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* 您想反應的狀況、建議、或諮詢事項" data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">送出</button>								
								
							</p>
							<p>
								<button class="btn btn-theme" type="reset" value="Reset">重設</button>
								<span class="pull-right margintop20"></span>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>
	
	
	<?php
	@include('footer.php');
	?>
	
</body>
</html>