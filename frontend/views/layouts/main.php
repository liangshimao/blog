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

<?php echo $content; ?>
<a href="#0" class="cd-top cd-is-visible"></a>
</body>
</html>



