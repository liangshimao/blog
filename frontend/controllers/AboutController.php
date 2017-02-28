<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-27
 * Time: 下午1:58
 */

namespace frontend\controllers;


use common\components\OutPut;
use common\models\article\About;
use yii\web\Controller;
use Yii;
class AboutController extends Controller
{
    public function actionIndex()
    {
        $model = About::getOne();
        return $this->renderPartial('index',[
            'model' => $model,
        ]);
    }

    public function actionPraise_ajax()
    {
        if(!Yii::$app->request->isAjax){
            OutPut::returnJson('非法请求',201);
        }
        About::updateAllCounters(['praise' => 1]);
        $model = About::getOne();
        OutPut::returnJson('成功',200,['count' => $model->praise]);
    }
}