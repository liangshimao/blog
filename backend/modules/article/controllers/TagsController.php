<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-24
 * Time: 下午3:12
 */

namespace backend\modules\article\controllers;


use backend\components\ShowMessage;
use backend\controllers\BaseController;
use common\models\article\Tags;
use yii\helpers\Url;

class TagsController extends BaseController
{
    public function actionIndex()
    {
        $name = $this->request->get('name');
        $pageSize = $this->request->get('per-page', PAGESIZE);
        $info = Tags::getAll($name,$pageSize);
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
            if(Tags::addRecord($params)){
                ShowMessage::info('添加成功','',Url::toRoute(['index']),'edit');
            }
        }
        return $this->render('add');
    }

    public function actionEdit($id){
        if($this->request->isPost){
            $params = $this->request->post();
            $params['edit_time'] = $this->datetime;
            if(Tags::editRecord($id,$params)){
                ShowMessage::info('修改成功','',Url::toRoute(['index']),'edit');
            }
        }
        $model = Tags::findOne($id);
        return $this->render('edit',[
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        if(Tags::delRecord($id)){
            ShowMessage::info('删除成功','',Url::toRoute(['index']),'edit');
        }

    }
}