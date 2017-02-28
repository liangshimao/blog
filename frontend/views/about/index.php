<?php
use yii\helpers\Url;
?>
<html>
<head>
    <title>关于我-梁世茂个人博客</title>
    <meta name="keywords" content="个人博客,梁世茂,私人空间">
    <meta name="description" content="个人博客,梁世茂,私人空间">
    <link rel="shortcut icon" href="/image/cropped-1111.png" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <link href="/css/comment.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/font.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-buttons.css" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-thumbs.css"/>
    <link rel="stylesheet" type="text/css" href="/css/tips.css"/>
    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css"/>
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
<header id="container2" style="background: #226039 url(http://m.jinsom.cn/wp-content/themes/jinsomM/images/bg/2.jpg) center 0 scroll no-repeat;">
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
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img1.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img1.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img2.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img2.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img3.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img3.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img4.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img4.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img5.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img5.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img6.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img6.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img7.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img7.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img8.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img8.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img9.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img9.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img10.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img10.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img11.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img11.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img12.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img12.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img13.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img13.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img14.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img14.jpg"></a></li>
                    <li><a class="fancybox" href="http://m.jinsom.cn/wp-content/uploads/2016/08/img15.jpg"  data-fancybox-group="gallery"><img  src="http://m.jinsom.cn/wp-content/uploads/2016/08/img15.jpg"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="nav" class="menu-%e7%94%b5%e8%84%91%e8%8f%9c%e5%8d%95-container">
        <ul id="menu-%e7%94%b5%e8%84%91%e8%8f%9c%e5%8d%95" class="menu">
            <li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item page_item menu-item-158"><a href="<?=Url::toRoute('/about/index')?>">关于我</a></li>
            <li id="menu-item-161" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-161"><a href="<?=Url::toRoute('/original/index')?>">生活感悟</a></li>
            <li id="menu-item-163" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-163"><a href="<?=Url::toRoute('/timer/index')?>">碎言碎语</a></li>
            <li id="menu-item-162" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-162"><a href="<?=Url::toRoute('/beauty/index')?>">优美散文</a></li>
            <li id="menu-item-191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-191"><a href="<?=Url::toRoute('/positive/index')?>">正能量</a></li>
            <li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160"><a href="<?=Url::toRoute('/left/index')?>">留言板</a></li>
            <li id="menu-item-408" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-408"><a href="http://http://m.jinsom.cn/">更多  <i class="fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                    <li id="menu-item-353" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-353"><a href="http://m.jinsom.cn/jinsomm">更新</a></li>
                    <li id="menu-item-402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-402"><a target="_blank" href="http://jinsom.cn/">jinsom</a></li>
                    <li id="menu-item-428" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-428"><a href="http://m.jinsom.cn/buy">购买主题</a></li>
                </ul>
        </ul>
    </div>
</header>

<style type="text/css">
    body {background: url(/image/about-bg.jpg);}
    .blogitem{float: inherit;margin: auto;}
    .title {
        background: 0;
        text-align: center;
        padding-left: 0;
        padding-right: 0;
    }
    .title p{margin: 15px 0;}
    .textfoot{box-shadow: #999 0px 2px 3px;}
    .blogitem article {
        border-bottom: 0;
        box-shadow: #999 0px 2px 3px;
        margin-bottom: 10px;
    }
    h2.title img {
        border-radius: 100%;
    }
    h1.t_nav{width: inherit;}
    .mainContent {background: 0;margin: 0px auto 0px;}
    .textfoot { text-align: left;padding: 20px 25px 85px; }
    .about-bg{background: url(/image/about-bg.jpg);}
    .title a:hover {
        padding: 0;
    }
    .post-like {
        float: right;
        margin-right: 55px;
    }
    .post-like a {
        background: url(/image/meigui.png);
        cursor: pointer;
        background-size: 40px;
        width: 60px;
        height: 45px;
        margin-right: 15px;
        background-position: left;
        background-repeat: no-repeat;
    }
    .post-like .count {
        margin-top: 10px;
    }
    .title{width: 100%;}
    .done {
        display: inline-block;
        -webkit-animation-name: done;
        animation-name: done;
        -webkit-animation-duration: 0s;
        animation-duration: 0s;
        -webkit-animation-iteration-count: 0;
        animation-iteration-count: 0;
        -webkit-animation-timing-function: steps(0);
        animation-timing-function: steps(0);
        background-position: left !important;
    }
    footer{margin-top: 0;}
</style>
<div class="about-bg">
    <div class="mainContent">
        <div style="position: absolute;right: 40px;">
            <img src="/image/music.png" border="0">
            <p style="text-align: center;">
                <embed wmode="transparent" width="25" height="20" src="http://m.jinsom.cn/wp-content/themes/jinsomM/music/singlemp3player.swf?file=http://m.jinsom.cn/wp-content/uploads/2016/08/王菲-流年.mp3&repeatPlay=true&songVolume=30"
                       type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></p></div>





        <div class="blogitem">
            <h1 class="t_nav"><span>人来人往，匆匆忙忙，谁能对谁留下半点回忆。</span><a href="#" class="n2">关于我</a></h1>
            <article>
                <h2 class="title">
                    <img src="http://m.jinsom.cn/wp-content/uploads/2016/08/photo.jpg" style="width: 120px;height: 120px;">
                    <p>加菲猫</p>
                    <div class="v-address">北京·海淀</div>
                    <m class="post-like">
                        <a id="flower" href="javascript:;" data-action="ding" data-id="98" class="favorite">
                            <span class="count"><?=$model->praise;?></span>
                        </a>
                    </m>
                </h2>
                <ul class="text">

                    <p><?=$model->content;?></p>
                </ul>
                <div class="textfoot">

                    <div class="weixin" href="javascript:void(0);" id="qr-weixin"></div>   <a href="http://qq.com" target="_blank"><div class="qq"></div></a> <a href="http://qzone.qq.com" target="_blank"><div class="qqzone"></div></a>  <a href="http://weibo.com" target="_blank"><div class="weibo"></div></a><a href="http://douban.com" target="_blank"><div class="douban"></div></a><a href="http://taobao.com" target="_blank"><div class="taobao"></div></a> <a href="http://zhihu.com" target="_blank"><div class="zhihu"></div></a> <a href="http://renren.com" target="_blank"><div class="renren"></div></a>


                </div>
            </article>

            <div id="wechat-qrcode-popup" class="wechat-qrcode-popup displayNone" style="top: 3773px; left: 255.141px; display: none;"> </div>
                        <script>
                            (function($) {
                                $.extend({
                                    tipsBox: function(options) {
                                        options = $.extend({
                                            obj: null,  //jq对象，要在那个html标签上显示
                                            str: "+1",  //字符串，要显示的内容;也可以传一段html，如: "<b style='font-family:Microsoft YaHei;'>+1</b>"
                                            startSize: "15px",  //动画开始的文字大小
                                            endSize: "32px",    //动画结束的文字大小
                                            interval: 600,  //动画时间间隔
                                            color: "red",    //文字颜色
                                            callback: function() {}    //回调函数
                                        }, options);
                                        $("body").append("<span class='num'>"+ options.str +"</span>");
                                        var box = $(".num");
                                        var left = options.obj.offset().left + options.obj.width() / 2;
                                        var top = options.obj.offset().top - options.obj.height();
                                        box.css({
                                            "position": "absolute",
                                            "left": left + "px",
                                            "top": top + "px",
                                            "z-index": 9999,
                                            "font-size": options.startSize,
                                            "line-height": options.endSize,
                                            "color": options.color
                                        });
                                        box.animate({
                                            "font-size": options.endSize,
                                            "opacity": "0",
                                            "top": top - parseInt(options.endSize) + "px"
                                        }, options.interval , function() {
                                            box.remove();
                                            options.callback();
                                        });
                                    }
                                });
                            })(jQuery);
                        </script>
                        <script type="text/javascript">
                            $('#flower').on('click', function(){
                                $.tipsBox({
                                    obj: $(this),
                                    str: "+1",
                                    callback: function() {
                                        //alert(5);
                                    }
                                });
                                document.getElementById('count98').innerHTML++;

                            });

                            $("body").click(function(e) {
                                if (e.target.className.indexOf("-item-share-btn") === -1) {
                                    $(document.getElementById("share-popup")).hide();
                                    $(".is-showing-share-popup").removeClass("is-showing-share-popup")
                                } else {
                                    var item = $(e.target).parents(".is-showing-share-popup")[0];
                                    $(".is-showing-share-popup").each(function() {
                                        if (this !== item) {
                                            $(this).removeClass("is-showing-share-popup")
                                        }
                                    })
                                }
                                if (e.target.id !== "qr-weixin") {
                                    $(document.getElementById("wechat-qrcode-popup")).hide()
                                }
                            });
                            var $qrWeixin = $(document.getElementById("qr-weixin"));
                            $qrWeixin.click(function(e) {
                                var event = e || window.event;
                                showWechatQrcode(event.target)
                            })
                            function showWechatQrcode(el) {
                                var offset = $(el).offset();
                                $(document.getElementById("wechat-qrcode-popup")).css("top", offset.top).css("left", offset.left).show()
                            }
                        </script>
        </div>
    </div>
</div><!-- about-bg -->
<div class="blank"></div>
<footer>
    <div class="footavatar">
        <img src="http://m.jinsom.cn/wp-content/uploads/2016/08/photo.jpg" class="footphoto">
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
        $.post("<?=Url::toRoute('/about/praise_ajax')?>", ajax_data,
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






