<?php

namespace app\controllers;

class AccessController extends \yii\web\Controller
{
    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionRecovery()
    {
        return $this->render('recovery');
    }

    public function actionSign()
    {
        return $this->render('sign');
    }

}
