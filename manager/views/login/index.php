<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>助医科技微信服务号后台管理</title>
    <link href="/css/admin_login.css" rel="stylesheet" type="text/css" />
    <style>
        
    </style>
</head>
<body>
<div class="admin_login_wrap">
    <h1>助医科技微信后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="<?=Url::toRoute(['/login/login'])?>" method="post" id="form">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="" id="user" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password" value="" id="pwd" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"><a tabindex="5" href="#">本页面由助医科技版权所有</a></p>
</div>
</body>
</html>