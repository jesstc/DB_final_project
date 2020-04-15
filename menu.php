<?php
$file_path = $_SERVER['PHP_SELF'];//取得目前檔案名稱，先透過$_SERVER['PHP_SELF']取得路徑
$file_name = basename($file_path,".php");//透過basename取得檔案名稱以及去掉副檔名.php

switch($file_name){
	case 'catalog':
		$page_index = 1;
		break;
	case '門市專區':
		$page_index = 2;//2~4記得將檔名改掉
		break;
	case '訂單管理':
		$page_index = 3;
		break;
	case '會員資料':
		$page_index = 4;
		break;
	default:
		$page_index = 0;//首頁預設0
		break;

}
?>
	  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <div class="TopList">
	<div class="jumbotron">
		<div class="container">
			<div class="row"><!--使用RWD響應式網頁-->
	   			<div class="col-xs-12">
		   			<h1 class="text-center"><span style="font-family:Microsoft JhengHei;">超好吃麵包店後台管理系統</span></h1>
		   			<p class="text-center"><span style="font-family:Microsoft JhengHei;">歡迎來到後台!</span></p>
		   			<div class="text-center"><!--首頁清單置中-->
			   			<a href="index.php" <?php echo ($page_index == 0)?"class='active'":"";?> class="badge-pill badge-danger">首頁</a>
						<a target="_blank" href="catalog.php" <?php echo ($page_index == 1)?"class='active'":"";?> class="badge-pill badge-warning">產品目錄</a>
						<a href="門市專區.php"<?php echo ($page_index == 2)?"class='active'":"";?> class="badge-pill badge-success">門市專區</a><!--把檔名改成門市專區的php檔-->
						<a href="訂單管理.php" <?php echo ($page_index == 3)?"class='active'":"";?> class="badge-pill badge-primary">訂單管理</a><!--把檔名改成訂單管理的php檔-->
						<a href="會員資料.php" <?php echo ($page_index == 4)?"class='active'":"";?> class="badge-pill badge-dark">會員資料</a><!--把檔名改成會員資料的php檔-->
	   				</div>
				</div>
			</div>
		</div>
	</div>
</div>
