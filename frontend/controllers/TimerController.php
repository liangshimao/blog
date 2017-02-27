<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-27
 * Time: 下午3:00
 */

namespace frontend\controllers;


use yii\web\Controller;

class TimerController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}