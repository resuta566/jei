<?php 

use yii\helpers\Html;


$this->title = "User";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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
