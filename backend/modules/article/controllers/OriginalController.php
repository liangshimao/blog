<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-24
 * Time: 下午3:13
 */

namespace backend\modules\article\controllers;


use backend\components\ShowMessage;
use backend\controllers\BaseController;
use common\models\article\Original;
use common\models\article\Tags;
use yii\helpers\Url;

class OriginalController extends BaseController
{
    public function actions()
    {
        return [
            'upload' => [
                'class' => 'kucha\ueditor\UEditorAction',
                'config'=>[
                    'imageManagerListPath'=>'/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}',
                    'imageUrlPrefix' => MPS_URL]
            ]
        ];
    }
    public function actionIndex()
    {
        $name = $this->request->get('name');
        $pageSize = $this->request->get('per-page', PAGESIZE);
        $info = Original::getAll($name,$pageSize);
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
            if(Original::addRecord($params)){
                return $this->redirect(['index']);
            }
        }
        $tagList = Tags::getList();
        return $this->render('add',[
            'tagList' => $tagList,
        ]);
    }

    public function actionEdit($id){
        if($this->request->isPost){
            $params = $this->request->post();
            $params['add_time'] = $this->datetime;
            $params['edit_time'] = $this->datetime;
            if(Original::editRecord($id,$params)){
                return $this->redirect(['index']);
            }
        }
        $model = Original::findOne($id);
        $tagList = Tags::getList();
        return $this->render('edit',[
            'model' => $model,
            'tagList' => $tagList,
        ]);
    }

    public function actionDelete($id)
    {
        if(Original::delRecord($id)){
            ShowMessage::info('删除成功','',Url::toRoute(['index']),'edit');
        }

    }
}