<?php

use app\models\Plants;
use yii\helpers\Html;
use app\controllers\PlantsController;
use app\models\PlantsPostos;

/* @var $this yii\web\View */
/* @var $model app\models\Plants */

$this->title = 'Virtualização';
$this->params['breadcrumbs'][] = $this->title;

$planta = Plants::findOne($model->Id);

$sql = "SELECT * FROM plants_postos ORDER BY id DESC LIMIT 1;";
$command = Yii::$app->db->createCommand($sql);
$count = $command->queryScalar();
print_r($count);

//"DELETE FROM virtualsetup.plants_postos WHERE (`id` != 1);";

//"ALTER TABLE plants_postos AUTO_INCREMENT = 1";

?>
<div>

</div>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

    </body>
</html>