<?php
use app\models\Plants;
use yii\db\Connection;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Plants */

$this->title = 'Planta virtualizada '. $model->Id;
$this->params['breadcrumbs'][] = $this->title;

//\yii\web\YiiAsset::register($this);
?>

<div class="plants-virtual">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <h2>Equipe Virtual Setup</h2>
    </p>
   
</div>