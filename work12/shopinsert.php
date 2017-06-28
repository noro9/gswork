<?php
// 0. 外部ファイル読みこみ
include("functions.php");
//入力チェック（受信確認処理追加）
if(
    !isset($_POST["name"]) || $_POST["name"] == "" ||
    !isset($_POST["lid"]) || $_POST["lid"] == "" ||
    !isset($_POST["lpw"]) || $_POST["lpw"] == "" ||
    !isset($_POST["menu"]) || $_POST["menu"] == "" ||
    !isset($_POST["price"]) || $_POST["price"] == "" ||
    !isset($_POST["osusume"]) || $_POST["osusume"] == "" ||
    !isset($_POST["notice"]) || $_POST["notice"] == ""
){
    exit("ParamError");
}
//1. POSTデータ取得
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$menu = $_POST["menu"];
$price = $_POST["price"];
$osusume = $_POST["osusume"];
$notice = $_POST["notice"];



//1.  DB接続します
$pdo = db_con();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_shop_table(id, name, lid, lpw, menu, price, osusume, notice)VALUES(NULL, :name, :lid, :lpw, :menu, :price, :osusume, :notice)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':menu', $menu, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_STR);
$stmt->bindValue(':osusume', $osusume, PDO::PARAM_STR);
$stmt->bindValue(':notice', $notice, PDO::PARAM_STR);
$status = $stmt->execute();//上記が全て実行された後の結果を$statusに格納




//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();//エラーオブジェクトは配列の形で$errorに全て入る
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: shoplogin.php");
  exit;

}
?>
