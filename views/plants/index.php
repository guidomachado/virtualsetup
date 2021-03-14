<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlantsControlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plants-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Plants', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Nome_da_Planta',
            'IP_da_Planta',
            'Porta_de_Acesso',
            'Entrada_0',
            //'Status_M100',
            //'Entrada_1',
            //'Status_M101',
            //'Entrada_2',
            //'Status_M102',
            //'Entrada_3',
            //'Status_M103',
            //'Entrada_4',
            //'Status_M104',
            //'Entrada_5',
            //'Status_M105',
            //'Entrada_6',
            //'Status_M106',
            //'Entrada_7',
            //'Status_M107',
            //'Entrada_8',
            //'Status_M108',
            //'Entrada_9',
            //'Status_M109',
            //'Entrada_10',
            //'Status_M110',
            //'Entrada_11',
            //'Status_M111',
            //'Entrada_12',
            //'Status_M112',
            //'Entrada_13',
            //'Status_M113',
            //'Entrada_14',
            //'Status_M114',
            //'Entrada_15',
            //'Status_M115',
            //'Entrada_16',
            //'Status_M116',
            //'Entrada_17',
            //'Status_M117',
            //'Entrada_18',
            //'Status_M118',
            //'Entrada_19',
            //'Status_M119',
            //'Saída_0',
            //'Status_M120',
            //'Saída_1',
            //'Status_M121',
            //'Saída_2',
            //'Status_M122',
            //'Saída_3',
            //'Status_M123',
            //'Saída_4',
            //'Status_M124',
            //'Saída_5',
            //'Status_M125',
            //'Saída_6',
            //'Status_M126',
            //'Saída_7',
            //'Status_M127',
            //'Saída_8',
            //'Status_M128',
            //'Saída_9',
            //'Status_M129',
            //'Saída_10',
            //'Status_M130',
            //'Saída_11',
            //'Status_M131',
            //'Saída_12',
            //'Status_M132',
            //'Saída_13',
            //'Status_M133',
            //'Saída_14',
            //'Status_M134',
            //'Saída_15',
            //'Status_M135',
            //'Saída_16',
            //'Status_M136',
            //'Saída_17',
            //'Status_M137',
            //'Saída_18',
            //'Status_M138',
            //'Saída_19',
            //'Status_M139',
            //'aprendeu_planta',
            //'Id_control',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
