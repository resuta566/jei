<?php 

use yii\helpers\Html;


$this->title = "License";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create License', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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
