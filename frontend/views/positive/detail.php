<?php
use yii\helpers\Url;
?>
<html>
<head>
    <title>正能量-梁世茂的个人博客</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="/image/cropped-1111.png"/>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <link href="/css/comment.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/font.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css?v=2.1.2" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-buttons.css?v=1.0.5" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-thumbs.css?v=1.0.7" />
    <link rel="stylesheet" type="text/css" href="/css/tips.css?v=1.0.7" />
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
            <li id="menu-item-161" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-161 current-menu-item current_page_item "><a href="<?=Url::toRoute('/original/index')?>">生活感悟</a></li>
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
    .textfoot div {width: inherit;height: inherit;}
</style>
<div class="mainContent">
    <div style="position: absolute;right: 40px;">
        <img src="/image/music.png" border="0">
        <p style="text-align: center;">
            <embed wmode="transparent" width="25" height="20" src="http://m.jinsom.cn/wp-content/themes/jinsomM/music/singlemp3player.swf?file=http://m.jinsom.cn/wp-content/uploads/2016/08/王菲-流年.mp3&repeatPlay=true&songVolume=30"
                                              type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></p></div>

    <style type="text/css">
        div#float{
            -webkit-animation: error-swing infinite 2s ease-in-out alternate;
            -moz-animation: error-swing infinite 2s ease-in-out alternate;
            animation: error-swing infinite 2s ease-in-out alternate;
            -webkit-transform-origin: center top;
            -moz-transform-origin: center top;
            transform-origin: center top;
        }
        @-webkit-keyframes error-swing{
            0%{-webkit-transform:rotate(1deg)}
            100%{-webkit-transform:rotate(-2deg)}
        }
        @-moz-keyframes error-swing{
            0%{-moz-transform:rotate(1deg)}
            100%{-moz-transform:rotate(-2deg)}
        }
        @keyframes error-swing{
            0%{transform:rotate(1deg)}
            100%{transform:rotate(-2deg)}
        }
    </style>
    <aside>
        <div class="sidebar-avatar">
            <div class="avatar">
                <a href="<?=Url::toRoute('/')?>">
                    <img src="http://m.jinsom.cn/wp-content/uploads/2016/08/photo.jpg">
                </a>
            </div>
            <div class="userinfo">
                <p class="btns">
                    <a href="http://m.jinsom.cn/guestbook">留言</a>
                    <a href="http://m.jinsom.cn/category/tuji">图集</a>
                    <a href="http://m.jinsom.cn/zahuopu_category/zahuopu">杂货铺</a>
                </p>

            </div>
            <div class="sidebar-avatar-footer"></div>
        </div>
        <section class="taglist">
            <h2>全部标签</h2>
            <ul>
                <a href='http://m.jinsom.cn/tag/%e4%ba%ba%e5%83%8f' class='tag-link-20 tag-link-position-1' title='1个话题' style='font-size: 8pt;'>人像</a>
                <a href='http://m.jinsom.cn/tag/%e5%81%87%e5%a6%82' class='tag-link-7 tag-link-position-2' title='1个话题' style='font-size: 8pt;'>假如</a>
                <a href='http://m.jinsom.cn/tag/%e5%8f%af%e7%88%b1' class='tag-link-27 tag-link-position-3' title='6个话题' style='font-size: 22pt;'>可爱</a>
                <a href='http://m.jinsom.cn/tag/%e5%90%8a%e5%b8%a6%e8%a1%ab' class='tag-link-33 tag-link-position-4' title='1个话题' style='font-size: 8pt;'>吊带衫</a>
                <a href='http://m.jinsom.cn/tag/%e5%94%af%e7%be%8e' class='tag-link-28 tag-link-position-5' title='2个话题' style='font-size: 12.581818181818pt;'>唯美</a>
                <a href='http://m.jinsom.cn/tag/%e5%a4%8f%e5%a4%a9' class='tag-link-14 tag-link-position-6' title='2个话题' style='font-size: 12.581818181818pt;'>夏天</a>
                <a href='http://m.jinsom.cn/tag/%e5%a5%b3%e7%a5%9e' class='tag-link-9 tag-link-position-7' title='5个话题' style='font-size: 20.218181818182pt;'>女神</a>
                <a href='http://m.jinsom.cn/tag/%e5%b0%8f%e6%b8%85%e6%96%b0' class='tag-link-18 tag-link-position-8' title='4个话题' style='font-size: 18.181818181818pt;'>小清新</a>
                <a href='http://m.jinsom.cn/tag/%e5%b0%91%e5%a5%b3' class='tag-link-15 tag-link-position-9' title='1个话题' style='font-size: 8pt;'>少女</a>
                <a href='http://m.jinsom.cn/tag/%e5%b8%bd%e5%ad%90' class='tag-link-25 tag-link-position-10' title='3个话题' style='font-size: 15.636363636364pt;'>帽子</a>
                <a href='http://m.jinsom.cn/tag/%e6%89%8e%e8%be%ab' class='tag-link-34 tag-link-position-11' title='1个话题' style='font-size: 8pt;'>扎辫</a>
                <a href='http://m.jinsom.cn/tag/%e6%91%84%e5%bd%b1' class='tag-link-16 tag-link-position-12' title='1个话题' style='font-size: 8pt;'>摄影</a>
                <a href='http://m.jinsom.cn/tag/%e6%95%a3%e5%9c%ba' class='tag-link-6 tag-link-position-13' title='1个话题' style='font-size: 8pt;'>散场</a>
                <a href='http://m.jinsom.cn/tag/%e6%96%87%e8%89%ba' class='tag-link-12 tag-link-position-14' title='2个话题' style='font-size: 12.581818181818pt;'>文艺</a>
                <a href='http://m.jinsom.cn/tag/%e6%96%87%e8%89%ba%e8%8c%83' class='tag-link-21 tag-link-position-15' title='1个话题' style='font-size: 8pt;'>文艺范</a>
                <a href='http://m.jinsom.cn/tag/%e6%97%a5%e7%b3%bb' class='tag-link-17 tag-link-position-16' title='1个话题' style='font-size: 8pt;'>日系</a>
                <a href='http://m.jinsom.cn/tag/%e6%b0%94%e7%90%83' class='tag-link-19 tag-link-position-17' title='1个话题' style='font-size: 8pt;'>气球</a>
                <a href='http://m.jinsom.cn/tag/%e6%b5%81%e5%b9%b4' class='tag-link-5 tag-link-position-18' title='1个话题' style='font-size: 8pt;'>流年</a>
                <a href='http://m.jinsom.cn/tag/%e6%b8%85%e6%96%b0' class='tag-link-11 tag-link-position-19' title='6个话题' style='font-size: 22pt;'>清新</a>
                <a href='http://m.jinsom.cn/tag/%e6%b8%b8%e6%b3%b3' class='tag-link-31 tag-link-position-20' title='1个话题' style='font-size: 8pt;'>游泳</a>
                <a href='http://m.jinsom.cn/tag/%e7%8c%ab' class='tag-link-32 tag-link-position-21' title='1个话题' style='font-size: 8pt;'>猫</a>
                <a href='http://m.jinsom.cn/tag/%e7%99%bd%e8%89%b2' class='tag-link-10 tag-link-position-22' title='1个话题' style='font-size: 8pt;'>白色</a>
                <a href='http://m.jinsom.cn/tag/%e7%9c%bc%e7%9d%9b' class='tag-link-22 tag-link-position-23' title='1个话题' style='font-size: 8pt;'>眼睛</a>
                <a href='http://m.jinsom.cn/tag/%e7%9f%ad%e5%8f%91' class='tag-link-24 tag-link-position-24' title='4个话题' style='font-size: 18.181818181818pt;'>短发</a>
                <a href='http://m.jinsom.cn/tag/%e7%a9%bf%e6%90%ad' class='tag-link-23 tag-link-position-25' title='1个话题' style='font-size: 8pt;'>穿搭</a>
                <a href='http://m.jinsom.cn/tag/%e7%af%ae%e7%90%83' class='tag-link-29 tag-link-position-26' title='1个话题' style='font-size: 8pt;'>篮球</a>
                <a href='http://m.jinsom.cn/tag/%e7%ba%a2%e8%89%b2' class='tag-link-35 tag-link-position-27' title='1个话题' style='font-size: 8pt;'>红色</a>
                <a href='http://m.jinsom.cn/tag/%e8%90%8c' class='tag-link-13 tag-link-position-28' title='1个话题' style='font-size: 8pt;'>萌</a>
                <a href='http://m.jinsom.cn/tag/%e8%bf%90%e5%8a%a8' class='tag-link-26 tag-link-position-29' title='1个话题' style='font-size: 8pt;'>运动</a>
                <a href='http://m.jinsom.cn/tag/%e9%95%bf%e5%8f%91' class='tag-link-30 tag-link-position-30' title='1个话题' style='font-size: 8pt;'>长发</a>
                <a href='http://m.jinsom.cn/tag/%e9%9d%92%e6%98%a5' class='tag-link-4 tag-link-position-31' title='2个话题' style='font-size: 12.581818181818pt;'>青春</a>
            </ul>
        </section>
        <div id="float_a" class="div_a">
            <div id="div-pin"></div>
            <div id="float" class="div1">
                <a href="" ><img src="/image/51.jpg"></a>

            </div></div>
    </aside>
    <!-- 侧栏跟随 -->
    <script type="text/javascript">
        (function(){

            var oDiv=document.getElementById("float_a");
            var H=0,iE6;
            var Y=oDiv;
            while(Y){H+=Y.offsetTop;Y=Y.offsetParent};
            iE6=window.ActiveXObject&&!window.XMLHttpRequest;
            if(!iE6){
                window.onscroll=function()
                {
                    var s=document.body.scrollTop||document.documentElement.scrollTop;
                    if(s>H){oDiv.className="div_a div2";if(iE6){oDiv.style.top=(s-H)+"px";}}
                    else{oDiv.className="div_a";}
                };
            }

        })();
    </script>
    <div class="blogitem">
        <article>
            <h2 class="title"><a href="javascript:;" title="<?=$model->title;?>"><?=$model->title;?></a>
                <n id="testemail" href="javascript:;" style="float: right;cursor: pointer;" title="发至邮箱">
                    <i class="fa fa-envelope-o " style="line-height: 28px;"></i></n>
            </h2>
            <ul class="text"><?=$model->content;?></ul>
            <div class="textfoot">
                <m class="post-like">
                    <a href="javascript:;" data-action="ding" data-id="<?=$model->id;?>" class="favorite">
                        <span class="count"><?=$model->praise;?></span>
                    </a>
                </m>
                <a href="/" style="float: left;"><?=date('Y/m/d',strtotime($model->edit_time));?></a> <a href="/"></a>
                <a href="javascript:;">#<?=isset($model->tag->name)?$model->tag->name:'';?></a>
            </div>
        </article>
    </div>


        <script type="text/javascript">
            /* <![CDATA[ */
            function grin(tag) {
                var myField;
                tag = ' ' + tag + ' ';
                if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
                    myField = document.getElementById('comment');
                } else {
                    return false;
                }
                if (document.selection) {
                    myField.focus();
                    sel = document.selection.createRange();
                    sel.text = tag;
                    myField.focus();
                }
                else if (myField.selectionStart || myField.selectionStart == '0') {
                    var startPos = myField.selectionStart;
                    var endPos = myField.selectionEnd;
                    var cursorPos = startPos;
                    myField.value = myField.value.substring(0, startPos)
                        + tag
                        + myField.value.substring(endPos, myField.value.length);
                    cursorPos += tag.length;
                    myField.focus();
                    myField.selectionStart = cursorPos;
                    myField.selectionEnd = cursorPos;
                }      else {
                    myField.value += tag;
                    myField.focus();
                }
            }
            /* ]]> */
        </script>
    </div>
<div class="blank"></div>

    <footer>
        <div class="footavatar">
            <img src="http://m.jinsom.cn/wp-content/uploads/2016/08/photo.jpg" class="footphoto">
            <ul class="footinfo">
                <p class="fname"><a href="#" >林可可</a></p>
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
        $.post("<?=Url::toRoute('/positive/praise_ajax')?>", ajax_data,
            function(res) {
                if(res.code == 200){
                    $(rateHolder).html(res.data.count);
                }
            },'json');
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


<!-- 返回顶部 -->
<a href="#0" class="cd-top cd-is-visible"></a>

<!-- 分享 -->
</body>
</html>

<!-- 手机页面结束 -->

