<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-2-27
 * Time: 下午4:38
 */

namespace frontend\controllers;


use common\components\OutPut;
use common\models\action\Left;
use common\models\article\About;
use yii\web\Controller;
use Yii;
class LeftController extends Controller
{
    public function actionIndex()
    {
        $model = About::getOne();
        $list = Left::getAll(10);
        return $this->renderPartial('index',[
            'model' => $model,
            'list' => $list['data'],
        ]);
    }

    public function actionAdd_ajax()
    {
        if(!Yii::$app->request->isAjax){
            OutPut::returnJson('非法请求',201);
        }
        $author = Yii::$app->request->post('author','匿名');
        $comment = Yii::$app->request->post('comment');
        $comment = $this->moodToImg($comment);
        if(!$comment){
            OutPut::returnJson('失败',201);
        }
        $params = [
            'author' => $author,
            'comment' => $comment,
            'add_time' => date('Y-m-d H:i:s'),
        ];
        $model = new Left();
        $model->setAttributes($params,false);
        if($model->save()){
            OutPut::returnJson('成功',200,['id' => $model->id,'author' => $author?$author:'匿名','comment' => $comment,'date' => date('m-d',strtotime($model->add_time)),'time' => date('H:i',strtotime($model->add_time))]);
        }else{
            OutPut::returnJson('失败',201);
        }
    }


    private function moodToImg($text)
    {
//        if(!strpos($text,'/')){
//            return $text;
//        }
        if(strpos($text,'/微笑')){
            $str = str_replace('/微笑','313' , $text);
            $this->moodToImg($str);
        }
//        if(strpos($text,'/可爱')){
//            $str = str_replace('/可爱','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/2.gif" alt="/可爱" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/害羞')){
//            $str = str_replace('/害羞','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/3.gif" alt="/害羞" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/加油')){
//            $str = str_replace('/加油','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/4.gif" alt="/加油" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/亲亲')){
//            $str = str_replace('/亲亲','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/5.gif" alt="/亲亲" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/色')){
//            $str = str_replace('/色','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/6.gif" alt="/色" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/坏坏')){
//            $str = str_replace('/坏坏','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/7.gif" alt="/坏坏" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/大哭')){
//            $str = str_replace('/大哭','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/8.gif" alt="/大哭" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/不错')){
//            $str = str_replace('/不错','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/9.gif" alt="/不错" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/猪头')){
//            $str = str_replace('/猪头','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/10.gif" alt="/猪头" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/阳光')){
//            $str = str_replace('/阳光','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/11.gif" alt="/阳光" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }
//        if(strpos($text,'/喜欢')){
//            $str = str_replace('/喜欢','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/12.gif" alt="/喜欢" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
//            $this->moodToImg($str);
//        }

    }
}