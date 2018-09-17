<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
?>

<div class="license-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'restriction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condition')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
    <label for="register_date">Registration Date</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'register_date',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
    </div>

    <div class="form-group">
    <label for="expireDate">Expiration Date</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'expireDate',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
