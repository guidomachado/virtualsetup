<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlantsControl */

$this->title = 'Create Plants Control';
$this->params['breadcrumbs'][] = ['label' => 'Plants Controls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plants-control-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
