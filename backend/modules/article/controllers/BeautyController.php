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
use common\models\article\Beauty;
use common\models\article\Tags;
use yii\helpers\Url;

class BeautyController extends BaseController
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
        $info = Beauty::getAll($name,$pageSize);
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
            if(Beauty::addRecord($params)){
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
            if(Beauty::editRecord($id,$params)){
                return $this->redirect(['index']);
            }
        }
        $model = Beauty::findOne($id);
        $tagList = Tags::getList();
        return $this->render('edit',[
            'model' => $model,
            'tagList' => $tagList,
        ]);
    }

    public function actionDelete($id)
    {
        if(Beauty::delRecord($id)){
            ShowMessage::info('删除成功','',Url::toRoute(['index']),'edit');
        }

    }
}