<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-27
 * Time: 下午1:58
 */

namespace frontend\controllers;


use yii\web\Controller;

class AboutController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}