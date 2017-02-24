<?php
use yii\helpers\Url;
?>
<div class="pad_10">
    <div class="common-form">
        <form name="myform" action="<?php echo Url::toRoute(['/article/tags/edit','id'=>$model->id]); ?>" method="post" id="myform">
            <table width="100%" class="table_form contentWrap">
                <tr>
                    <th width="100">标签名：</th>
                    <td><input type="text" name="name" value="<?=$model->name;?>" class="form-control-table width-160" id="name" style="display: inline" ></td>
                </tr>
            </table>
            <div style="display: none;" class="btn"><input type="submit" id="dosubmit" class="dialog" name="dosubmit" value="提交"/></div>
        </form>
    </div>
</div>
<script>
    $(function(){
        $.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){
            window.top.art.dialog({content: msg, lock: true, width: '250', height: '80'}, function () {
                this.close();
                $(obj).focus();
            })
        }});

        $("#name").formValidator({onshow:"请输入标签名",onfocus:"请输入标签名",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"标签名不能为空"});


    });
</script>
