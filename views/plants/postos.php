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

$planta = Plants::findOne($model->Id);
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

//guido soprano
//$configBd = mysqli_connect('virtualsetup.mysql.dbaas.com.br','virtualsetup','projetosuper','virtualsetup') or die('Erro ao conectar');
//$sql = "SELECT * FROM plants";
//$resultado_anterior = mysqli_query($configBd,$sql) or die('Erro ao conectar');

//$status_anterior = $resultado_anterior['Status_M100'];
function verif_status($status_atual,$init_processo,$tipo_ent_saida,$quant_io)
{
    static $control_posterior;
    static $control_atual;
    static $control_flag=0;
    static $control_flag_fim=0;
    static $posto;
    static $guarda_posto=0;

    if(($init_processo == 1) && ($tipo_ent_saida == 0))
    {
        print_r("pnp");
        for($i1=0;$i1<sizeof($status_atual);$i1++)
        {
            //$status_atual[$i1] = 0;
            $control_atual = $status_atual[$i1];
        }
    }
    if(($init_processo == 1) && ($tipo_ent_saida == 1))
    {
        print_r("npn");
        for($i1=0;$i1<sizeof($status_atual);$i1++)
        {
            //$status_atual[$i1] = 1;
            $control_atual = $status_atual[$i1];
        }
    }
    //yfgyih
    if(($init_processo == 0) && ($control_flag == 0))
    {
        for($i1=0;$i1<sizeof($status_atual);$i1++)
        {
            $control_atual[$i1] = $status_atual[$i1];
        }
        $control_flag = 1;
        print_r("1ooo");
        $control_flag = 1;
    }
    else
    {
        
        if(($init_processo == 0) && ($control_flag == 1))
        {
            print_r("eee");
            for($i1=0;$i1<sizeof($status_atual);$i1++)
            {
                $control_posterior[$i1] = $status_atual[$i1];
            }
            print_r("2 vez");
            $control_flag = 0;
            $control_flag_fim=1;
        }
    }
    if(($init_processo == 0) && ($control_flag_fim == 1))
    {
        for($i1=0;$i1<sizeof($status_atual);$i1++)
        {
            if($control_atual[$i1] == $control_posterior[$i1])
            {
                $posto[$i1] = $control_posterior[$i1];
            }else{
                $posto[$i1] = $control_posterior[$i1];
                $guarda_posto =1;
            }
        }
        $control_flag_fim=0;
    }
    if($guarda_posto == 1){return($posto);echo"go";}
    print_r($control_flag);
}

$teste[]=array(1,0,0,1);
//verif_status($teste,0,0,4);
//verif_status($teste,0,0,4);
function levar_js($status_atual)
{
    static $estado_atual = array();
    for($i=0;$i<sizeof($status_atual);$i++)
    {
        $estado_atual = $status_atual[$i];
    }
    return $estado_atual;
}
$fjson = json_encode(levar_js($teste));
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
    
    <script>
    var i, produtos, state = 0;
    //recebe o objeto json do php
    produtos = <?php echo $fjson; ?>;

    if (state == 0)
    {
        alert("1 vez");
        state = 1;
    }else {alert("2 vez");state = 2;}
    if (state == 2)
    {
        alert("3 vez");
        state = 0;
    }
    
    //for (i in produtos)
    //{
    //    alert("Nome: " + produtos[i] + "\nQuantidade: ");
    //}
    </script>
    

</div>
