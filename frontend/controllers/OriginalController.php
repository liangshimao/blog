<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-27
 * Time: 下午4:28
 */

namespace frontend\controllers;


use yii\web\Controller;

class OriginalController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}