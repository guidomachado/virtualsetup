<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Plants;

/* @var $this yii\web\View */
/* @var $model app\models\Plants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome_da_Planta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IP_da_Planta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Porta_de_Acesso')->textInput() ?>

    <?= $form->field($model, 'Entrada_0')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_1')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')); ?>
    
    <?= $form->field($model, 'Entrada_2')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_3')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_4')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_5')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_6')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_7')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_8')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_9')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_10')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_11')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_12')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_13')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_14')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_15')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_16')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_17')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_18')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>

    <?= $form->field($model, 'Entrada_19')->dropDownList(Plants::getValidEntradas(),
    array('prompt'=>'Selecione a entrada')) ?>


    <hr>

    <?= $form->field($model, 'Saída_0')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_1')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_2')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_3')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_4')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_5')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_6')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_7')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_8')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_9')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_10')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_11')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_12')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_13')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_14')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_15')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_16')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_17')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_18')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <?= $form->field($model, 'Saída_19')->dropDownList(Plants::getValidSaidas(),
    array('prompt'=>'Selecione a saída')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
