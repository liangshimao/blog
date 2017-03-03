<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-28
 * Time: 下午2:03
 */

namespace frontend\controllers;


use common\components\OutPut;
use common\models\article\About;
use common\models\article\Beauty;
use yii\web\Controller;
use Yii;
class BeautyController extends Controller
{
    public function actionIndex()
    {
        $list = Beauty::getAll('',5);
        $model = About::getOne();
        return $this->renderPartial('index',[
            'list' => $list['data'],
            'model' => $model,
        ]);
    }

    public function actionDetail($id)
    {
        $about =  About::getOne();
        $model = Beauty::findOne($id);
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
        Beauty::updateAllCounters(['praise' => 1],['id' => $id]);
        $model = Beauty::findOne($id);
        OutPut::returnJson('成功',200,['count' => $model->praise]);
    }
}