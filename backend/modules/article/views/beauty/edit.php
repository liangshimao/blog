<?php
use yii\helpers\Url;
use \kucha\ueditor\UEditor;
?>
<form name="myform" id="myform" action="<?=Url::toRoute(['/article/beauty/edit','id' => $model->id]) ?>" method="post">
    <div class="common-form">
        <table width="100%" class="table_form contentWrap">
            <tbody>
            <tr>
                <th width="80">散文标题：</th>
                <td>
                    <input class="form-control menu_source" value="<?=$model->title;?>" style="width:200px" placeholder="请输入优美散文标题" name="title">
                    <span id="nameTip" style="color:red;display:none;">请输入文章标题</span>
                </td>
            </tr>
            <tr>
                <th width="80">文章标签：</th>
                <td>
                    <select name="tag_id" id="tag_id" class="form-control" style="width:200px;">
                        <option value="">-请选择标签-</option>
                        <?php if($tagList): foreach($tagList as $key=>$val):?>
                            <option value="<?=$key;?>" <?=$model->tag_id == $key?'selected':'';?>><?=$val;?></option>
                        <?php endforeach;endif;?>
                    </select>
                </td>
            </tr>
            <tr>
                <th width="80">散文内容：</th>
                <td>
                    <?php
                    echo UEditor::widget([
                        'name'=>'content',
                        'id'=>'content',
                        'value' => $model->content,
                        'clientOptions' => [
                            //编辑区域大小
                            'initialFrameHeight' => '400',
                            'initialFrameWidth' => '800',
                            //设置语言
                            'lang' =>'zh-cn', //中文为 zh-cn
                            //定制菜单
                            'toolbars' => [
                                [
                                    'fullscreen', 'source', 'undo', 'redo', '|',
                                    'fontsize',
                                    'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'removeformat',
                                    'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|',
                                    'forecolor', 'backcolor', '|',
                                    'lineheight','|',
                                    'indent', '|','simpleupload', //单图上传
                                    'insertimage', //多图上传
                                ],
                            ]
                        ]]);
                    ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div>
        <input type="submit" value="提交" class="btn btn-success" style="margin:10px 0 10px 100px;padding:8px 15px;">
        <input type="button" value="返回" class="btn btn-success" style="margin:10px;padding:8px 15px;" onclick="goback()">
    </div>
</form>
<script>
    $("#myform").submit(function(){
        var name = $("input[name=title]").val();
        if(name == ""){
            $("#nameTip").show();
            setTimeout(function(){
                $("#nameTip").hide();
            },3000);
            return false;
        }
    });
    function goback() {
        window.location.href="<?=Url::toRoute('/article/beauty/index')?>"
    }
</script>
