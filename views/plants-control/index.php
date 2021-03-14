<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlantsControlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plants Controls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plants-control-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Plants Control', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Nome_da_Planta',
            'Quant_entradas',
            'Quant_saidas',
            'Quant_postos',
            //'Check_postos',
            //'Aprendeu_planta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
