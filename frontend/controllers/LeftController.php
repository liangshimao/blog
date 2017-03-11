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
        $list = Left::getAll(PAGESIZE);
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
            OutPut::returnJson('失败，comment为空',201);
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
        if(strpos($text,'/微笑') === false && strpos($text,'/可爱') ===false && strpos($text,'/害羞') ===false && strpos($text,'/加油') ===false && strpos($text,'/亲亲') ===false && strpos($text,'/色') ===false && strpos($text,'/坏坏') ===false && strpos($text,'/大哭') ===false && strpos($text,'/不错') ===false && strpos($text,'/猪头') ===false && strpos($text,'/阳光') ===false && strpos($text,'/喜欢') ===false){
            return $text;
        }

        if(strpos($text,'/微笑') !== false){
            $str = str_replace('/微笑','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/1.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }

        if(strpos($text,'/可爱') !== false){
            $str = str_replace('/可爱','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/2.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/害羞') !== false){
            $str = str_replace('/害羞','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/3.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/加油') !== false){
            $str = str_replace('/加油','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/4.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/亲亲') !== false){
            $str = str_replace('/亲亲','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/5.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/色') !== false){
            $str = str_replace('/色','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/6.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/坏坏') !== false){
            $str = str_replace('/坏坏','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/7.gif"  class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/大哭') !== false){
            $str = str_replace('/大哭','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/8.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/不错') !== false){
            $str = str_replace('/不错','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/9.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/猪头') !== false){
            $str = str_replace('/猪头','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/10.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/阳光') !== false){
            $str = str_replace('/阳光','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/11.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }
        if(strpos($text,'/喜欢') !== false){
            $str = str_replace('/喜欢','<img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/12.gif" class="wp-smiley" style="height: 1em; max-height: 1em;" />' , $text);
            return $this->moodToImg($str);
        }

    }
}