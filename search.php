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
        // var_dump($product_list);

        // ======================================================= 撈資料end ================================================================
       
        // search for the data
        if(!empty($_POST['search_name'])){
            foreach($product_list as $seq => $value) {
                if($product_list[$seq]['product'] == $_POST['search_name']) {
                    $ans_search[$seq] = $value;
                }
            }
            if(empty($ans_search)) $no_ans = 1;
            else $no_ans=0;
        } elseif(!empty($_POST['search_meat'])) {
            foreach($product_list as $seq => $value) {
                if($product_list[$seq]['meat'] == $_POST['search_meat']) {
                    $ans_search[$seq] = $value;
                }
            }
            if(empty($ans_search)) $no_ans = 1;
            else $no_ans=0;
        }
        // test
        // echo "ans_search:";
        // var_dump($ans_search);

        ?>

        <header>
            搜尋麵包
        </header>
        <br>
        
        <!-- 搜尋列 -->
        <form action="search.php" method="post">
            <div class="form-group">
                <label>以產品名稱搜尋：</label>
                <input name="search_name" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label>以葷素搜尋：</label>
                <select name="search_meat" class="form-control">
                    <option>全素含酒</option>
                    <option>全素不含酒</option>
                    <option>蛋奶素含酒</option>
                    <option>蛋奶素不含酒</option>
                    <option>葷含酒</option>
                    <option>葷不含酒</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mb-2">搜尋</button>
        </form>

        <!-- 搜尋結果 -->
        <?php 
        if($no_ans==1 AND !empty($no_ans)):
            echo "<header>搜尋結果：</header>";
            echo "查無此資料";
        elseif(!empty($ans_search)):
        
        echo "<header>搜尋結果：</header>";

        echo "<table>
            <tr>
                <td>產品名稱</td><td>產品介紹</td><td>成分</td><td>葷素</td><td>價格</td><td>熱量</td><td>備註</td>
            </tr>";
            // <?php
                foreach($ans_search as $items){
                    echo "<tr>";
                    foreach($items as $value){
                        if(!empty($items)) echo "<td>".$value."</td>";
                    }                    
                    echo "</tr>";
                }
            // 
        echo "</table>";
        
        endif;
        ?>
        

        <!-- 產品列表 -->
        <header>
            <br>
            產品列表總覽：
        </header>
        
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
    </body>
</html>