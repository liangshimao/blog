<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-27
 * Time: 下午2:07
 */

namespace backend\modules\article\controllers;


use backend\components\ShowMessage;
use backend\controllers\BaseController;
use common\components\Image;
use common\components\OutPut;
use common\models\article\Timer;
use common\models\basic\Mood;
use yii\helpers\Url;

class TimerController extends BaseController
{
    public function actionIndex()
    {
        $name = $this->request->get('name');
        $pageSize = $this->request->get('per-page', PAGESIZE);
        $info = Timer::getAll($name,$pageSize);
        return $this->render('index', [
            'info' => $info['data'],
            'name' => $name,
            'pages' => $info['pages']
        ]);
    }

    public function actionAdd()
    {
        if($this->request->isPost){
            $params = $this->request->post();
            $params['add_time'] = $this->datetime;
            $params['edit_time'] = $this->datetime;
            if(Timer::addRecord($params)){
                ShowMessage::info('添加成功','',Url::toRoute(['index']),'edit');
            }
        }
        $moodList = Mood::getList();
        return $this->render('add',[
            'moodList' => $moodList,
        ]);
    }

    public function actionEdit($id){
        if($this->request->isPost){
            $params = $this->request->post();
            $params['edit_time'] = $this->datetime;
            if(Timer::editRecord($id,$params)){
                ShowMessage::info('添加成功','',Url::toRoute(['index']),'edit');
            }
        }
        $moodList = Mood::getList();
        $model = Timer::findOne($id);
        return $this->render('edit',[
            'model' => $model,
            'moodList' => $moodList,
        ]);
    }

    public function actionDelete($id)
    {
        if(Timer::delRecord($id)){
            ShowMessage::info('删除成功','',Url::toRoute(['index']),'edit');
        }
    }

    /**
     * ajax上传图片
     */
    public function actionUpload_ajax()
    {
        $imgPath = Image::upload($_FILES['thumb_file']);
        if(!empty($imgPath)){
            OutPut::returnJson('上传成功',200,['url' => $imgPath]);
        }else{
            OutPut::returnJson('上传失败',201);
        }
    }
}