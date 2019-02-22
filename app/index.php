﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>掲示板</title>
    <link rel="stylesheet" href="html.css">
  </head>
  <body>
    <h1>掲示板</h1>
    <p class="sample">練習</p>
    <form action="/my-handling-form-page" method="post">
    <?php
      //nameがPOSTされているなら
      if(isset($_POST["name"])){
        //エスケープしてから表示
        $name = htmlspecialchars($_POST["name"]);
        print("あなたのコメントは「 ${name} 」です。");
      } else {
    ?>
        <p>名前</p>
        <form method="POST" action="index.php">
          <input name="name" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
<?php
      //mailがPOSTされているなら
      if(isset($_POST["mail"])){
        //エスケープしてから表示
        $mail = htmlspecialchars($_POST["mail"]);
        print("あなたのコメントは「 ${mail} 」です。");
      } else {
    ?>
        <p>メールアドレス</p>
        <form method="POST" action="index.php">
          <input name="mail" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
<?php
      //commentがPOSTされているなら
      if(isset($_POST["comment"])){
        //エスケープしてから表示
        $comment = htmlspecialchars($_POST["comment"]);
        print("あなたのコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p>コメントしてください。</p>
        <form method="POST" action="index.php">
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
<?php
      $date = date("Y/m/d H:i:s");
      print($date);
    ?>
  </body>
</html>