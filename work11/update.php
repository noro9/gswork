<?php
// 0. 外部ファイル読みこみ
include("functions.php");


if(
    !isset($_POST["name"]) || $_POST["name"] == "" ||
    !isset($_POST["url"]) || $_POST["url"] == "" ||
    !isset($_POST["naiyou"]) || $_POST["naiyou"] == ""
){
    exit("ParamError");
}
//1.POSTでParamを取得
$id = $_POST["id"];
$name = $_POST["name"];
$url = $_POST["url"];
$naiyou = $_POST["naiyou"];

///1.  DB接続します
$pdo = db_con();

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE gs_bm_table SET 書籍名=:name, 書籍URL=:url,書籍コメント=:naiyou WHERE id=:id");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
 //Integer（数値の場合 PDO::PARAM_INT)
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
