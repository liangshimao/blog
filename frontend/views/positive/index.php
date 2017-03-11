<?php
use yii\helpers\Url;
use common\components\Tools;
?>
<html>
<head>
    <title>正能量-梁世茂的个人博客</title>
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
            <li id="menu-item-163" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-163"><a href="<?=Url::toRoute('/timer/index')?>">碎言碎语</a></li>
            <li id="menu-item-162" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-162"><a href="<?=Url::toRoute('/beauty/index')?>">优美散文</a></li>
            <li id="menu-item-191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-191 current-menu-item current_page_item "><a href="<?=Url::toRoute('/positive/index')?>">正能量</a></li>
            <li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160"><a href="<?=Url::toRoute('/left/index')?>">留言板</a></li>
            <li id="menu-item-408" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-408"><a href="javascript:;">更多  <i class="fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                    <li id="menu-item-353" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-353"><a href="javascript:;">更新</a></li>
                    <li id="menu-item-428" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-428"><a href="javascript:;">购买主题</a></li>
                </ul>
        </ul>
    </div>
</header>

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
                <a href="<?=Url::toRoute('/about/index')?>">
                    <img src="<?=$model->img_url;?>">
                </a>
            </div>
            <div class="userinfo">
                <p class="btns">
                    <a href="javascript:;">留言</a>
                    <a href="javascript:;">图集</a>
                    <a href="javascript:;">杂货铺</a>
                </p>

            </div>
            <div class="sidebar-avatar-footer"></div>
        </div>
        <section class="taglist">
            <h2>全部标签</h2>
            <ul>
                <a href='javascript:;' class='tag-link-20 tag-link-position-1' style='font-size: 8pt;'>个性刚猛</a>
                <a href='javascript:;' class='tag-link-27 tag-link-position-3' style='font-size: 22pt;'>可爱</a>
                <a href='javascript:;' class='tag-link-33 tag-link-position-4' style='font-size: 8pt;'>孩子气</a>
                <a href='javascript:;' class='tag-link-28 tag-link-position-5' style='font-size: 12.581818181818pt;'>闷骚</a>
                <a href='javascript:;' class='tag-link-9 tag-link-position-7' style='font-size: 20.218181818182pt;'>好奇宝宝</a>
                <a href='javascript:;' class='tag-link-18 tag-link-position-8' style='font-size: 18.181818181818pt;'>萌萌哒</a>
                <a href='javascript:;' class='tag-link-15 tag-link-position-9' style='font-size: 8pt;'>冒险家</a>
                <a href='javascript:;' class='tag-link-25 tag-link-position-10' style='font-size: 15.636363636364pt;'>帽子</a>
                <a href='javascript:;' class='tag-link-6 tag-link-position-13' style='font-size: 8pt;'>散场</a>
                <a href='javascript:;' class='tag-link-12 tag-link-position-14' style='font-size: 12.581818181818pt;'>有艺术才华</a>
                <a href='javascript:;' class='tag-link-21 tag-link-position-15' style='font-size: 8pt;'>文艺范</a>
                <a href='javascript:;' class='tag-link-17 tag-link-position-16' style='font-size: 8pt;'>加菲猫</a>
                <a href='javascript:;' class='tag-link-19 tag-link-position-17' style='font-size: 8pt;'>气球</a>
                <a href='javascript:;' class='tag-link-5 tag-link-position-18' style='font-size: 8pt;'>流年</a>
                <a href='javascript:;' class='tag-link-11 tag-link-position-19' style='font-size: 22pt;'>清新</a>
                <a href='javascript:;' class='tag-link-31 tag-link-position-20' style='font-size: 8pt;'>如风</a>
                <a href='javascript:;' class='tag-link-32 tag-link-position-21' style='font-size: 8pt;'>猫咪</a>
                <a href='javascript:;' class='tag-link-10 tag-link-position-22' style='font-size: 8pt;'>大懒虫</a>
                <a href='javascript:;' class='tag-link-22 tag-link-position-23' style='font-size: 8pt;'>IT男</a>
                <a href='javascript:;' class='tag-link-24 tag-link-position-24' style='font-size: 18.181818181818pt;'>摩羯座</a>
                <a href='javascript:;' class='tag-link-23 tag-link-position-25' style='font-size: 8pt;'>不修边幅</a>
                <a href='javascript:;' class='tag-link-29 tag-link-position-26' style='font-size: 8pt;'>篮球</a>
                <a href='javascript:;' class='tag-link-13 tag-link-position-28' style='font-size: 8pt;'>萌</a>
                <a href='javascript:;' class='tag-link-26 tag-link-position-29' style='font-size: 8pt;'>运动</a>
                <a href='javascript:;' class='tag-link-4 tag-link-position-31' style='font-size: 12.581818181818pt;'>无刺激不青春</a>
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
        <?php foreach ($list as $value):?>
        <article>
            <h2 class="title"><a href="<?=Url::toRoute(['/positive/detail','id' => $value->id]);?>" title="<?=$value->title;?>"><?=$value->title;?></a></h2>
            <ul class="text">
                <p><?=Tools::cutUtf8($value->content,50,false);?>&hellip;&#8230;</p>
            </ul>
            <div class="textfoot">
                <a href="/" style="float: left;"><?=date('Y/m/d',strtotime($value->edit_time));?></a>
                <a href="javascript:;">#<?=isset($value->tag->name)?$value->tag->name:'';?></a>
                <m class="post-like">
                    <a href="javascript:;" data-action="ding" data-id="<?=$value->id;?>" class="favorite">
                        <span class="count"><?=$value->praise;?></span>
                    </a>
                </m>
        </article>
        <?php endforeach;?>


        <div class="post-nav-inside">
            <div class="post-nav-left"></div>
            <div class="post-nav-right"><a href="http://m.jinsom.cn/category/manshenghuo/page/2" >下一页</a></div>
        </div>

    </div>
</div>
<div class="blank"></div>
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

<!-- ajax加载评论 -->
<!-- 文章加载 -->
<script type="text/javascript">
    $(document).ready(function (){
        var ias = $.ias({
            container: ".blogitem", //包含所有文章的元素
            item: "article", //文章元素
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
<a href="#0" class="cd-top cd-is-visible"></a>
</body>
</html>






