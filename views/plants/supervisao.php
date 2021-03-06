<?php

use app\models\Plants;
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\controllers\PlantsController;

/* @var $this yii\web\View */
/* @var $model app\models\Plants */

$this->title = "Supervisão ".$model->Nome_da_Planta;
$this->params['breadcrumbs'][] = ['label' => 'Plants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$planta = Plants::findOne($model->Id);
$nomes = array();

if($planta->Entrada_0){$nomes[]='Entrada_0';$nomes[]="Status_M100";}
if($planta->Entrada_1){$nomes[]='Entrada_1';$nomes[]="Status_M101";}
if($planta->Entrada_2){$nomes[]='Entrada_2';$nomes[]="Status_M102";}
if($planta->Entrada_3){$nomes[]='Entrada_3';$nomes[]="Status_M103";}
if($planta->Entrada_4){$nomes[]='Entrada_4';$nomes[]="Status_M104";}
if($planta->Entrada_5){$nomes[]='Entrada_5';$nomes[]="Status_M105";}
if($planta->Entrada_6){$nomes[]='Entrada_6';$nomes[]="Status_M106";}
if($planta->Entrada_7){$nomes[]='Entrada_7';$nomes[]="Status_M107";}
if($planta->Entrada_8){$nomes[]='Entrada_8';$nomes[]="Status_M108";}
if($planta->Entrada_9){$nomes[]='Entrada_9';$nomes[]="Status_M109";}
if($planta->Entrada_10){$nomes[]='Entrada_10';$nomes[]="Status_M110";}
if($planta->Entrada_11){$nomes[]='Entrada_11';$nomes[]="Status_M111";}
if($planta->Entrada_12){$nomes[]='Entrada_12';$nomes[]="Status_M112";}
if($planta->Entrada_13){$nomes[]='Entrada_13';$nomes[]="Status_M113";}
if($planta->Entrada_14){$nomes[]='Entrada_14';$nomes[]="Status_M114";}
if($planta->Entrada_15){$nomes[]='Entrada_15';$nomes[]="Status_M115";}
if($planta->Entrada_16){$nomes[]='Entrada_16';$nomes[]="Status_M116";}
if($planta->Entrada_17){$nomes[]='Entrada_17';$nomes[]="Status_M117";}
if($planta->Entrada_18){$nomes[]='Entrada_18';$nomes[]="Status_M118";}
if($planta->Entrada_19){$nomes[]='Entrada_19';$nomes[]="Status_M119";}
if($planta->Saída_0){$nomes[]='Saída_0';$nomes[]="Status_M120";}
if($planta->Saída_1){$nomes[]='Saída_1';$nomes[]="Status_M121";}
if($planta->Saída_2){$nomes[]='Saída_2';$nomes[]="Status_M122";}
if($planta->Saída_3){$nomes[]='Saída_3';$nomes[]="Status_M123";}
if($planta->Saída_4){$nomes[]='Saída_4';$nomes[]="Status_M124";}
if($planta->Saída_5){$nomes[]='Saída_5';$nomes[]="Status_M125";}
if($planta->Saída_6){$nomes[]='Saída_6';$nomes[]="Status_M126";}
if($planta->Saída_7){$nomes[]='Saída_7';$nomes[]="Status_M127";}
if($planta->Saída_8){$nomes[]='Saída_8';$nomes[]="Status_M128";}
if($planta->Saída_9){$nomes[]='Saída_9';$nomes[]="Status_M129";}
if($planta->Saída_10){$nomes[]='Saída_10';$nomes[]="Status_M130";}
if($planta->Saída_11){$nomes[]='Saída_11';$nomes[]="Status_M131";}
if($planta->Saída_12){$nomes[]='Saída_12';$nomes[]="Status_M132";}
if($planta->Saída_13){$nomes[]='Saída_13';$nomes[]="Status_M133";}
if($planta->Saída_14){$nomes[]='Saída_14';$nomes[]="Status_M134";}
if($planta->Saída_15){$nomes[]='Saída_15';$nomes[]="Status_M135";}
if($planta->Saída_16){$nomes[]='Saída_16';$nomes[]="Status_M136";}
if($planta->Saída_17){$nomes[]='Saída_17';$nomes[]="Status_M137";}
if($planta->Saída_18){$nomes[]='Saída_18';$nomes[]="Status_M138";}
if($planta->Saída_19){$nomes[]='Saída_19';$nomes[]="Status_M139";}

function actionActualize($model)
{
    $planta = Plants::findOne($model->Id);
    return $planta;    
}
?>


<div class="plants-view">
    

    <div id="refresh">
    <div id="time">
        <?php 
            //echo date('H:i:s');
            //$planta = actionActualize($model);    
        ?>
        <?= DetailView::widget([
            'model' => $planta,
            'attributes' => $nomes,
        ]) ?> 
    </div>
    </div> 

    <script type="text/javascript">
    setInterval("my_function();",250); 
 
    function my_function(){
        $('#refresh').load(location.href + ' #time');
    }
    </script>
    
</div>
