<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plants_control".
 *
 * @property int $Id
 * @property string|null $Nome_da_Planta
 * @property string|null $Quant_entradas
 * @property string|null $Quant_saidas
 * @property string|null $Quant_postos
 * @property string|null $Check_postos
 * @property string|null $Aprendeu_planta
 */
class PlantsControl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plants_control';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome_da_Planta', 'Quant_entradas', 'Quant_saidas', 'Quant_postos', 'Check_postos', 'Aprendeu_planta'], 'string', 'max' => 50],
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
            'Quant_entradas' => 'Quant Entradas',
            'Quant_saidas' => 'Quant Saidas',
            'Quant_postos' => 'Quant Postos',
            'Check_postos' => 'Check Postos',
            'Aprendeu_planta' => 'Aprendeu Planta',
        ];
    }
}
