<?php
use yii\helpers\Url;
use backend\components\widgets\GoLinkPager;
use common\components\Tools;
?>

<link href="/css/form.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="/css/lunbotu.css">
<link type="text/css" rel="stylesheet" href="/css/lunbotu/style.css">
<script type="text/javascript" src="/js/jquery.min2.js"></script>
<script type="text/javascript" src="/js/pirobox.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $().piroBox({
            my_speed: 400, //animation speed
            bg_alpha: 0.1, //background opacity
            slideShow : true, // true == slideshow on, false == slideshow off
            slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
            close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox
        });
    });
</script>
<div class="search-nav">
    <form class="form-inline" action="<?= Url::toRoute('/article/timer/index') ?>" method="get">
        <div class="form-group input-group-sm">
            <label for="txtName">名称：</label>
            <input class="form-control ipt" id="txtName" placeholder="名称" name="name" value="<?= empty($name) ? '' : $name ?>">
        </div>
        <div class="form-group">
            <button class="btn btn-default" id="btnSearch" type="submit"><i class="glyphicon glyphicon-search"></i> 查询</button>
            <button class="btn btn-default" id="btnSearch" type="button" onclick="add()"><i class="glyphicon glyphicon-add"></i> 新增</button>
        </div>
    </form>
</div>
<table class="table table-bordered table-striped table-hover table-condensed">
    <thead>
    <tr>
        <th>序号</th>
        <th>内容</th>
        <th>心情</th>
        <th>图片</th>
        <th>日期</th>
        <th>赞</th>
        <th>修改时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php $k=($pages->limit) * ($pages->page);foreach ($info as $val): ?>
        <tr>
            <td style="vertical-align: middle;"><?= ++$k; ?></td>
            <td style="vertical-align: middle;"><?= Tools::cutUtf8($val->name,30); ?></td>
            <td style="vertical-align: middle;"><?= isset($val->mood->name)?$val->mood->name:'';?></td>
            <td style="vertical-align: middle;"><a href="<?= $val->img_url?>" class="pirobox_gall" title=""><img src="<?= $val->img_url?>" alt="<?= $val->name.'图片';?>" width="80" height="50"></a></td>
            <td style="vertical-align: middle;"><?= $val->time;?></td>
            <td style="vertical-align: middle;"><?= $val->praise;?></td>
            <td style="vertical-align: middle;"><?= $val->edit_time;?></td>
            <td style="vertical-align: middle;">
                <a class="btn btn-warning buttonbtn btn-info button"
                   href="javascript:omnipotent('edit','<?=Url::toRoute(['/article/timer/edit','id' => $val->id])?>', '添加新记录', 600, 450, 0);"><i
                        class="glyphicon glyphicon-edit"></i> 修改</a>

                <a class="btn btn-danger button"
                   href="javascript:confirmurl('<?= Url::toRoute(['/article/timer/delete', 'id' => $val->id]); ?>', '确定要刪除此记录吗?')"><i
                        class="glyphicon glyphicon-trash"></i> 删除</a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="pull-right">
    <?php echo GoLinkPager::widget(['pagination' => $pages,'go' => false]); ?>
</div>
<script>
    function add()
    {
        omnipotent('edit','<?=Url::toRoute('/article/timer/add')?>', '添加新记录', 600, 450, 0);
    }
</script>

