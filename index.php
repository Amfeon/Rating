<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script scr="jcanvas.js" ></script>
    <script   src="http://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
<div  style="width:270px; height: 270px; background: #ccc;">
    <div  id="osY"      style="width:20px;  height: 250px;z-index: 1; float: left">         </div>
    <div  id="myCanvas" style="width:250px; height: 250px; background: #333;z-index: 2; float: left">           </div>
    <div  id="osX"      style="width:270px; height: 20px;z-index: 3 ; float: left; ">      </div>
</div>
<script>
    //var canvas = document.getElementById("myCanvas");
    //var context = canvas.getContext("2d");
    // сохраняем объект jCanvas в переменную
    var $myCanvas = $('#myCanvas');

    // сам прямоугольник
    /*$myCanvas.drawRect({
     fillStyle: 'steelblue',
     strokeStyle: 'blue',
     strokeWidth: 4,
     x: 0, y: 0,
     fromCenter: false,
     width: 200,
     height: 100
     });*/
    $("#myCanvas").click(function(e) {
        var offset = $(this).offset();
        var height=$(this).height();
        var relativeX = (e.pageX - offset.left).toFixed();
        var relativeY = (height - (e.pageY - offset.top)).toFixed();

if (relativeX>=0&&relativeX<=50){
    $("#osX").addClass('green').text("МУдацкитй");
}
if (relativeX>50&&relativeX<=100){
    $("#osX").addClass('green').text("Стремный");
}
        if (relativeX>100&&relativeX<=150){
            $("#osX").addClass('green').text("Отстой");
        }
        if (relativeX>150&&relativeX<=200){
            $("#osX").addClass('green').text("Порно");
        }
        if (relativeX>200&&relativeX<=250){
            $("#osX").addClass('green').text("Огонь");
        }
    });
</script>
</body>
</html>