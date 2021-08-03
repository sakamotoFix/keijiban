<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
    
<body>
    <div class="logo"><img src="4eachblog_logo.jpg"></div>
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
    <div class="maincontainer">
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
            <h2 class="formheading">入力フォーム</h2>
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
                    <textarea cols="60" rows="7" name="comments"></textarea>
                </div>

                <div>
                    <input type="submit" value="投稿する">
                </div>
        </div>

        <div class="right">
                    <h2 class="subheading">人気の記事</h2>
                        <ul>
                            <li>PHPオススメ本</li>
                            <li>PHP MyAdminの使い方</li>
                            <li>今人気のエディタ Top5</li>
                            <li>HTMLの基礎</li>
                        </ul>
                    <h2 class="subheading">オススメリンク</h2>
                         <ul>
                            <li>インターノウス株式会社</li>
                            <li>XAMPPのダウンロード</li>
                            <li>Eclipseのダウンロード</li>
                            <li>Bracketsのダウンロード</li>
                        </ul>
                    <h2 class="subheading">カテゴリ</h2>
                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>My SQL</li>
                            <li>JavaScript</li>
                         </ul>
        </div>

        <div class="Post">                    
                    <?php 

                        mb_internal_encoding("utf8");
                        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
                        $stmt = $pdo->query("select * from 4each_keijiban");

                        while($row = $stmt->fetch()){
                            echo "<div class='kiji'>";
                            echo "<h3>".$row['title']."</h3>";
                            echo "<div class='contents'>";
                            echo $row['comments'];
                            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    ?>   
        </div>

    </div>                   
</main>
    <footer>
        copyright&copy;｜4each blog the which provides A to Z about programming.
    </footer>
</body>
</html>
