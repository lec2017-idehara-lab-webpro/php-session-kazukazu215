<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List</title>
  </head>
  <body>
    <a href='login.php'>Login</a></br>
    <a href='home.php'>Home</a></br><hr />
    <h1>書き込み一覧ページ</h1>

<?php
  $name =$_SESSION['name']; // ここ書き換え
  print($name . "さんでログイン中");
 ?>
  </body>
</html>
