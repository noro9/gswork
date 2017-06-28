<?php
// 0. 外部ファイル読みこみ
include("functions.php");

//1.GETでidを取得
$id = $_GET["id"];
// echo "GET:".$id;

//1.  DB接続します
$pdo = db_con();


//3.SELECT * FROM gs_an_table WHERE id=***; を取得（bindValueを使用！）
$stmt = $pdo->prepare("SELECT * FROM gs_shop_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4.select.phpと同じようにデータを取得（以下はイチ例）
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる
  $result = $stmt->fetch(); //$result["id"];
}


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ja"> <!--<![endif]-->
   <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Three/3 &mdash; ログイン&nbsp;</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Three/3 Website Template by FreeHTML5.co" />
   <meta name="keywords" content="Three/3, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
   <meta name="author" content="FreeHTML5.co" />

  <!--
   //////////////////////////////////////////////////////

   Three/3 TEMPLATE
   DESIGNED & DEVELOPED by FreeHTML5.co

   Website: 		http://freehtml5.co/
   Email: 			info@freehtml5.co
   Twitter: 		http://twitter.com/fh5co
   Facebook: 		https://www.facebook.com/fh5co

   //////////////////////////////////////////////////////
    -->

   <!-- Facebook and Twitter integration -->
   <meta property="og:title" content=""/>
   <meta property="og:image" content=""/>
   <meta property="og:url" content=""/>
   <meta property="og:site_name" content=""/>
   <meta property="og:description" content=""/>
   <meta name="twitter:title" content="" />
   <meta name="twitter:image" content="" />
   <meta name="twitter:url" content="" />
   <meta name="twitter:card" content="" />

   <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
   <link rel="shortcut icon" href="favicon.ico">

   <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">

   <!-- Animate.css -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- Icomoon Icon Fonts-->
   <link rel="stylesheet" href="css/icomoon.css">
   <!-- Bootstrap  -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <!-- Flexslider  -->
   <link rel="stylesheet" href="css/flexslider.css">
   <!-- Theme style  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- Modernizr JS -->
   <script src="js/modernizr-2.6.2.min.js"></script>
   <!-- FOR IE9 below -->
   <!--[if lt IE 9]>
   <script src="js/respond.min.js"></script>
   <![endif]-->

   </head>
   <body>


   <div id="fh5co-page">
   <header id="fh5co-header" role="banner">
       <div class="container">
           <div class="header-inner">
               <h1><a href="index.php">Three/3&nbsp;</a></h1>
               <nav role="navigation">
                   <ul>
                       <li><a href="work.html">1</a></li>
                       <li><a href="services.html">2</a></li>
                       <!-- <li><a href="pricing.html">Pricing</a></li> -->
                       <li><a href="about.html">3</a></li>
                       <li><a href="contact.html">4</a></li>
                       <li class="cta"><a href="index.php">HOME</a></li>
                   </ul>
               </nav>
           </div>
       </div>
   </header>
   </div>
   <div class="fh5co-contact animate-box">
       <div class="container">
           <div class="row">
               <div class="col-md-8 col-md-offset-2 col-md-push-2 animate-box">
                   <h2>登録内容更新</h2>
                   <p></p><br><br>

               </div>
               <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                   <form action="shopupdate.php" method="post">
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                   ID:
                                   <input class="form-control" value="<?=$result["lid"]?>" type="text" name="lid">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   PASSWORD:
                                   <input class="form-control" value="<?=$result["lpw"]?>" type="text" name="lpw">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="form-group">
                                   <!-- <fieldset> -->
                                    <!-- <legend>店舗登録</legend> -->
                                    店舗名:
                                     <input class="form-control" value="<?=$result["name"]?>" type="text" name="name">
                               </div>
                           </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                     メニュー:
                                     <input class="form-control" value="<?=$result["menu"]?>" type="text" name="menu"><br>
                                 </div>
                             </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    価格:
                                     <input class="form-control" value="<?=$result["price"]?>" type="text" name="price"><br>
                                 </div>
                             </div>
                                <div class="col-md-12">
                                   <div class="form-group">
                                    おすすめ:
                                     <input class="form-control" value="<?=$result["osusume"]?>" type="text" name="osusume"><br>
                                 </div>
                             </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                    注意事項:
                                     <input class="form-control" value="<?=$result["notice"]?>" type="text" name="notice"><br>
                                 </div>
                             </div>
                             <input type="hidden" name="id" value="<?=$id?>">
                             <div class="col-md-12">
                               <div class="form-group">
                                   <input value="更新" class="btn btn-primary" type="submit">
                               </div>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>


   <!-- jQuery -->
   <script src="js/jquery.min.js"></script>
   <!-- jQuery Easing -->
   <script src="js/jquery.easing.1.3.js"></script>
   <!-- Bootstrap -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Waypoints -->
   <script src="js/jquery.waypoints.min.js"></script>
   <!-- Flexslider -->
   <script src="js/jquery.flexslider-min.js"></script>
   <!-- Google Map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
   <script src="js/google_map.js"></script>

   <!-- MAIN JS -->
   <script src="js/main.js"></script>

   </body>
</html>

<!-- <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>店舗更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body> -->

<!-- Head[Start] -->
<!-- <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="#">店舗更新</a></div>
  </nav>
</header> -->
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- <form method="post" action="shopupdate.php">
  <div class="jumbotron">
   <fieldset>
    <legend>店舗登録</legend>
     <label>店舗名：<input type="text" name="name" value="?=$result["name"]?>"></label><br>
     <label>ユーザーID：<input type="text" name="lid" value="?=$result["lid"]?>"></label><br>
     <label>パスワード：<input type="password" name="lpw" value="?=$result["lpw"]?>"></label><br>
     <label>メニュー：<input type="text" name="menu" value="?=$result["menu"]?>"></label><br>
     <label>一人当たり値段：<input type="text" name="price" value="?=$result["price"]?>"></label><br>
     <label>おすすめ：<input type="text" name="osusume" value="?=$result["osusume"]?>"></label><br>
     <label>注意事項：<input type="text" name="notice" value="?=$result["notice"]?>"></label><br>
     <input type="hidden" name="id" value="?=$id?>">
     <input type="submit" value="更新">
    </fieldset>
  </div>
</form>
<p><a href="index.php">HOME</a></p> -->
<!-- Main[End] -->


<!-- </body>
</html> -->
