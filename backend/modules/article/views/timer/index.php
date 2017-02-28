<?php
use yii\helpers\Url;
use backend\components\widgets\GoLinkPager;
use common\components\Tools;
?>

<link href="/css/form.css" rel="stylesheet">
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
        <th>日期</th>
        <th>赞</th>
        <th>修改时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php $k=($pages->limit) * ($pages->page);foreach ($info as $val): ?>
        <tr>
            <td><?= ++$k; ?></td>
            <td><?= Tools::cutUtf8($val->name,30); ?></td>
            <td><?= $val->time;?></td>
            <td><?= $val->praise;?></td>
            <td><?= $val->edit_time;?></td>
            <td>
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

