<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-28
 * Time: 下午2:06
 */

namespace frontend\controllers;


use yii\web\Controller;

class PositiveController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}