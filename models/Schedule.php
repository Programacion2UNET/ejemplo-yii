<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $id_schedule
 * @property int $bus
 * @property string $time
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bus', 'time'], 'required'],
            [['bus'], 'integer'],
            [['time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_schedule' => Yii::t('app', 'ID'),
            'bus' => Yii::t('app', 'Número de la Ruta'),
            'time' => Yii::t('app', 'Hora de salida'),
        ];
    }
}
