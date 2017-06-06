// ランダム関数
function rand(n) {
    var r = Math.floor(Math.random()*n+1);
    return r ;
};
function ymdja(){
    var now = new Date();
     var y = now.getFullYear();
     var m = now.getMonth() + 1;
     var d = now.getDate();
     var w = now.getDay();
     var wd = ["日", "月", "火", "水", "木", "金", "土"];
     var h = now.getHours();
     var mi = now.getMinutes();
     var s = now.getSeconds();
    return y+"年"+m+"月"+d+"日"+"("+wd[w]+")"+h+":"+mi+"";
};
