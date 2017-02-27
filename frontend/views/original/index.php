<?php
use yii\helpers\Url;
?>
<html>
<head>
    <title><?=$this->title;?></title>
    <meta name="keywords" content="个人博客,梁世茂">
    <meta name="description" content="个人博客,梁世茂">
    <link rel="shortcut icon" href="http://m.jinsom.cn/wp-content/uploads/2016/08/cropped-1111.png" />
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

    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }
    </style>
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
    <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/arrow1.png" alt="info" class="info-icon info-icon1" data-target="pop7"  />
    <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/arrow1.png" alt="info" class="info-icon info-icon2" data-target="pop6"  />


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

<div class="mainContent">
    <div style="position: absolute;right: 40px;">
        <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/music.png" border="0">
        <p style="text-align: center;"><embed wmode="transparent" width="25" height="20" src="http://m.jinsom.cn/wp-content/themes/jinsomM/music/singlemp3player.swf?file=http://m.jinsom.cn/wp-content/uploads/2016/08/王菲-流年.mp3&repeatPlay=true&songVolume=30"
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
                <a href="http://m.jinsom.cn/about">
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
                <a href="" ><img src="http://m.jinsom.cn/wp-content/uploads/2016/09/51.jpg"></a>

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
            <h2 class="title"><a href="http://m.jinsom.cn/17.html" title="假如，还有那么一天">假如，还有那么一天</a></h2>
            <ul class="text">
                <p>假如，还有那么一天， 你我徜徉在蒹葭水湄，任逢春的粉桃飞花长堤十里雪涛，将梨花飞雨的一幕织就一幅曼妙。我一定和你吟咏一阕婉约的窈窕，葳蕤春意无限好，将流光的微醉素笔细描，浅唱岁月的静好。任韶华易老，流光将人抛，我亦无悔岁月的轮回，把一缕深藏的情意，凝于笔端的绮 &hellip;&#8230;</p>
            </ul>
            <div class="textfoot">
                <a href="/" style="float: left;">2016/08/02</a>
                <a href="http://m.jinsom.cn/tag/假如">#假如</a>
                <m class="post-like">
                    <a href="javascript:;" data-action="ding" data-id="17" class="favorite"> <span class="count">
 261</span>
                    </a>
                </m>

        </article>
        <article>
            <h2 class="title"><a href="http://m.jinsom.cn/15.html" title="青春是一场大雨，总想任性的再去淋一次">青春是一场大雨，总想任性的再去淋一次</a></h2>
            <ul class="text">
                <p>当回首深深浅浅的脚印不禁顿足扼腕，恨冬日太短，夏日不长，真想把还没有走完的青春重新再走一遍。 便知该如何珍惜每一抹黄昏，每一缕霞光，叹只叹光阴不肯倒流，从此再也不敢懵懂与疏狂。 当泪痕勾勒成遗憾，回忆夸饰着伤感，逝水比喻时光荏苒，终于我们不再为了生命狂欢，为爱 &hellip;&#8230;</p>
            </ul>
            <div class="textfoot">
                <a href="/" style="float: left;">2016/08/02</a>
                <a href="http://m.jinsom.cn/tag/散场">#散场</a> <a href="http://m.jinsom.cn/tag/青春">#青春</a>
                <m class="post-like">
                    <a href="javascript:;" data-action="ding" data-id="15" class="favorite"> <span class="count">
 53</span>
                    </a>
                </m>

        </article>
        <article>
            <h2 class="title"><a href="http://m.jinsom.cn/13.html" title="花开半夏，为你写下美丽诗篇">花开半夏，为你写下美丽诗篇</a></h2>
            <ul class="text">
                <p>执笔一段，水墨情缘。如记忆的陌生缓缓盛开。遇的惊艳。或温柔，事过境迁，物是人非，你来过，又走了。看着你曾经留下落花馨香般的回忆，又让我想起了缘起的曾经。 你是我落寞之时的一缕暖；是我黯淡之中的一抹光；是我笔下最动人的一阙清词；是我红尘中最美的相思。我愿倾一生柔 &hellip;&#8230;</p>
            </ul>
            <div class="textfoot">
                <a href="/" style="float: left;">2016/08/02</a>

                <m class="post-like">
                    <a href="javascript:;" data-action="ding" data-id="13" class="favorite"> <span class="count">
 63</span>
                    </a>
                </m>

        </article>
        <div class="post-nav-inside">
            <div class="post-nav-left"></div>
            <div class="post-nav-right"><a href="http://m.jinsom.cn/category/manshenghuo/page/2" >下一页</a></div>
        </div>

    </div>
</div>
<div class="blank"></div>
<footer>
    <div class="footavatar">
        <img src="http://m.jinsom.cn/wp-content/uploads/2016/08/photo.jpg" class="footphoto">
        <ul class="footinfo">
            <p class="fname"><a href="#" >林可可</a>  </p>
            <p class="finfo">兴趣：养猫，旅行，音乐</p>
            <p class="finfo">性格：可冷可热、小逗比、</p>
            <div style="float:right;font-size: 16px;">——越努力，越幸运！</div>
        </ul>
    </div>
    <section class="visitor">
        <div style="margin-bottom:10px; ">
            <h2 style="float: left;">左邻右舍</h2>
            <h2 style="float: right;"><a href="http://m.jinsom.cn/link" target="_blank">更多</a></h2>
        </div>
        <ul>
            <li><a href="" title="友链1"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s16.jpg"></a></li><li><a href="" title="友链2"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s15.jpg"></a></li><li><a href="" title="友链2"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s14.jpg"></a></li><li><a href="" title="友链4"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s13.jpg"></a></li><li><a href="" title="友链5"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s12.jpg"></a></li><li><a href="" title="友链6"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s10.jpg"></a></li><li><a href="" title="友链7"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s9.jpg"></a></li><li><a href="" title="友链8"><img src="http://m.jinsom.cn/wp-content/uploads/2016/09/u17118784372645714142fm116gp0.jpg"></a></li><li><a href="" title="友链9"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s7.jpg"></a></li><li><a href="" title="友链10"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s6.jpg"></a></li><li><a href="" title="友链11"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s4.jpg"></a></li><li><a href="" title="友链12"><img src="http://m.jinsom.cn/wp-content/uploads/2016/09/u1214338981888346188fm116gp0.jpg"></a></li><li><a href="" title="友链13"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s3.jpg"></a></li><li><a href="" title="友链14"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s2.jpg"></a></li><li><a href="" title="友链15"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s1.jpg"></a></li><li><a href="" title="友链16"><img src="http://m.jinsom.cn/wp-content/uploads/2016/08/s0.gif"></a></li>      </ul>
    </section>
    <div class="Copyright">
        <div class="n-a">
            <p>每评论一次就会自动排在第一位:)</p>
            <ul>
                <li><a target="_blank" href="http://genericpills-viagra.mobi/" title="ocekokd"><img alt='' src='https://secure.gravatar.com/avatar/1129d71b39229b150425ea8a44298e60?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/1129d71b39229b150425ea8a44298e60?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://tadalafilcialis-buy.mobi/#tadalafil-cialis" title="otekura"><img alt='' src='https://secure.gravatar.com/avatar/f881f1c11b11462136ecc9e682845e66?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/f881f1c11b11462136ecc9e682845e66?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://buyazithromycinzithromax.mobi/#zithromax-z-pak" title="inodegp"><img alt='' src='https://secure.gravatar.com/avatar/436533a907bbbb4de483b26478079cf8?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/436533a907bbbb4de483b26478079cf8?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://no-prescriptionfurosemide-lasix.mobi/" title="umiroguutu"><img alt='' src='https://secure.gravatar.com/avatar/29a0338082e57eecf2d8192a986f833d?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/29a0338082e57eecf2d8192a986f833d?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://cialis-genericcanada.mobi/" title="usabavaquya"><img alt='' src='https://secure.gravatar.com/avatar/06a8c19246d8776586e2496f492143b5?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/06a8c19246d8776586e2496f492143b5?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://canadiangenericcialis.mobi/#cialis-20-mg-lowest-price" title="ebxeni"><img alt='' src='https://secure.gravatar.com/avatar/36f779f6b79e7a5c1cb9a48b9e4e56db?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/36f779f6b79e7a5c1cb9a48b9e4e56db?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://buyonlinepharmacy.mobi/" title="ukasalitfazi"><img alt='' src='https://secure.gravatar.com/avatar/8c8155ad588144e6daa57062b54c8ee1?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/8c8155ad588144e6daa57062b54c8ee1?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://doxycycline100mg-order.mobi/" title="ipukuwwetix"><img alt='' src='https://secure.gravatar.com/avatar/e15b60de807b498428eed4e999ffea3d?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/e15b60de807b498428eed4e999ffea3d?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://prednisone20mg-online.mobi/#prednisone-20-mg-side-effects" title="ehelatudo"><img alt='' src='https://secure.gravatar.com/avatar/a31588fa27a93c487951edfface98e10?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/a31588fa27a93c487951edfface98e10?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://onlinenoprescription-pharmacy.mobi/" title="iaxneresocjo"><img alt='' src='https://secure.gravatar.com/avatar/e4d8c680b332e911d962992796b582e9?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/e4d8c680b332e911d962992796b582e9?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://genericcheapestcialis.mobi/#generic-cialis-online" title="emupadir"><img alt='' src='https://secure.gravatar.com/avatar/f19f421fe5af85d642c088c9f3045b26?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/f19f421fe5af85d642c088c9f3045b26?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://viagraonline-cheapestprice.mobi/" title="eforeuoqusvuw"><img alt='' src='https://secure.gravatar.com/avatar/62adb39ceb35bcf42aabc1ba7cb4f6ca?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/62adb39ceb35bcf42aabc1ba7cb4f6ca?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://cialis-generic-for-sale.com/" title="adazoluriraqr"><img alt='' src='https://secure.gravatar.com/avatar/39f6b23569102730eb764e1a39bd79ed?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/39f6b23569102730eb764e1a39bd79ed?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://cialis20mgbuy.mobi/#generic-cialis" title="orizugoc"><img alt='' src='https://secure.gravatar.com/avatar/1c29ce6f7ee4af4bb566a443ce9f3bc2?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/1c29ce6f7ee4af4bb566a443ce9f3bc2?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://genericpills-viagra.mobi/" title="olofiiyu"><img alt='' src='https://secure.gravatar.com/avatar/7cf737aa42a98f7f237faa37da357149?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/7cf737aa42a98f7f237faa37da357149?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://pharmacycheap-online.net/" title="aozelabki"><img alt='' src='https://secure.gravatar.com/avatar/17cb91f8efb484fb11c583ac3576807b?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/17cb91f8efb484fb11c583ac3576807b?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li>   </ul>
        </div>
        <ul style="clear: both;">
            <p>© Copyright 2009-2016 林可可·博客</p>     </ul>
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
        // if ($(this).hasClass('done')) {
        // return false;
        // } else {
        $(this).addClass('done');
        var id = $(this).data("id"),
            action = $(this).data('action'),
            rateHolder = $(this).children('.count');
        var ajax_data = {
            action: "bigfa_like",
            um_id: id,
            um_action: action
        };
        $.post("/wp-admin/admin-ajax.php", ajax_data,
            function(data) {
                $(rateHolder).html(data);
            });
        return false;
        // }
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






