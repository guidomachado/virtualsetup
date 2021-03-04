<?php

use app\models\Plants;
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\controllers\PlantsController;

/* @var $this yii\web\View */
/* @var $model app\models\Plants */

$this->title = $model->Nome_da_Planta;
$this->params['breadcrumbs'][] = ['label' => 'Plants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$planta = Plants::findOne($model);
$bt_start=null;

//Encontrar BT_START
if($planta->Entrada_0 == "Start"){$bt_start = $planta->Status_M100;}
if($planta->Entrada_1 == "Start"){$bt_start = $planta->Status_M101;}
if($planta->Entrada_2 == "Start"){$bt_start = $planta->Status_M102;}
if($planta->Entrada_3 == "Start"){$bt_start = $planta->Status_M103;}
if($planta->Entrada_4 == "Start"){$bt_start = $planta->Status_M104;}
if($planta->Entrada_5 == "Start"){$bt_start = $planta->Status_M105;}
if($planta->Entrada_6 == "Start"){$bt_start = $planta->Status_M106;}
if($planta->Entrada_7 == "Start"){$bt_start = $planta->Status_M107;}
if($planta->Entrada_8 == "Start"){$bt_start = $planta->Status_M108;}
if($planta->Entrada_9 == "Start"){$bt_start = $planta->Status_M109;}
if($planta->Entrada_10 == "Start"){$bt_start = $planta->Status_M110;}
if($planta->Entrada_11 == "Start"){$bt_start = $planta->Status_M111;}
if($planta->Entrada_12 == "Start"){$bt_start = $planta->Status_M112;}
if($planta->Entrada_13 == "Start"){$bt_start = $planta->Status_M113;}
if($planta->Entrada_14 == "Start"){$bt_start = $planta->Status_M114;}
if($planta->Entrada_15 == "Start"){$bt_start = $planta->Status_M115;}
if($planta->Entrada_16 == "Start"){$bt_start = $planta->Status_M116;}
if($planta->Entrada_17 == "Start"){$bt_start = $planta->Status_M117;}
if($planta->Entrada_18 == "Start"){$bt_start = $planta->Status_M118;}
if($planta->Entrada_19 == "Start"){$bt_start = $planta->Status_M119;}

$saidas = [];
if($planta->Saída_0){$saidas[]=$planta->Status_M120;}
if($planta->Saída_1){$saidas[]=$planta->Status_M121;}
if($planta->Saída_2){$saidas[]=$planta->Status_M122;}
if($planta->Saída_3){$saidas[]=$planta->Status_M123;}
if($planta->Saída_4){$saidas[]=$planta->Status_M124;}
if($planta->Saída_5){$saidas[]=$planta->Status_M125;}
if($planta->Saída_6){$saidas[]=$planta->Status_M126;}
if($planta->Saída_7){$saidas[]=$planta->Status_M127;}
if($planta->Saída_8){$saidas[]=$planta->Status_M128;}
if($planta->Saída_9){$saidas[]=$planta->Status_M129;}
if($planta->Saída_10){$saidas[]=$planta->Status_M130;}
if($planta->Saída_11){$saidas[]=$planta->Status_M131;}
if($planta->Saída_12){$saidas[]=$planta->Status_M132;}
if($planta->Saída_13){$saidas[]=$planta->Status_M133;}
if($planta->Saída_14){$saidas[]=$planta->Status_M134;}
if($planta->Saída_15){$saidas[]=$planta->Status_M135;}
if($planta->Saída_16){$saidas[]=$planta->Status_M136;}
if($planta->Saída_17){$saidas[]=$planta->Status_M137;}
if($planta->Saída_18){$saidas[]=$planta->Status_M138;}
if($planta->Saída_19){$saidas[]=$planta->Status_M139;}


//$planta2 = Plants::find($model)->asArray()->all();
$saidaN = $planta->Status_M100;
$saidaO = $saidaN;
//$js_array = json_encode($saidas);
//echo(gettype($saidas[0]));
//$saidaN = intval($saidas[0],10);//->getText());
//print_r($saidaN);
//$saidaE = [$planta->Status_M120+1];
//$saidaE = array();
$a=0;

?>


<div class="plants-view">
    
    <div id="refresh">
        <div id="time">
        <!--<pre id="whereToPrint"></pre>-->
            <?php 
/*
            $a =0;
            if($a==1){
                for($i=0;$i<sizeof($saidas);$i++){
                    if($saidas[$i]){$saidaE[]=1;}
                    else{$saidaE[]=0;}

                }
            }
            */
            //print_r($saidas);
            print_r($saidaO);
            print_r($saidaN);
            //print_r($planta2[0]);
            //echo date('H:i:s');
            //echo $bt_start;
            //$a[] = $saidas[0];
            //print_r($a);
            //print_r($saidas);
            //$js_array = json_encode($saidas);
            //console.log(i);
            
            
            //echo($saidas[0]);
            //$js_array = json_encode($saidas);
            //echo "var javascript_array = ". $js_array . ";\n";
                //$teste = actionActualize($model);    
            ?>
            
        </div>
    </div> 
    
    <script type="text/javascript">
    setInterval("my_function();",1000); 
    //setInterval("my_function();",1000); 

    function my_function(){
        $('#refresh').load(location.href + ' #time');
        //var i = [];
        //i = <?php echo json_encode($saidas);?>;
        //document.getElementById("whereToPrint").innerHTML = JSON.stringify(i);
    }
    </script>
    

</div>
