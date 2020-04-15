<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>麵包後台管理系統</title>

	<meta name="description" content="麵包後台管理系統"><!--網站說明-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- 圖片輪播Bootstarp -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="111.ico"><!---分頁上方的小圖示-->

    <link rel="stylesheet" type="text/css" href="styleIndex.css"><!--嵌入CSS-->



</head>
<body>
	<?php include_once'menu.php';?>
	<div class="content">
		<div class="container">
			<div class="row">
   				<div class="col-xs-12">
   					<!-- 圖片輪播start -->
					<div class="alert alert-info" role="alert">
						<!-- 首頁的圖片輪播 -->
						<div id="myCarousel" class="carousel slide">
							<!-- 輪播（Carousel）指標 -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
							</ol>   
							<!-- 輪播（Carousel）項目 -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="4.jpg" alt="First slide">
								</div>
								<div class="item">
									<img src="5.jpg" alt="Second slide">
								</div>
								<div class="item">
									<img src="6.jpg" alt="Third slide">
								</div>
								<div class="item">
									<img src="7.jpg" alt="Fourth slide">
								</div>
							</div>
							<!-- 輪播（Carousel -->
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">上一張</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">下一張</span>
							</a>
						</div>
						<!-- 控制按鈕 -->
						<div style="text-align:center;">
							<input type="button" class="btn start-slide" value="start">
							<input type="button" class="btn pause-slide" value="pause">
							<input type="button" class="btn prev-slide" value="prev">
							<input type="button" class="btn next-slide" value="next">
							<input type="button" class="btn slide-one" value="slide 1">
							<input type="button" class="btn slide-two" value="slide 2">
							<input type="button" class="btn slide-three" value="slide 3">
							<input type="button" class="btn slide-four" value="slide 4">
						</div>
						<script>
							$(function(){
								// 初始化輪播
								$(".start-slide").click(function(){
									$("#myCarousel").carousel('cycle');
								});
								// 停止輪播
								$(".pause-slide").click(function(){
									$("#myCarousel").carousel('pause');
								});
								// 循環輪播到上一個項目
								$(".prev-slide").click(function(){
									$("#myCarousel").carousel('prev');
								});
								// 循環輪播到下一個項目
								$(".next-slide").click(function(){
									$("#myCarousel").carousel('next');
								});
								// 循環輪播到某個特定的幀 
								$(".slide-one").click(function(){
									$("#myCarousel").carousel(0);
								});
								$(".slide-two").click(function(){
									$("#myCarousel").carousel(1);
								});
								$(".slide-three").click(function(){
									$("#myCarousel").carousel(2);
								});
								$(".slide-four").click(function(){
									$("#myCarousel").carousel(3);
								});
							});
						</script>
					</div><!-- 圖片輪播end -->
				</div>
			</div>
		</div>
	</div>
	<div class="footer"><p class="text-center">&copy;<?php echo date("Y");?>超好吃麵包店 版權所有</p></div>
</body>
</html>