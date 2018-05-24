<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\License;
use app\models\Vehicle;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use dosamigos\datepicker\DatePicker;

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'license_id')->dropDownList(ArrayHelper::map(
            License::find()->asArray()->all(), 'id','id'))?>

    <?= $form->field($model, 'vehicle_id')->dropDownList(ArrayHelper::map(
            Vehicle::find()->asArray()->all(), 'id','make'))?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->dropdownList(['M' => 'Male', 'F' => 'Female'], ['prompt' => '--Select Gender--']) ?>

    <div class="form-group">
    <label for="bdate">Birth Date</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'bdate',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
    </div>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
	