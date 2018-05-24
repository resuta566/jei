<?php

namespace app\controllers;
use yii;
use app\models\User;

class UserController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        User::findOne($id)->delete();
        return $this->redirect(['/user/index']);
    }

    public function actionIndex()
    {
        $model = User::find()->orderBy('id')->all();;

        return $this->render('index', compact('model'));
    }

    public function actionUpdate($id)
    {
        $model = User::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = User::findOne($id);
        return $this->render('view', compact('model'));
    }

}
