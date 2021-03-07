<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlantsPostos */

$this->title = 'Create Plants Postos';
$this->params['breadcrumbs'][] = ['label' => 'Plants Postos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plants-postos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
