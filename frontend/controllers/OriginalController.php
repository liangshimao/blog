<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-27
 * Time: 下午4:28
 */

namespace frontend\controllers;


use common\components\OutPut;
use common\models\article\Original;
use yii\web\Controller;
use Yii;
class OriginalController extends Controller
{
    public function actionIndex()
    {
        $list = Original::getAll('',5);
        return $this->renderPartial('index',[
            'list' => $list['data'],
        ]);
    }

    public function actionDetail($id)
    {
        $model = Original::findOne($id);
        return $this->renderPartial('detail', [
            'model' => $model,
        ]);
    }

    public function actionPraise_ajax()
    {
        if(!Yii::$app->request->isAjax){
            OutPut::returnJson('非法请求',201);
        }
        $id = Yii::$app->request->post('um_id');
        Original::updateAllCounters(['praise' => 1],['id' => $id]);
        $model = Original::findOne($id);
        OutPut::returnJson('成功',200,['count' => $model->praise]);
    }
}