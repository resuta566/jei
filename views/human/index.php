<?php 

use yii\helpers\Html;


$this->title = "User";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<?php if(Yii::$app->user->isGuest ): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a post.</span>
<?php else: ?>
<p>
    <?= Html::a('Create User',['/human/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Birth Date</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->last_name, ['/human/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->first_name ?></td>
        <td><?= $model->address ?></td>
        <td><?= $model->sex ?></td>
        <td><?= $model->bdate ?></td>
    </tr>
    <?php endforeach; ?>
</table>
