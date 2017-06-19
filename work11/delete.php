<?php
// 0. 外部ファイル読みこみ
include("functions.php");
$id = $_GET["id"];

// 接続
///1.  DB接続します
$pdo = db_con();

// 削除
$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

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
