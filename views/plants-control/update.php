<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlantsControl */

$this->title = 'Update Plants Control: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Plants Controls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plants-control-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
