<?php
namespace frontend\controllers;
use common\components\OutPut;
use common\models\article\About;
use common\models\article\Original;
use yii\web\Controller;
use Yii;
class OriginalController extends Controller
{
    public function actionIndex()
    {
        $list = Original::getAll('',PAGESIZE);
        $model = About::getOne();
        return $this->renderPartial('index',[
            'list' => $list['data'],
            'model' => $model,
        ]);
    }

    public function actionDetail($id)
    {
        $about =  About::getOne();
        $model = Original::findOne($id);
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
        Original::updateAllCounters(['praise' => 1],['id' => $id]);
        $model = Original::findOne($id);
        OutPut::returnJson('成功',200,['count' => $model->praise]);
    }
}