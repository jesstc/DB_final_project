<!DOCTYPE html>
<html>
    <head>
        <?php
            include("config.php");
        ?>
    </head>

    <body style="background-color: #faffe8; ">
        <?php

        // ======================================================= 撈資料start ================================================================
        // 因為php7已不支援mysql_* 的function了 所以用PDO的方式連結資料庫
        $sql = "SELECT * from `menu`WHERE 1";
        $result = $conn->query($sql);

        //取出第一筆資料，以此例來說就是最先存入資料庫的那一筆資料
        //    $row=$result->fetch();
        //抓出全部但是除了使用欄位名稱存成陣列之外，還會依照順序再另外存成一組陣列，結果如下
        //    $row=$result->fetchAll();
        //    Array ( [0] => Array ( [pdo_id] => 1 [0] => 1 [pdo_name] => stanley [1] => stanley [pdo_mail] => stanley@domain.com [2] => stanley@domain.com [pdo_login] => 0 [3] => 0 )  )
        //加入FETCH_ASSOC，代表要將取出的資料以關聯性的方式存成陣列，同時也適用於各式抓取資料的方法(如上面提到的fetch)，結果如下
        //    $row=$result->fetchAll(PDO::FETCH_ASSOC);
        //    Array ( [0] => Array ( [pdo_id] => 1 [pdo_name] => stanley [pdo_mail] => stanley@domain.com [pdo_login] => 0 ) 
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        // 把資料庫裡面的資料輸入到$product_list陣列裡面
        foreach($row as $seq => $items){
            foreach($items as $title => $value){
                $product_list[$seq][$title] = $value;
            }
        }
        // test
        // var_dump($product_list[0]);

        // ======================================================= 撈資料end ================================================================
        
        // add new data to menu
        if(!empty($_POST["product"])){
            $sql_insert = "INSERT INTO `menu`(`product`, `introduce`, `contents`, `meat`, `cals`, `price`, `note`)
             VALUES ('".$_POST['product']."', '".$_POST['introduce']."', '".$_POST['contents']."', '".$_POST['meat']."', '".$_POST['cals']."', '".$_POST['price']."', '".$_POST['note']."'); ";
            // var_dump($sql_insert);
            $conn->exec($sql_insert);
        }
        
        ?>

        <header>
            新增麵包
        </header>
        
        <form action="add.php" method="post">
            <div class="form-group">
                <label>產品名稱</label>
                <input name="product" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>產品介紹</label>
                <textarea name="introduce" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>成分</label>
                <textarea name="contents" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>葷素</label>
                <select name="meat" class="form-control">
                    <option>全素含酒</option>
                    <option>全素不含酒</option>
                    <option>蛋奶素含酒</option>
                    <option>蛋奶素不含酒</option>
                    <option>葷含酒</option>
                    <option>葷不含酒</option>
                </select>
            </div>
            <div class="form-group">
                <label>熱量</label>
                <input name="cals" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>價格</label> 
                <input name="price" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>備註</label>
                <textarea name="note" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">送出資料</button>
        </form>
        
    </body>
</html>


