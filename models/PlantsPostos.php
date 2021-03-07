<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plants_postos".
 *
 * @property int $Id
 * @property string $Nome_da_Planta
 * @property string|null $Entrada_0 referente ao end %M100
 * @property int|null $Status_M100
 * @property string|null $Entrada_1
 * @property int|null $Status_M101
 * @property string|null $Entrada_2
 * @property int|null $Status_M102
 * @property string|null $Entrada_3
 * @property int|null $Status_M103
 * @property string|null $Entrada_4
 * @property int|null $Status_M104
 * @property string|null $Entrada_5
 * @property int|null $Status_M105
 * @property string|null $Entrada_6
 * @property int|null $Status_M106
 * @property string|null $Entrada_7
 * @property int|null $Status_M107
 * @property string|null $Entrada_8
 * @property int|null $Status_M108
 * @property string|null $Entrada_9
 * @property int|null $Status_M109
 * @property string|null $Entrada_10
 * @property int|null $Status_M110
 * @property string|null $Entrada_11
 * @property int|null $Status_M111
 * @property string|null $Entrada_12
 * @property int|null $Status_M112
 * @property string|null $Entrada_13
 * @property int|null $Status_M113
 * @property string|null $Entrada_14
 * @property int|null $Status_M114
 * @property string|null $Entrada_15
 * @property int|null $Status_M115
 * @property string|null $Entrada_16
 * @property int|null $Status_M116
 * @property string|null $Entrada_17
 * @property int|null $Status_M117
 * @property string|null $Entrada_18
 * @property int|null $Status_M118
 * @property string|null $Entrada_19
 * @property int|null $Status_M119
 * @property string|null $Saída_0
 * @property int|null $Status_M120
 * @property string|null $Saída_1
 * @property int|null $Status_M121
 * @property string|null $Saída_2
 * @property int|null $Status_M122
 * @property string|null $Saída_3
 * @property int|null $Status_M123
 * @property string|null $Saída_4
 * @property int|null $Status_M124
 * @property string|null $Saída_5
 * @property int|null $Status_M125
 * @property string|null $Saída_6
 * @property int|null $Status_M126
 * @property string|null $Saída_7
 * @property int|null $Status_M127
 * @property string|null $Saída_8
 * @property int|null $Status_M128
 * @property string|null $Saída_9
 * @property int|null $Status_M129
 * @property string|null $Saída_10
 * @property int|null $Status_M130
 * @property string|null $Saída_11
 * @property int|null $Status_M131
 * @property string|null $Saída_12
 * @property int|null $Status_M132
 * @property string|null $Saída_13
 * @property int|null $Status_M133
 * @property string|null $Saída_14
 * @property int|null $Status_M134
 * @property string|null $Saída_15
 * @property int|null $Status_M135
 * @property string|null $Saída_16
 * @property int|null $Status_M136
 * @property string|null $Saída_17
 * @property int|null $Status_M137
 * @property string|null $Saída_18
 * @property int|null $Status_M138
 * @property string|null $Saída_19
 * @property int|null $Status_M139
 */
class PlantsPostos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plants_postos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome_da_Planta'], 'required'],
            [['Status_M100', 'Status_M101', 'Status_M102', 'Status_M103', 'Status_M104', 'Status_M105', 'Status_M106', 'Status_M107', 'Status_M108', 'Status_M109', 'Status_M110', 'Status_M111', 'Status_M112', 'Status_M113', 'Status_M114', 'Status_M115', 'Status_M116', 'Status_M117', 'Status_M118', 'Status_M119', 'Status_M120', 'Status_M121', 'Status_M122', 'Status_M123', 'Status_M124', 'Status_M125', 'Status_M126', 'Status_M127', 'Status_M128', 'Status_M129', 'Status_M130', 'Status_M131', 'Status_M132', 'Status_M133', 'Status_M134', 'Status_M135', 'Status_M136', 'Status_M137', 'Status_M138', 'Status_M139'], 'integer'],
            [['Nome_da_Planta', 'Entrada_0', 'Entrada_1', 'Entrada_2', 'Entrada_3', 'Entrada_4', 'Entrada_5', 'Entrada_6', 'Entrada_7', 'Entrada_8', 'Entrada_9', 'Entrada_10', 'Entrada_11', 'Entrada_12', 'Entrada_13', 'Entrada_14', 'Entrada_15', 'Entrada_16', 'Entrada_17', 'Entrada_18', 'Entrada_19', 'Saída_0', 'Saída_1', 'Saída_2', 'Saída_3', 'Saída_4', 'Saída_5', 'Saída_6', 'Saída_7', 'Saída_8', 'Saída_9', 'Saída_10', 'Saída_11', 'Saída_12', 'Saída_13', 'Saída_14', 'Saída_15', 'Saída_16', 'Saída_17', 'Saída_18', 'Saída_19'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nome_da_Planta' => 'Nome Da Planta',
            'Entrada_0' => 'Entrada 0',
            'Status_M100' => 'Status M100',
            'Entrada_1' => 'Entrada 1',
            'Status_M101' => 'Status M101',
            'Entrada_2' => 'Entrada 2',
            'Status_M102' => 'Status M102',
            'Entrada_3' => 'Entrada 3',
            'Status_M103' => 'Status M103',
            'Entrada_4' => 'Entrada 4',
            'Status_M104' => 'Status M104',
            'Entrada_5' => 'Entrada 5',
            'Status_M105' => 'Status M105',
            'Entrada_6' => 'Entrada 6',
            'Status_M106' => 'Status M106',
            'Entrada_7' => 'Entrada 7',
            'Status_M107' => 'Status M107',
            'Entrada_8' => 'Entrada 8',
            'Status_M108' => 'Status M108',
            'Entrada_9' => 'Entrada 9',
            'Status_M109' => 'Status M109',
            'Entrada_10' => 'Entrada 10',
            'Status_M110' => 'Status M110',
            'Entrada_11' => 'Entrada 11',
            'Status_M111' => 'Status M111',
            'Entrada_12' => 'Entrada 12',
            'Status_M112' => 'Status M112',
            'Entrada_13' => 'Entrada 13',
            'Status_M113' => 'Status M113',
            'Entrada_14' => 'Entrada 14',
            'Status_M114' => 'Status M114',
            'Entrada_15' => 'Entrada 15',
            'Status_M115' => 'Status M115',
            'Entrada_16' => 'Entrada 16',
            'Status_M116' => 'Status M116',
            'Entrada_17' => 'Entrada 17',
            'Status_M117' => 'Status M117',
            'Entrada_18' => 'Entrada 18',
            'Status_M118' => 'Status M118',
            'Entrada_19' => 'Entrada 19',
            'Status_M119' => 'Status M119',
            'Saída_0' => 'Saída 0',
            'Status_M120' => 'Status M120',
            'Saída_1' => 'Saída 1',
            'Status_M121' => 'Status M121',
            'Saída_2' => 'Saída 2',
            'Status_M122' => 'Status M122',
            'Saída_3' => 'Saída 3',
            'Status_M123' => 'Status M123',
            'Saída_4' => 'Saída 4',
            'Status_M124' => 'Status M124',
            'Saída_5' => 'Saída 5',
            'Status_M125' => 'Status M125',
            'Saída_6' => 'Saída 6',
            'Status_M126' => 'Status M126',
            'Saída_7' => 'Saída 7',
            'Status_M127' => 'Status M127',
            'Saída_8' => 'Saída 8',
            'Status_M128' => 'Status M128',
            'Saída_9' => 'Saída 9',
            'Status_M129' => 'Status M129',
            'Saída_10' => 'Saída 10',
            'Status_M130' => 'Status M130',
            'Saída_11' => 'Saída 11',
            'Status_M131' => 'Status M131',
            'Saída_12' => 'Saída 12',
            'Status_M132' => 'Status M132',
            'Saída_13' => 'Saída 13',
            'Status_M133' => 'Status M133',
            'Saída_14' => 'Saída 14',
            'Status_M134' => 'Status M134',
            'Saída_15' => 'Saída 15',
            'Status_M135' => 'Status M135',
            'Saída_16' => 'Saída 16',
            'Status_M136' => 'Status M136',
            'Saída_17' => 'Saída 17',
            'Status_M137' => 'Status M137',
            'Saída_18' => 'Saída 18',
            'Status_M138' => 'Status M138',
            'Saída_19' => 'Saída 19',
            'Status_M139' => 'Status M139',
        ];
    }
}
