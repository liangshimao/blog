<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-28
 * Time: 下午2:03
 */

namespace frontend\controllers;


use yii\web\Controller;

class BeautyController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}