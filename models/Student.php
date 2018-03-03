<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id_student
 * @property string $name
 * @property string $identification
 * @property string $carreer
 * @property int $id_schedule
 *
 * @property Schedule $schedule
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'identification', 'id_schedule'], 'required'],
            [['id_schedule'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['identification'], 'string', 'max' => 10],
            [['carreer'], 'string', 'max' => 50],
            [['id_schedule'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['id_schedule' => 'id_schedule']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_student' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Nombre'),
            'identification' => Yii::t('app', 'Cédula'),
            'carreer' => Yii::t('app', 'Carrera'),
            'id_schedule' => Yii::t('app', 'Horario de salida'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedule()
    {
        return $this->hasOne(Schedule::className(), ['id_schedule' => 'id_schedule']);
    }
}
