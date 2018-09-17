<?php
use yii\widgets\DetailView;
use app\models\User;
use yii\helpers\Html;

$this->title = "User: $model->first_name";
$this->params['breadcrumbs'][] = ['label'=>'User', 'url'=>['/human/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<?php if(Yii::$app->user->isGuest): ?>

<?php echo("  ")?>

<?php else: ?>

<span class="pull-left">
    <?= Html::a('Update User',
        ['/human/update','id'=>$model->id],
        ['class'=>'btn btn-primary']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this User?',
            'method' => 'post',
        ],
    ]) ?>
</span>
<?php endif;?>
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