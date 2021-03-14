<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlantsControlSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plants-control-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Nome_da_Planta') ?>

    <?= $form->field($model, 'Quant_entradas') ?>

    <?= $form->field($model, 'Quant_saidas') ?>

    <?= $form->field($model, 'Quant_postos') ?>

    <?php // echo $form->field($model, 'Check_postos') ?>

    <?php // echo $form->field($model, 'Aprendeu_planta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
