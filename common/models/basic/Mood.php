<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 17-3-2
 * Time: 上午10:41
 */

namespace common\models\basic;


use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class Mood extends ActiveRecord
{
    public static function tableName()
    {
        return 'basic_mood';
    }

    public static function tableDesc(){
        return '心情表';
    }
    
    public static function getList()
    {
        $list = self::find()->asArray()->all();
        return ArrayHelper::map($list,'id' ,'name' );
    }
}