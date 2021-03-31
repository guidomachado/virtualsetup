<?php

use app\models\Plants;
use app\models\PlantsPostos;
use app\models\PlantsControl;
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

$numero_saidas=0;
if($planta->Saída_0){$numero_saidas++;}
if($planta->Saída_1){$numero_saidas++;}
if($planta->Saída_2){$numero_saidas++;}
if($planta->Saída_3){$numero_saidas++;}
if($planta->Saída_4){$numero_saidas++;}
if($planta->Saída_5){$numero_saidas++;}
if($planta->Saída_6){$numero_saidas++;}
if($planta->Saída_7){$numero_saidas++;}
if($planta->Saída_8){$numero_saidas++;}
if($planta->Saída_9){$numero_saidas++;}
if($planta->Saída_10){$numero_saidas++;}
if($planta->Saída_11){$numero_saidas++;}
if($planta->Saída_12){$numero_saidas++;}
if($planta->Saída_13){$numero_saidas++;}
if($planta->Saída_14){$numero_saidas++;}
if($planta->Saída_15){$numero_saidas++;}
if($planta->Saída_16){$numero_saidas++;}
if($planta->Saída_17){$numero_saidas++;}
if($planta->Saída_18){$numero_saidas++;}
if($planta->Saída_19){$numero_saidas++;}

$planta->Quant_saidas = $numero_saidas;
$planta->save();
//atualizar o banco para dois vetores locais
function atualizar_bd_comparacao($id_principal)
{
    $cont_dif = 0;
    $planta = Plants::findOne($id_principal);
    
    $numero_postos = $planta->Num_postos;
    if($numero_postos == 0){
        $plantaPostos_status_atual = PlantsPostos::findOne(1);
    }
    else{
        $sql = "SELECT * FROM plants_postos ORDER BY id DESC LIMIT 1;";
        $command = Yii::$app->db->createCommand($sql);
        $ult_posto = $command->queryScalar();
        $plantaPostos_status_atual = PlantsPostos::findOne($ult_posto);
    }

    if($planta->Status_M120!=$plantaPostos_status_atual->Status_M120){$cont_dif++;}
    if($planta->Status_M121!=$plantaPostos_status_atual->Status_M121){$cont_dif++;}
    if($planta->Status_M122!=$plantaPostos_status_atual->Status_M122){$cont_dif++;}
    if($planta->Status_M123!=$plantaPostos_status_atual->Status_M123){$cont_dif++;}
    if($planta->Status_M124!=$plantaPostos_status_atual->Status_M124){$cont_dif++;}
    if($planta->Status_M125!=$plantaPostos_status_atual->Status_M125){$cont_dif++;}
    if($planta->Status_M126!=$plantaPostos_status_atual->Status_M126){$cont_dif++;}
    if($planta->Status_M127!=$plantaPostos_status_atual->Status_M127){$cont_dif++;}
    if($planta->Status_M128!=$plantaPostos_status_atual->Status_M128){$cont_dif++;}
    if($planta->Status_M129!=$plantaPostos_status_atual->Status_M129){$cont_dif++;}
    if($planta->Status_M130!=$plantaPostos_status_atual->Status_M130){$cont_dif++;}
    if($planta->Status_M131!=$plantaPostos_status_atual->Status_M131){$cont_dif++;}
    if($planta->Status_M132!=$plantaPostos_status_atual->Status_M132){$cont_dif++;}
    if($planta->Status_M133!=$plantaPostos_status_atual->Status_M133){$cont_dif++;}
    if($planta->Status_M134!=$plantaPostos_status_atual->Status_M134){$cont_dif++;}
    if($planta->Status_M135!=$plantaPostos_status_atual->Status_M135){$cont_dif++;}
    if($planta->Status_M136!=$plantaPostos_status_atual->Status_M136){$cont_dif++;}
    if($planta->Status_M137!=$plantaPostos_status_atual->Status_M137){$cont_dif++;}
    if($planta->Status_M138!=$plantaPostos_status_atual->Status_M138){$cont_dif++;}
    if($planta->Status_M139!=$plantaPostos_status_atual->Status_M139){$cont_dif++;}

    if($cont_dif > 0)
    {
        $check_num_postos = $planta->Num_postos;
        $check_num_postos++;
        //$planta->save();
        $novoposto = new PlantsPostos;

        $novoposto->Nome_da_Planta = "Posto".$check_num_postos;
        $planta->Num_postos = $check_num_postos;
        print_r($planta->Num_postos);
        $planta->save();
        
        $novoposto->Status_M120 = $planta->Status_M120;
        $novoposto->Status_M121 = $planta->Status_M121;
        $novoposto->Status_M122 = $planta->Status_M122;
        $novoposto->Status_M123 = $planta->Status_M123;
        $novoposto->Status_M124 = $planta->Status_M124;
        $novoposto->Status_M125 = $planta->Status_M125;
        $novoposto->Status_M126 = $planta->Status_M126;
        $novoposto->Status_M127 = $planta->Status_M127;
        $novoposto->Status_M128 = $planta->Status_M128;
        $novoposto->Status_M129 = $planta->Status_M129;
        $novoposto->Status_M130 = $planta->Status_M130;
        $novoposto->Status_M131 = $planta->Status_M131;
        $novoposto->Status_M132 = $planta->Status_M132;
        $novoposto->Status_M133 = $planta->Status_M133;
        $novoposto->Status_M134 = $planta->Status_M134;
        $novoposto->Status_M135 = $planta->Status_M135;
        $novoposto->Status_M136 = $planta->Status_M136;
        $novoposto->Status_M137 = $planta->Status_M137;
        $novoposto->Status_M138 = $planta->Status_M138;
        $novoposto->Status_M139 = $planta->Status_M139;
        $novoposto->save();

        //$num_postos = $planta->Num_postos;
        if($check_num_postos == 1)
        {
            //$sql = "SELECT * FROM plants_postos ORDER BY id DESC LIMIT 1";
            $sql = "SELECT * FROM plants_postos ORDER BY id DESC LIMIT 1;";
            $command = Yii::$app->db->createCommand($sql);
            $count = $command->queryScalar();
            $planta->Id_control_inicial = $count;
            $planta->save();
            print_r("id guardado<br>");
        }
        print_r("status diferente<br>");
    }
    else{print_r("status igual<br>");}
}
// inicio do programa
function exe($id_principal)
{
    $planta = Plants::findOne($id_principal);
    $check_aprendeu = $planta->aprendeu_planta;
    if(($check_aprendeu == '0')|| ($check_aprendeu == null))
    {   
        $planta->aprendeu_planta = '1';
        $planta->Num_postos = '0';
        $planta->save();
        $check_aprendeu = $planta->aprendeu_planta;
        print_r('vai para a fase 1 do aprendizado<br>'); 
    }

    if($check_aprendeu == '1')
    {      
        $num_postos = $planta->Num_postos;
        $num_saidas = $planta->Quant_saidas;
        if($num_postos < $num_saidas)
        {
            atualizar_bd_comparacao($id_principal);
        }
        else{
            $planta->aprendeu_planta = 2;
            $planta->save();
        }// número máximo de postos criados.
    }

    if($check_aprendeu == '2')
    {
        print_r('Esta planta já está pronta para a visualização de postos<br>'); 
    }       
}

?>


<div class="plants-view">
    <div id="refresh">
        <div id="time">
            <?php 
            exe($model->Id);
            ?>            
        </div>
    </div> 
    
    <script type="text/javascript">
    setInterval("my_function();",200); 
 
    function my_function(){
        $('#refresh').load(location.href + ' #time');
    }
    </script>

</div>
