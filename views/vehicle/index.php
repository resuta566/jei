<?php 

use yii\helpers\Html;


$this->title = "Vehicle";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a Vehicle.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Vehicle',['/vehicle/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>Make</th>
        <th>Model</th>
        <th>Plate Number</th>
        <th>Year</th>
        <th>Color</th>
        <th>Registered Date</th>
        <th>Expiration Date</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->make, ['/vehicle/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->model ?></td>
        <td><?= $model->plate_no ?></td>
        <td><?= $model->year ?></td>
        <td><?= $model->color ?></td>
        <td><?= $model->register_date ?></td>
        <td><?= $model->expiration_date ?></td>
    </tr>
    <?php endforeach; ?>
</table>
