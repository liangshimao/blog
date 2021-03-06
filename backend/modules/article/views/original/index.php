<?php
use yii\helpers\Url;
use backend\components\widgets\GoLinkPager;
use common\components\Tools;
?>

<link href="/css/form.css" rel="stylesheet">
<div class="search-nav">
    <form class="form-inline" action="<?= Url::toRoute('/article/original/index') ?>" method="get">
        <div class="form-group input-group-sm">
            <label for="txtName">标题：</label>
            <input class="form-control ipt" id="txtName" placeholder="标题" name="name" value="<?= empty($name) ? '' : $name ?>">
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
        <th>原创文章标题</th>
        <th>原创文章标签</th>
        <th>原创文章内容</th>
        <th>修改时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php $k=($pages->limit) * ($pages->page);foreach ($info as $val): ?>
        <tr>
            <td><?= ++$k; ?></td>
            <td><?= $val->title; ?></td>
            <td><?=isset($val->tag->name)?$val->tag->name:'';?></td>
            <td><?= Tools::cutUtf8(strip_tags($val->content),30);?></td>
            <td><?= $val->edit_time;?></td>
            <td>
                <a class="btn btn-success buttonbtn btn-info button"
                   href='javascript:window.location.href="<?=Url::toRoute(['/article/original/info?id=', 'id' => $val->id]);?>"'><i
                        class="glyphicon glyphicon-zoom-in"></i> 查看</a>
                <a class="btn btn-warning buttonbtn btn-info button"
                   href='javascript:window.location.href="<?php echo Url::toRoute(['/article/original/edit', 'id' => $val->id]);?>"'><i
                        class="glyphicon glyphicon-edit"></i> 修改</a>

                <a class="btn btn-danger button"
                   href="javascript:confirmurl('<?= Url::toRoute(['/article/original/delete', 'id' => $val->id]); ?>', '确定要刪除<?=$val->title?>吗?')"><i
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
    function add(){
        window.location.href = "<?=Url::toRoute('/article/original/add')?>";
    }
</script>

