<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=noro9_gs_db;charset=utf8;host=mysql612.db.sakura.ne.jp','noro9','noro9noro9');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>".$result["id"].$result["書籍名"]."/".$result["書籍URL"]."/".$result["書籍コメント"]."</p>";
  }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>BOOKMARK</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">お気に入り書籍一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- ブックマーク表示 -->

<div>
    <div class="container jumbotron"><?=$view?></div>
</div>



<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク登録</legend>
     <label>書籍名：<input type="text" name="name"></label><br>
     <label>書籍URL：<input type="text" name="url"></label><br>
     <label>コメント：<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
