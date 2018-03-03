<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bus')->textInput() ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?php /*= DatePicker::widget([
    'model' => $model,
    'attribute' => 'time',
    'language' => 'es',
    'dateFormat' => 'php:Y-m-d',
]) */ x?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
