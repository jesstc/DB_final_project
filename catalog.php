
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>產品目錄</title>
        <?php
            include("config.php");
        ?>
    </head>

    <body>
        <!-- header -->
        <h1 class="jumbotron">
            產品目錄
        </h1>
        
        <!--
            navbar可以改下拉式選單(可以用Bootstrap)
            產品目錄
            門市專區
            訂單管理
            會員資料 
            下面可以放一些圖片之類的balablablar就像首頁那樣 懶的再做也沒關係 就直接預設navbar選項的其中一個就好
        -->


        <!-- nav -->
        <ul class="nav nav-pills nav-justified navSet">
            <li class="nav-item">
                <a class="nav-link navSet" href="add.php" target="show">新增麵包</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navSet" href="search.php" target="show">顯示、搜尋麵包</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navSet" href="cancel.php" target="show">刪除麵包資訊</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navSet" href="info.php" target="show">修改麵包資訊</a>
            </li>
        </ul>
        
        <!-- content -->
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item iframeSize" name="show" src="add.php" allowfullscreen></iframe>
        </div>
        <div class="footer"><p class="text-center">&copy;<?php echo date("Y");?>超好吃麵包店 版權所有</p></div>
    </body>
</html>