<?php

namespace app\controllers;

use app\models\Cpu;
use Yii;
use yii\rest\ActiveController;

class CpuController extends ActiveController
{
    public $modelClass = 'app\models\Cpu';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create'],$actions['view']);
        return $actions;
    }

    public function actionCreate()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $cpu = new Cpu();

        $cpu->load(Yii::$app->request->post(),'');
        $cpu->save();
            $msg = 'New CPU has been added to the database';
            return array($msg,$cpu);
        
        
    }

}