<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlantsControl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plants-control-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome_da_Planta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Quant_entradas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Quant_saidas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Quant_postos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Check_postos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Aprendeu_planta')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
