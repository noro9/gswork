<?php
//入力チェック（受信確認処理追加）
if(
    !isset($_POST["name"]) || $_POST["name"] == "" ||
    !isset($_POST["url"]) || $_POST["url"] == "" ||
    !isset($_POST["naiyou"]) || $_POST["naiyou"] == ""
){
    exit("ParamError");
}
//1. POSTデータ取得
$name = $_POST["name"];
$url = $_POST["url"];
$naiyou = $_POST["naiyou"];



//2. DB接続します
  try {
    $pdo = new PDO('mysql:dbname=noro9_gs_db;charset=utf8;host=mysql612.db.sakura.ne.jp','noro9','noro9noro9');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, 書籍名, 書籍URL, 書籍コメント,
登録日時)VALUES(NULL, :name, :url, :naiyou, sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();//上記が全て実行された後の結果を$statusに格納




//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();//エラーオブジェクトは配列の形で$errorに全て入る
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;

}
?>
