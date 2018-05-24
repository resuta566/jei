<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Vehicle: $model->make";
$this->params['breadcrumbs'][] = ['label'=>'Vehicle', 'url'=>['/vehicle/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<?php if(Yii::$app->user->isGuest): ?>

<?php echo("  ")?>

<?php else: ?>

<span class="pull-left">
    <?= Html::a('Update Vehicle',
        ['/vehicle/update','id'=>$model->id],
        ['class'=>'btn btn-primary']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this Vehicle?',
            'method' => 'post',
        ],
    ]) ?>
</span>
<?php endif;?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'make',
        'model',
        'plate_no',
        'year',
        'color',
        'register_date',
        'expiration_date'
    ]
]);