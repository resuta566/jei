<?php 

use yii\helpers\Html;


$this->title = "License";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a License.</span>
<?php else: ?>
<p>
    <?= Html::a('Create License',['/license/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>License No.</th>
        <th>Restriction</th>
        <th>Condition</th>
        <th>Expiration Date</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/license/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->restriction ?></td>
        <td><?= $model->condition ?></td>
        <td><?= $model->expireDate ?></td>
    </tr>
    <?php endforeach; ?>
</table>
