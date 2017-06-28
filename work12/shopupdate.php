<?php
// 0. 外部ファイル読みこみ
include("functions.php");


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
//1.POSTでParamを取得
$id = $_POST["id"];
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$menu = $_POST["menu"];
$price = $_POST["price"];
$osusume = $_POST["osusume"];
$notice = $_POST["notice"];

///1.  DB接続します
$pdo = db_con();

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE gs_shop_table SET name=:name, lid=:lid,lpw=:lpw,menu=:menu,price=:price,osusume=:osusume,notice=:notice WHERE id=:id");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':menu', $menu, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_STR);
$stmt->bindValue(':osusume', $osusume, PDO::PARAM_STR);
$stmt->bindValue(':notice', $notice, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();//上記が全て実行された後の結果を$statusに格納

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();//エラーオブジェクトは配列の形で$errorに全て入る
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: shopdetail.php");
  exit;

}


?>
