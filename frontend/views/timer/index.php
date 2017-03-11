<?php
use yii\helpers\Url;
?>
<html>
<head>
    <title>碎言碎语-梁世茂的个人博客</title>
    <meta name="keywords" content="个人博客,梁世茂">
    <meta name="description" content="个人博客,梁世茂">
    <link rel="shortcut icon" href="/image/cropped-1111.png" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <link href="/css/comment.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/font.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-buttons.css" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-thumbs.css"/>
    <link rel="stylesheet" type="text/css" href="/css/tips.css" />
    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css" />
    <script type="text/javascript" src="/js/comments-ajax.js"></script>
    <script src="/js/jquery-ias.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="/js/tips-a.js"></script>
    <script type="text/javascript" src="/js/tips-b.js"></script>
    <script type="text/javascript" src="/js/base.js"></script>
    <script type="text/javascript" src="/js/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="/js/jquery.fancybox.js?v=2.1.3"></script>
    <script type="text/javascript" src="/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script type="text/javascript" src="/js/jquery.fancybox-media.js?v=1.0.5"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,
                openEffect : 'none',
                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });
            $("#single_1").fancybox({
                helpers: {
                    title : {
                        type : 'float'
                    }
                }
            });
        });
    </script>
    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function($){
            //$('#container1').hotSpot();
            var _pop2 = $('#container2').hotSpot({
                slideshow : false,
                triggerBy : 'click',
                autoHide : false
            });
            $('#image2').on('click',function(event){
                _pop2.hideCurrentPop();
            });


        });
    </script>
</head>
<body style="cursor: url(http://m.jinsom.cn/wp-content/uploads/2016/11/3.gif),auto;">
<header id="container2" style="background: #226039 url(/image/2.jpg) center 0 scroll no-repeat;">
    <div class="popover left" data-easein="cardInLeft" data-easeout="cardOutLeft" id="pop7">
        <div class="arrow"></div>
        <div class="popover-inner">

            <div class="popover-content">
                <p>哎哟喂！点我干嘛！</p>
            </div>
        </div>
    </div>

    <div class="popover right" data-easein="cardInRight" data-easeout="cardOutRight" id="pop6">
        <div class="arrow"></div>
        <div class="popover-inner">

            <div class="popover-content">
                <p>娃哈哈！好玩吧</p>
            </div>
        </div>
    </div>
    <img src="/image/arrow1.png" alt="info" class="info-icon info-icon1" data-target="pop7"  />
    <img src="/image/arrow1.png" alt="info" class="info-icon info-icon2" data-target="pop6"  />


    <div class="quotes">
        <div class="text5">时光·记录</div>
        <p>当我们懂得幸福的时候，是因为我们懂得了珍惜。 你再怎么改变也不能让每个人都喜欢你，所以还不如做一个自己想做的人。 人生都太短暂，去疯去爱去浪费，去追去梦去后悔。 总有让我们悲伤......</p>


        <div class="flower">
            <a href="#" class="make">咔嚓</a>
            <div class="mess">
                <ul class="reset">
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img1.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img1.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img2.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img2.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img3.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img3.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img4.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img4.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img5.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img5.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img6.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img6.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img7.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img7.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img8.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img8.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img9.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img9.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img10.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img10.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img11.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img11.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img12.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img12.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img13.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img13.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img14.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img14.jpg"></a></li><li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img15.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img15.jpg"></a></li></ul>
            </div>
        </div>
    </div>
    <div id="nav" class="menu-%e7%94%b5%e8%84%91%e8%8f%9c%e5%8d%95-container">
        <ul id="menu-%e7%94%b5%e8%84%91%e8%8f%9c%e5%8d%95" class="menu">
            <li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-page page_item menu-item-158"><a href="<?=Url::toRoute('/about/index')?>">关于我</a></li>
            <li id="menu-item-161" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-161"><a href="<?=Url::toRoute('/original/index')?>">生活感悟</a></li>
            <li id="menu-item-163" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-163 current-menu-item current_page_item "><a href="<?=Url::toRoute('/timer/index')?>">碎言碎语</a></li>
            <li id="menu-item-162" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-162"><a href="<?=Url::toRoute('/beauty/index')?>">优美散文</a></li>
            <li id="menu-item-191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-191"><a href="<?=Url::toRoute('/positive/index')?>">正能量</a></li>
            <li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160"><a href="<?=Url::toRoute('/left/index')?>">留言板</a></li>
            <li id="menu-item-408" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-408"><a href="javascript:;">更多  <i class="fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                    <li id="menu-item-353" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-353"><a href="javascript:;">更新</a></li>
                    <li id="menu-item-428" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-428"><a href="javascript:;">购买主题</a></li>
                </ul>
        </ul>
    </div>
</header>

<style type="text/css">
    body{
        background: url(/image/shuoshuo_bg.jpg);
        background-size: cover;
        background-position: center top;
        background-attachment: fixed;
    }
    h1.t_nav span {
        color: #FFF;
    }
    h1.t_nav {
        border-bottom: #FFFFFF 1px solid;
    }
    .post-like {
        top: -15px;
        right: 10px;
        margin-right: 20px;
    }
</style>
<h1 class="t_nav"><span>删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语。</span><a href="#" class="n2">碎言碎语</a></h1>
<div class="bloglist">
    <?php foreach ($timer as $value):?>
    <ul class="arrow_box">
        <img src="<?=!empty($value->mood->img_url)?$value->mood->img_url:'/image/xinqing/1.png';?>" class="status-img">
        <div class="sy">
            <p><img src="<?=!empty($value->img_url)?$value->img_url:'/image/b00e2d26764e0535600x600.jpg';?>">
                <p><?=$value->name;?></p>
            </p>
        </div>
        <m class="post-like">
            <a href="javascript:;" data-action="ding" data-id="<?=$value->id;?>" class="favorite">
                <span class="count"><?=$value->praise;?></span>
            </a>
        </m>
        <span class="dateview"><?=$value->time;?></span>
    </ul>
    <?php endforeach;?>



    <div class="post-nav-inside">
        <div class="post-nav-left"></div>
        <div class="post-nav-right"><a href="http://m.jinsom.cn/category/xinqing/page/2" >下一页</a></div>
    </div>
</div>
</div>
<div class="blank"></div>
<script type="text/javascript">
    var ias = $.ias({
        container: ".bloglist", //包含所有文章的元素
        item: ".arrow_box", //文章元素
        pagination: ".post-nav-inside", //分页元素
        next: ".post-nav-right a", //下一页元素
    });

    ias.extension(new IASTriggerExtension({
        text: '<span class="ajax-more">加载更多</span>', //此选项为需要点击时的文字
        offset: 1, //设置此项后，到 offset+1 页之后需要手动点击才能加载，取消此项则一直为无限加载
    }));
    ias.extension(new IASSpinnerExtension());
    ias.extension(new IASNoneLeftExtension({
        text: ' ', // 加载完成时的提示
    }));
</script>
<footer>
    <div class="footavatar">
        <img src="<?=$model->img_url;?>" class="footphoto">
        <ul class="footinfo">
            <p class="fname"><a href="#" >加菲猫</a></p>
            <p class="finfo">兴趣：养猫，旅行，音乐</p>
            <p class="finfo">性格：可冷可热、小逗比、</p>
            <div style="float:right;font-size: 16px;">——越努力，越幸运！</div>
        </ul>
    </div>
    <div class="Copyright">
        <ul style="clear: both;">
            <p>© Copyright 2009-2016 梁世茂·博客</p>
        </ul>
    </div>
</footer>


<script>

    $("a.ico_v.ico_emotion").click(function(){
        if($("#js_emotion").css("display")=="none"){
            $("#js_emotion").show();
        }else{
            $("#js_emotion").hide();
        }
    });

</script>

<!-- 喜欢 -->
<script type="text/javascript">
    $.fn.postLike = function() {

        $(this).addClass('done');
        var id = $(this).data("id"),
            action = $(this).data('action'),
            rateHolder = $(this).children('.count');
        var ajax_data = {
            action: "bigfa_like",
            um_id: id,
            um_action: action
        };
        $.post("<?=Url::toRoute('/timer/praise_ajax')?>", ajax_data,
            function(res) {
                if(res.code == 200){
                    $(rateHolder).html(res.data.count);
                }
                
            },"json");
        return false;
    };
    $(document).on("click", ".favorite",
        function() {
            $(this).postLike();
        });

</script>

<!-- 头部菜单 -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#nav li').hover(function() {
                $('ul', this).slideDown(0)},
            function() {
                $('ul', this).slideUp(0)});
    });
</script>
<a href="#0" class="cd-top cd-is-visible"></a>
</body>
</html>