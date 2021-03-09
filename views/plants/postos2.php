<?php

use app\models\Plants;
use app\models\PlantsPostos;
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\controllers\PlantsController;


/* @var $this yii\web\View */
/* @var $model app\models\Plants */

$this->title = $model->Nome_da_Planta;
$this->params['breadcrumbs'][] = ['label' => 'Plants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

function atualizaBd($id_postos,$id_principal)
{
    $planta = Plants::findOne($id_principal);
    $plantaPostos = PlantsPostos::findOne($id_postos);
    $plantaPostos->Status_M120 = $planta->Status_M120;
    $plantaPostos->Status_M121 = $planta->Status_M121;
    $plantaPostos->Status_M122 = $planta->Status_M122;
    $plantaPostos->Status_M123 = $planta->Status_M123;
    $plantaPostos->Status_M124 = $planta->Status_M124;
    $plantaPostos->Status_M125 = $planta->Status_M125;
    $plantaPostos->Status_M126 = $planta->Status_M126;
    $plantaPostos->Status_M127 = $planta->Status_M127;
    $plantaPostos->Status_M128 = $planta->Status_M128;
    $plantaPostos->Status_M129 = $planta->Status_M129;
    $plantaPostos->Status_M130 = $planta->Status_M130;
    $plantaPostos->Status_M131 = $planta->Status_M131;
    $plantaPostos->Status_M132 = $planta->Status_M132;
    $plantaPostos->Status_M133 = $planta->Status_M133;
    $plantaPostos->Status_M134 = $planta->Status_M134;
    $plantaPostos->Status_M135 = $planta->Status_M135;
    $plantaPostos->Status_M136 = $planta->Status_M136;
    $plantaPostos->Status_M137 = $planta->Status_M137;
    $plantaPostos->Status_M138 = $planta->Status_M138;
    $plantaPostos->Status_M139 = $planta->Status_M139;
    $plantaPostos->save();
}
/*
function novo_posto($idposto)
{
    $novoposto = new PlantsPostos;
    $a = Plants::findOne($idposto);
    $novoposto->Nome_da_Planta = "teste linha 3";
    $novoposto->save();
    print_r($novoposto);
}
*/
function atualizar_bd_comparacao()
{
    $cont_dif=0;
    $plantaPostos_status_prev = PlantsPostos::findOne(1);
    $plantaPostos_status_atual = PlantsPostos::findOne(2);
    if($plantaPostos_status_prev->Status_M120!=$plantaPostos_status_atual->Status_M120){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M121!=$plantaPostos_status_atual->Status_M121){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M122!=$plantaPostos_status_atual->Status_M122){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M123!=$plantaPostos_status_atual->Status_M123){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M124!=$plantaPostos_status_atual->Status_M124){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M125!=$plantaPostos_status_atual->Status_M125){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M126!=$plantaPostos_status_atual->Status_M126){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M127!=$plantaPostos_status_atual->Status_M127){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M128!=$plantaPostos_status_atual->Status_M128){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M129!=$plantaPostos_status_atual->Status_M129){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M130!=$plantaPostos_status_atual->Status_M130){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M131!=$plantaPostos_status_atual->Status_M131){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M132!=$plantaPostos_status_atual->Status_M132){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M133!=$plantaPostos_status_atual->Status_M133){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M134!=$plantaPostos_status_atual->Status_M134){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M135!=$plantaPostos_status_atual->Status_M135){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M136!=$plantaPostos_status_atual->Status_M136){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M137!=$plantaPostos_status_atual->Status_M137){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M138!=$plantaPostos_status_atual->Status_M138){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M139!=$plantaPostos_status_atual->Status_M139){$cont_dif++;}

    if($cont_dif > 0)
    {
        $novoposto = new PlantsPostos;
        $novoposto->Nome_da_Planta = "Posto1";
        $novoposto->Status_M120 = $plantaPostos_status_prev->Status_M120;
        $novoposto->Status_M121 = $plantaPostos_status_prev->Status_M121;
        $novoposto->Status_M122 = $plantaPostos_status_prev->Status_M122;
        $novoposto->Status_M123 = $plantaPostos_status_prev->Status_M123;
        $novoposto->Status_M124 = $plantaPostos_status_prev->Status_M124;
        $novoposto->Status_M125 = $plantaPostos_status_prev->Status_M125;
        $novoposto->Status_M126 = $plantaPostos_status_prev->Status_M126;
        $novoposto->Status_M127 = $plantaPostos_status_prev->Status_M127;
        $novoposto->Status_M128 = $plantaPostos_status_prev->Status_M128;
        $novoposto->Status_M129 = $plantaPostos_status_prev->Status_M129;
        $novoposto->Status_M130 = $plantaPostos_status_prev->Status_M130;
        $novoposto->Status_M131 = $plantaPostos_status_prev->Status_M131;
        $novoposto->Status_M132 = $plantaPostos_status_prev->Status_M132;
        $novoposto->Status_M133 = $plantaPostos_status_prev->Status_M133;
        $novoposto->Status_M134 = $plantaPostos_status_prev->Status_M134;
        $novoposto->Status_M135 = $plantaPostos_status_prev->Status_M135;
        $novoposto->Status_M136 = $plantaPostos_status_prev->Status_M136;
        $novoposto->Status_M137 = $plantaPostos_status_prev->Status_M137;
        $novoposto->Status_M138 = $plantaPostos_status_prev->Status_M138;
        $novoposto->Status_M139 = $plantaPostos_status_prev->Status_M139;
        $novoposto->save();

        $plantaPostos_status_atual->Status_M120 = $plantaPostos_status_prev->Status_M120;
        $plantaPostos_status_atual->Status_M121 = $plantaPostos_status_prev->Status_M121;
        $plantaPostos_status_atual->Status_M122 = $plantaPostos_status_prev->Status_M122;
        $plantaPostos_status_atual->Status_M123 = $plantaPostos_status_prev->Status_M123;
        $plantaPostos_status_atual->Status_M124 = $plantaPostos_status_prev->Status_M124;
        $plantaPostos_status_atual->Status_M125 = $plantaPostos_status_prev->Status_M125;
        $plantaPostos_status_atual->Status_M126 = $plantaPostos_status_prev->Status_M126;
        $plantaPostos_status_atual->Status_M127 = $plantaPostos_status_prev->Status_M127;
        $plantaPostos_status_atual->Status_M128 = $plantaPostos_status_prev->Status_M128;
        $plantaPostos_status_atual->Status_M129 = $plantaPostos_status_prev->Status_M129;
        $plantaPostos_status_atual->Status_M130 = $plantaPostos_status_prev->Status_M130;
        $plantaPostos_status_atual->Status_M131 = $plantaPostos_status_prev->Status_M131;
        $plantaPostos_status_atual->Status_M132 = $plantaPostos_status_prev->Status_M132;
        $plantaPostos_status_atual->Status_M133 = $plantaPostos_status_prev->Status_M133;
        $plantaPostos_status_atual->Status_M134 = $plantaPostos_status_prev->Status_M134;
        $plantaPostos_status_atual->Status_M135 = $plantaPostos_status_prev->Status_M135;
        $plantaPostos_status_atual->Status_M136 = $plantaPostos_status_prev->Status_M136;
        $plantaPostos_status_atual->Status_M137 = $plantaPostos_status_prev->Status_M137;
        $plantaPostos_status_atual->Status_M138 = $plantaPostos_status_prev->Status_M138;
        $plantaPostos_status_atual->Status_M139 = $plantaPostos_status_prev->Status_M139;
        $plantaPostos_status_atual->save();

        print_r("teste diferente");
    }

}

//atualizaBd(2,$model->Id);
$plantaPostos1 = PlantsPostos::findOne(4);
?>

<div class="plants-view">
    
    <div id="refresh">
        <div id="time">
           
           <?php
           //atualizaBd(1,$model->Id);
           //atualizar_bd_comparacao();

            ?>


            <?= DetailView::widget([
                'model' => $plantaPostos1,
                'attributes' => [
                'Id',
                'Nome_da_Planta',
                'Entrada_0',
                'Status_M100',
                'Entrada_1',
                'Status_M101',
                'Entrada_2',
                'Status_M102',
                'Entrada_3',
                'Status_M103',
                'Entrada_4',
                'Status_M104',
                'Entrada_5',
                'Status_M105',
                'Entrada_6',
                'Status_M106',
                'Entrada_7',
                'Status_M107',
                'Entrada_8',
                'Status_M108',
                'Entrada_9',
                'Status_M109',
                'Entrada_10',
                'Status_M110',
                'Entrada_11',
                'Status_M111',
                'Entrada_12',
                'Status_M112',
                'Entrada_13',
                'Status_M113',
                'Entrada_14',
                'Status_M114',
                'Entrada_15',
                'Status_M115',
                'Entrada_16',
                'Status_M116',
                'Entrada_17',
                'Status_M117',
                'Entrada_18',
                'Status_M118',
                'Entrada_19',
                'Status_M119',
                'Saída_0',
                'Status_M120',
                'Saída_1',
                'Status_M121',
                'Saída_2',
                'Status_M122',
                'Saída_3',
                'Status_M123',
                'Saída_4',
                'Status_M124',
                'Saída_5',
                'Status_M125',
                'Saída_6',
                'Status_M126',
                'Saída_7',
                'Status_M127',
                'Saída_8',
                'Status_M128',
                'Saída_9',
                'Status_M129',
                'Saída_10',
                'Status_M130',
                'Saída_11',
                'Status_M131',
                'Saída_12',
                'Status_M132',
                'Saída_13',
                'Status_M133',
                'Saída_14',
                'Status_M134',
                'Saída_15',
                'Status_M135',
                'Saída_16',
                'Status_M136',
                'Saída_17',
                'Status_M137',
                'Saída_18',
                'Status_M138',
                'Saída_19',
                'Status_M139',
                ],
            ]) ?>
        </div>
    </div>     

</div>
