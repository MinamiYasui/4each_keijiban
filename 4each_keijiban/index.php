<!DOCTYPE html>
<html lang="ja">
    
    <head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>   
    <link rel="stylesheet"type="text/css"href="style1.css"> 
    </head>
    
    <body>
           

        
    <img src="./4eachblog_logo.jpg">
     <header>
         <ul>
            <li>トップ</li>
             <li>プロフィール</li>
             <li>4eachについて</li>
             <li>登録フォーム</li>
             <li>問い合わせ</li>
             <li>その他</li>
         </ul>
        </header>
        <main>
         <div class="main-container">
            <div class="left"><br>
             <h1>プログラミングに役立つ掲示板</h1>     
            </div>
             
             <div class="left2"><br>
             <h2>入力フォーム</h2>
        <form method="post" action="insert.php">
            <div>
              <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
            </div>
            
            <div>
              <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
             </div>
            
            <div>
             <label>コメント</label>
                <br>
                <textarea cols="50" rows="7" name="comments"></textarea>
            </div>
            
            <div>
             <input type="submit" class="submit" value="送信する">
            </div>
                 </form>
             </div>
             
             
            <div class="left3"><br> 
<!--
             <div class ="title">
             </div>   
-->
<!--            <hr>-->
<!--            <br>-->
                
            <?php
         
                   mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
        $stmt = $pdo->query("select*from 4each_keijiban");
        
        while($row = $stmt->fetch()){
            echo "<div class='title'>" ;
            echo"<h3>".$row['title']."</h3>";
            echo "<hr>";
            echo "<div class='comments'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
            echo "<br>";
            
        }
//                      
//                echo"<div class ='left3'>";
//                echo"<h3><div class ='title'></h3>";
//                echo"<div class ='comments'>";
//                echo"";
//                echo"posted by<div class='handlename'>";
//                echo"</div>";
//                echo"</div>";
//                echo"</div>";
//                echo"</div>";
        
                ?>
<!--
            <div class= "comments">
            "記事の中身記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。     記事の中身。<br>
                記事の中身記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                記事の中身記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br></div>
                
            <div class="handlename">
                <br><br>posted by 通りすがり
              </div>
            </div>
            
             <div class="left4"><br>
                
            <div class="title">
              <h3>タイトル</h3>
            </div>
                
            <hr>
            <br>
                
                <div class="comments">
                記事の中身記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                記事の中身記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                記事の中身記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br></div>
                
                <div class="handlename">
                    <br><br>posted by 通りすがり
                </div>
             </div>
            </div>
-->
             </div>
            
            
             
             <div class="right">
                
            <div class="ninki">人気の記事</div>
                <ul class="kiji">
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
                </ul>
            <div class="osusume">オススメリンク</div>
                <ul class="link">
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
                </ul>
            <div class="cate">カテゴリ</div>
                <ul class="gori">
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
                </ul>
             </div>
            </div>
        </main>
        <footer>
          <li>copyright ©︎ internous|4each blog the which A to Z about orograming</li>
        </footer>
    
    </body>
</html>