<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "View License No. $model->id";
$this->params['breadcrumbs'][] = ['label'=>'License', 'url'=>['/license/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<?php if(Yii::$app->user->isGuest): ?>

<?php echo("  ")?>

<?php else: ?>

<span class="pull-left">
    <?= Html::a('Update License',
        ['/license/update','id'=>$model->id],
        ['class'=>'btn btn-primary']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this License?',
            'method' => 'post',
        ],
    ]) ?>
</span>
<?php endif;?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'restriction',
        'condition',
        'register_date',
        'expireDate'
    ]
]);