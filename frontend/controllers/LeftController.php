<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-27
 * Time: 下午4:38
 */

namespace frontend\controllers;


use yii\web\Controller;

class LeftController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}