<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "User: $model->first_name";
$this->params['breadcrumbs'][] = ['label'=>'User', 'url'=>['/user/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this user?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'license_id',
        'vehicle_id',
        'last_name',
        'first_name',
        'address',
        'phone',
        'sex',
        'weight',
        'height',
        'nationality',
        'age'
    ]
]);