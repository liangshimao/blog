<?php
use yii\helpers\Url;
?>
<div class="pad_10">
    <div class="common-form">
        <form name="myform" action="<?php echo Url::toRoute('/article/timer/add'); ?>" method="post" id="myform" enctype="multipart/form-data">
            <table width="100%" class="table_form contentWrap">
                <tr>
                    <th width="100">添加日期：</th>
                    <td>
                        <div class='input-group date' style="width: 220px">
                            <input type='text' class="form-control start_date" id="time" name="time" placeholder="购买日期" size="10"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th width="80">心  情：</th>
                    <td>
                        <select name="mood_id" id="mood_id" class="form-control" style="width:200px;display: inline-block">
                            <option value="">-请选择心情-</option>
                            <?php if($moodList): foreach($moodList as $key=>$val):?>
                                <option value="<?=$key;?>"><?=$val;?></option>
                            <?php endforeach;endif;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th width="100">头像信息：</th>
                    <td>
                        <img src="" id="thumb" width="200" height="150">
                        <a href="javascript:;" style="margin-left:15px;" id="thumb_select">>>点击这里选择图片</a>
                        <input type="hidden" name="img_url" value="" id="thumb_hidden">
                        <input type="file" id="thumb_file" name="thumb_file" style="display: none;">
                    </td>
                </tr>
                <tr>
                    <th width="120">记录内容：</th>
                    <td><textarea class="inputStyle moretxt width-160" id="name" placeholder="请输入内容" name="name" style="display: inline; width: 350px; height: 120px;" maxlength="100"></textarea></td>

                </tr>
            </table>
            <div style="display: none;" class="btn"><input type="submit" id="dosubmit" class="dialog" name="dosubmit" value="提交"/></div>
        </form>
    </div>
</div>
<script type="text/javascript" src="/jedate/jedate.js"></script>
<script src="/js/ajaxfileupload.js"></script>
<script>
    //日期插件
    var myDate = new Date();
    var monthStr = myDate.getMonth()+1;
    var dateStr = myDate.getFullYear() +'-'+ monthStr + '-' + myDate.getDate() + " 23:59:59";

    $(function(){
        $("#thumb_select").click(function(){
            $("#thumb_file").click();
        });

        $("#thumb_file").change(function(){
            $.ajaxFileUpload({
                url:"<?=Url::toRoute('/article/timer/upload_ajax')?>",
                dataType:"text",
                secureuri: false,
                fileElementId:"thumb_file",
                success:function(data){
                    var datas = jQuery.parseJSON(data);
                    $("#thumb").attr("src",datas.data.url);
                    $("#thumb_hidden").val(datas.data.url);
                }
            });
        });
    });
    
    $(function(){
        $.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){
            window.top.art.dialog({content: msg, lock: true, width: '250', height: '80'}, function () {
                this.close();
                $(obj).focus();
            })
        }});

        $("#name").formValidator({onshow:"请输入内容",onfocus:"请输入内容",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"内容为空"});
        $("#mood_id").formValidator({onshow:"请选择心情",onfocus:"请选择心情",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"心情为空"});
    });

    jeDate({
        dateCell:".start_date",
        format:"YYYY-MM-DD",
        isinitVal:true,  isTime:false,
        isClear:true,
        minDate:"2010-06-01"
        // okfun:function(val){alert(val)}
    });
</script>
