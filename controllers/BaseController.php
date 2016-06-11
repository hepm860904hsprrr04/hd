<?php

namespace app\controllers;

class BaseController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
