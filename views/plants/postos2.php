<?php

use app\models\Plants;
use yii\helpers\Html;
use app\controllers\PlantsController;
use app\models\PlantsPostos;

/* @var $this yii\web\View */
/* @var $model app\models\Plants */

$this->title = 'Virtualização';
$this->params['breadcrumbs'][] = $this->title;

$planta = Plants::findOne($model);
$StatusES = array();
$startbt;

if($planta->Entrada_0){$StatusES[]="Status_M100";}
if($planta->Entrada_1){$StatusES[]="Status_M101";}
if($planta->Entrada_2){$StatusES[]="Status_M102";}
if($planta->Entrada_3){$StatusES[]="Status_M103";}
if($planta->Entrada_4){$StatusES[]="Status_M104";}
if($planta->Entrada_5){$StatusES[]="Status_M105";}
if($planta->Entrada_6){$StatusES[]="Status_M106";}
if($planta->Entrada_7){$StatusES[]="Status_M107";}
if($planta->Entrada_8){$StatusES[]="Status_M108";}
if($planta->Entrada_9){$StatusES[]="Status_M109";}
if($planta->Entrada_10){$StatusES[]="Status_M110";}
if($planta->Entrada_11){$StatusES[]="Status_M111";}
if($planta->Entrada_12){$StatusES[]="Status_M112";}
if($planta->Entrada_13){$StatusES[]="Status_M113";}
if($planta->Entrada_14){$StatusES[]="Status_M114";}
if($planta->Entrada_15){$StatusES[]="Status_M115";}
if($planta->Entrada_16){$StatusES[]="Status_M116";}
if($planta->Entrada_17){$StatusES[]="Status_M117";}
if($planta->Entrada_18){$StatusES[]="Status_M118";}
if($planta->Entrada_19){$StatusES[]="Status_M119";}
if($planta->Saída_0){$StatusES[]="Status_M120";}
if($planta->Saída_1){$StatusES[]="Status_M121";}
if($planta->Saída_2){$StatusES[]="Status_M122";}
if($planta->Saída_3){$StatusES[]="Status_M123";}
if($planta->Saída_4){$StatusES[]="Status_M124";}
if($planta->Saída_5){$StatusES[]="Status_M125";}
if($planta->Saída_6){$StatusES[]="Status_M126";}
if($planta->Saída_7){$StatusES[]="Status_M127";}
if($planta->Saída_8){$StatusES[]="Status_M128";}
if($planta->Saída_9){$StatusES[]="Status_M129";}
if($planta->Saída_10){$StatusES[]="Status_M130";}
if($planta->Saída_11){$StatusES[]="Status_M131";}
if($planta->Saída_12){$StatusES[]="Status_M132";}
if($planta->Saída_13){$StatusES[]="Status_M133";}
if($planta->Saída_14){$StatusES[]="Status_M134";}
if($planta->Saída_15){$StatusES[]="Status_M135";}
if($planta->Saída_16){$StatusES[]="Status_M136";}
if($planta->Saída_17){$StatusES[]="Status_M137";}
if($planta->Saída_18){$StatusES[]="Status_M138";}
if($planta->Saída_19){$StatusES[]="Status_M139";}
$sql = "SELECT * FROM plants_postos ORDER BY id DESC LIMIT 1;";
$command = Yii::$app->db->createCommand($sql);
$count = $command->queryScalar();
print_r($count);
?>
<div>

<p>
    <button onclick="stop(a)">Stop</button>
    <button onclick="start(a)">Start</button>
</p> 
</div>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        
        <canvas id="teladireita" width="1000" height="600" style="border:1px solid #000000;background-color:LightGrey;"></canvas>

        <script type="text/javascript">
        var canvas = document.getElementById("teladireita");
        var ctx1 = canvas.getContext("2d");
        var pos1 = {x:0,y:0};
        var pos2 = {x:200,y:0};
        var pos3 = {x:400,y:0};
        var pos4 = {x:600,y:0};
        var pos5 = {x:800,y:0};
        ctx1.fillStyle="#00FA9A";  //verde
        ctx1.fillRect(pos1.x,pos1.y,100,100);
        ctx1.fillRect(pos2.x,pos2.y,100,100);
        ctx1.fillRect(pos3.x,pos3.y,100,100);
        ctx1.fillRect(pos4.x,pos4.y,100,100);
        ctx1.fillRect(pos5.x,pos5.y,100,100);
        var int = 1;
        var a =1;
        function next(i) {
            var canvas = document.getElementById('teladireita');
            var ctx = canvas.getContext('2d');
            if(i==1){pos = pos1;i=2;pos_1 = pos5;}
            else if(i==2){pos = pos2;i=3;pos_1 = pos1;}
            else if(i==3){pos = pos3;i=4;pos_1 = pos2;}
            else if(i==4){pos = pos4;i=5;pos_1 = pos3;}
            else{pos = pos5;i=1;pos_1 = pos4;}
            int = i;
            ctx.fillStyle = "#00FA9A";
            ctx.fillRect(pos_1.x,pos_1.y,100,100);           
            ctx.beginPath();
            ctx.arc(pos.x+50, pos.y+50, 20, 0, Math.PI * 2, true); // Outer circle
            ctx.fillStyle = 'rgb(0, 0, 0)';
            ctx.fill();
        }
        function stop(valor){a = 1;}
        function start(valor){a = 0;}
        setInterval("my_function();",1000); 
        function my_function(){
            if(a==0){next(int);}
            //$('#refresh').load(location.href + ' #time');
        }
        </script>
    </body>
</html>