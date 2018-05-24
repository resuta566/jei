<?php

use yii\helpers\Html;

$this->title = "Update Vehicle: $model->make";
$this->params['breadcrumbs'][] = ['label' => 'Vehicle', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->make, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehicle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
