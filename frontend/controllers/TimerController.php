<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-27
 * Time: 下午3:00
 */

namespace frontend\controllers;


use common\components\OutPut;
use common\models\article\About;
use common\models\article\Timer;
use yii\web\Controller;
use Yii;
class TimerController extends Controller
{
    public function actionIndex()
    {
        $timer = Timer::getAll('',10);
        $model = About::getOne();
        return $this->renderPartial('index',[
            'timer' => $timer['data'],
            'model' => $model,
        ]);
    }

    public function actionPraise_ajax()
    {
        if(!Yii::$app->request->isAjax){
            OutPut::returnJson('非法请求',201);
        }
        $id = Yii::$app->request->post('um_id');
        Timer::updateAllCounters(['praise' => 1],['id' => $id]);
        $model = Timer::findOne($id);
        OutPut::returnJson('成功',200,['count' => $model->praise]);
    }
}