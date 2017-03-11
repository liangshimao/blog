<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-28
 * Time: 下午2:06
 */

namespace frontend\controllers;


use common\components\OutPut;
use common\models\article\About;
use common\models\article\Positive;
use yii\web\Controller;
use Yii;
class PositiveController extends Controller
{
    public function actionIndex()
    {
        $list = Positive::getAll('',PAGESIZE);
        $model = About::getOne();
        return $this->renderPartial('index',[
            'list' => $list['data'],
            'model' => $model,
        ]);
    }

    public function actionDetail($id)
    {
        $about =  About::getOne();
        $model = Positive::findOne($id);
        return $this->renderPartial('detail', [
            'model' => $model,
            'about' => $about,
        ]);
    }

    public function actionPraise_ajax()
    {
        if(!Yii::$app->request->isAjax){
            OutPut::returnJson('非法请求',201);
        }
        $id = Yii::$app->request->post('um_id');
        Positive::updateAllCounters(['praise' => 1],['id' => $id]);
        $model = Positive::findOne($id);
        OutPut::returnJson('成功',200,['count' => $model->praise]);
    }
}