<?php
use yii\helpers\Url;
?>
<div class="pad_10">
    <div class="common-form">
        <form name="myform" action="<?php echo Url::toRoute(['/article/timer/edit','id'=>$model->id]); ?>" method="post" id="myform">
            <table width="100%" class="table_form contentWrap">
                <tr>
                    <th width="100">添加日期：</th>
                    <td>
                        <div class='input-group date' style="width: 220px">
                            <input type='text' class="form-control start_date" id="time" name="time" placeholder="购买日期" size="10" value="<?=$model->time;?>"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th width="120">记录内容：</th>
                    <td><textarea class="inputStyle moretxt width-160" id="name" placeholder="请输入内容" name="name" style="display: inline; width: 350px; height: 120px;" maxlength="100"><?=$model->name;?></textarea></td>

                </tr>
            </table>
            <div style="display: none;" class="btn"><input type="submit" id="dosubmit" class="dialog" name="dosubmit" value="提交"/></div>
        </form>
    </div>
</div>
<script type="text/javascript" src="/jedate/jedate.js"></script>
<script>
    //日期插件
    var myDate = new Date();
    var monthStr = myDate.getMonth()+1;
    var dateStr = myDate.getFullYear() +'-'+ monthStr + '-' + myDate.getDate() + " 23:59:59";


    $(function(){
        $.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){
            window.top.art.dialog({content: msg, lock: true, width: '250', height: '80'}, function () {
                this.close();
                $(obj).focus();
            })
        }});

        $("#name").formValidator({onshow:"请输入内容",onfocus:"请输入内容",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"内容为空"});

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
