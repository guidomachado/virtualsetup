<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlantsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plants-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Nome_da_Planta') ?>

    <?= $form->field($model, 'IP_da_Planta') ?>

    <?= $form->field($model, 'Porta_de_Acesso') ?>

    <?= $form->field($model, 'Entrada_0') ?>

    <?php // echo $form->field($model, 'Status_M100') ?>

    <?php // echo $form->field($model, 'Entrada_1') ?>

    <?php // echo $form->field($model, 'Status_M101') ?>

    <?php // echo $form->field($model, 'Entrada_2') ?>

    <?php // echo $form->field($model, 'Status_M102') ?>

    <?php // echo $form->field($model, 'Entrada_3') ?>

    <?php // echo $form->field($model, 'Status_M103') ?>

    <?php // echo $form->field($model, 'Entrada_4') ?>

    <?php // echo $form->field($model, 'Status_M104') ?>

    <?php // echo $form->field($model, 'Entrada_5') ?>

    <?php // echo $form->field($model, 'Status_M105') ?>

    <?php // echo $form->field($model, 'Entrada_6') ?>

    <?php // echo $form->field($model, 'Status_M106') ?>

    <?php // echo $form->field($model, 'Entrada_7') ?>

    <?php // echo $form->field($model, 'Status_M107') ?>

    <?php // echo $form->field($model, 'Entrada_8') ?>

    <?php // echo $form->field($model, 'Status_M108') ?>

    <?php // echo $form->field($model, 'Entrada_9') ?>

    <?php // echo $form->field($model, 'Status_M109') ?>

    <?php // echo $form->field($model, 'Entrada_10') ?>

    <?php // echo $form->field($model, 'Status_M110') ?>

    <?php // echo $form->field($model, 'Entrada_11') ?>

    <?php // echo $form->field($model, 'Status_M111') ?>

    <?php // echo $form->field($model, 'Entrada_12') ?>

    <?php // echo $form->field($model, 'Status_M112') ?>

    <?php // echo $form->field($model, 'Entrada_13') ?>

    <?php // echo $form->field($model, 'Status_M113') ?>

    <?php // echo $form->field($model, 'Entrada_14') ?>

    <?php // echo $form->field($model, 'Status_M114') ?>

    <?php // echo $form->field($model, 'Entrada_15') ?>

    <?php // echo $form->field($model, 'Status_M115') ?>

    <?php // echo $form->field($model, 'Entrada_16') ?>

    <?php // echo $form->field($model, 'Status_M116') ?>

    <?php // echo $form->field($model, 'Entrada_17') ?>

    <?php // echo $form->field($model, 'Status_M117') ?>

    <?php // echo $form->field($model, 'Entrada_18') ?>

    <?php // echo $form->field($model, 'Status_M118') ?>

    <?php // echo $form->field($model, 'Entrada_19') ?>

    <?php // echo $form->field($model, 'Status_M119') ?>

    <?php // echo $form->field($model, 'Saída_0') ?>

    <?php // echo $form->field($model, 'Status_M120') ?>

    <?php // echo $form->field($model, 'Saída_1') ?>

    <?php // echo $form->field($model, 'Status_M121') ?>

    <?php // echo $form->field($model, 'Saída_2') ?>

    <?php // echo $form->field($model, 'Status_M122') ?>

    <?php // echo $form->field($model, 'Saída_3') ?>

    <?php // echo $form->field($model, 'Status_M123') ?>

    <?php // echo $form->field($model, 'Saída_4') ?>

    <?php // echo $form->field($model, 'Status_M124') ?>

    <?php // echo $form->field($model, 'Saída_5') ?>

    <?php // echo $form->field($model, 'Status_M125') ?>

    <?php // echo $form->field($model, 'Saída_6') ?>

    <?php // echo $form->field($model, 'Status_M126') ?>

    <?php // echo $form->field($model, 'Saída_7') ?>

    <?php // echo $form->field($model, 'Status_M127') ?>

    <?php // echo $form->field($model, 'Saída_8') ?>

    <?php // echo $form->field($model, 'Status_M128') ?>

    <?php // echo $form->field($model, 'Saída_9') ?>

    <?php // echo $form->field($model, 'Status_M129') ?>

    <?php // echo $form->field($model, 'Saída_10') ?>

    <?php // echo $form->field($model, 'Status_M130') ?>

    <?php // echo $form->field($model, 'Saída_11') ?>

    <?php // echo $form->field($model, 'Status_M131') ?>

    <?php // echo $form->field($model, 'Saída_12') ?>

    <?php // echo $form->field($model, 'Status_M132') ?>

    <?php // echo $form->field($model, 'Saída_13') ?>

    <?php // echo $form->field($model, 'Status_M133') ?>

    <?php // echo $form->field($model, 'Saída_14') ?>

    <?php // echo $form->field($model, 'Status_M134') ?>

    <?php // echo $form->field($model, 'Saída_15') ?>

    <?php // echo $form->field($model, 'Status_M135') ?>

    <?php // echo $form->field($model, 'Saída_16') ?>

    <?php // echo $form->field($model, 'Status_M136') ?>

    <?php // echo $form->field($model, 'Saída_17') ?>

    <?php // echo $form->field($model, 'Status_M137') ?>

    <?php // echo $form->field($model, 'Saída_18') ?>

    <?php // echo $form->field($model, 'Status_M138') ?>

    <?php // echo $form->field($model, 'Saída_19') ?>

    <?php // echo $form->field($model, 'Status_M139') ?>

    <?php // echo $form->field($model, 'aprendeu_planta') ?>

    <?php // echo $form->field($model, 'Id_control') ?>

    <?php // echo $form->field($model, 'Num_postos') ?>

    <?php // echo $form->field($model, 'Quant_entradas') ?>

    <?php // echo $form->field($model, 'Quant_saidas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
