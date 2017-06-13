<?php
$filename = "data/data.csv";
// echo "string";
// postされたデータを文字列に変換
$AGE = $_GET["AGE"];
$TALL = $_GET["TALL"];
$WEIGHT = $_GET["WEIGHT"];
$BMI = $_GET["BMI"];
$STR = "{$AGE},{$TALL},{$WEIGHT}\n";
// ファイルを読み込み
$file = fopen($filename,"a");
// ファイルをロックし書き込む
flock($file,LOCK_EX);
fwrite($file,$STR);
// ファイルをロック解除して閉じる
flock($file,LOCK_UN);
fclose($file);
 ?>




 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <title>結果表示ページ</title>
     </head>
     <body>
         <table id="data"></table>
         <button id="result" type="button" name="button">結果</button>
         <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
         <script>
         $("#result").on("click",function(){
             $.getJSON("json.php",function(data){
                 $("#data").empty();
                 var i = 1;
                 for(val in data){
                     var td = "<tr>";
                         td += "<th>"+i+"</th>";
                         td += "<td>"+data[val][0]+"</td>";
                         td += "<td>"+data[val][1]+"</td>";
                         td += "<td>"+data[val][2]+"</td>";
                        //  td += "<td>"+data[val][3]+"</td>";
                         td += "</tr>";
                     $("#data").append(td);
                     i++;
                 }
             })
         })

         </script>
     </body>
 </html>
