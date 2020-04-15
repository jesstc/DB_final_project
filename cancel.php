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
        //加入FETCH_ASSOC，代表要將取出的資料已關聯性的方式存成陣列，同時也適用於各式抓取資料的方法(如上面提到的fetch)，結果如下
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

        // 刪除資料(in database)
        if(!empty($_POST['delete_name'])){
            foreach($product_list as $seq => $value) {
                if($product_list[$seq]['product'] == $_POST['delete_name']) {
                    $ans_search = $value;
                }
            }
            if(empty($ans_search)) $no_ans = 1;
            else {
                $no_ans=0;
                $sql_delete = "DELETE FROM `menu` WHERE product = '".$_POST['delete_name']."'; ";
                $conn->exec($sql_delete);

                // 重新讀取新的資料庫
                $result_second = $conn->query($sql);
                $row = $result_second->fetchAll(PDO::FETCH_ASSOC);

                foreach($row as $seq => $items){
                    foreach($items as $title => $value){
                        $product_list[$seq][$title] = $value;
                    }
                }
            }

            if($no_ans == 1) echo"無此資料";
            elseif($no_ans == 0) echo "已成功刪除!!!";
        } 

        
        // echo "ans_search:";
        // var_dump($ans_search);

        ?>

        
        <!-- 刪除資料 -->
        <header>
            刪除產品
        </header>

        <!-- 產品列表 -->
        <br>
        <h5><strong>產品列表總覽：</strong></h5>
        <table>
            <tr>
                <td>產品名稱</td><td>產品介紹</td><td>成分</td><td>葷素</td><td>價格</td><td>熱量</td><td>備註</td>
            </tr>
            <?php
                foreach($product_list as $items){
                    echo "<tr>";
                    foreach($items as $value){
                        echo "<td>".$value."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>

        <!-- 選擇刪除列 -->
        <form action="cancel.php" method="post">
            <div class="form-group">
                <label>請輸入要刪除的產品名稱：</label>
                <input name="delete_name" class="form-control" type="text">
            </div>

            <button type="submit" class="btn btn-primary mb-2">刪除</button>
        </form>
    </body>
</html>