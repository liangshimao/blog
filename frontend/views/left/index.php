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
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css" media="screen"/>
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
            <li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-page page_item menu-item-158"><a href="<?=Url::toRoute('/about/index')?>">关于我</a></li>
            <li id="menu-item-161" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-161"><a href="<?=Url::toRoute('/original/index')?>">生活感悟</a></li>
            <li id="menu-item-163" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-163"><a href="<?=Url::toRoute('/timer/index')?>">碎言碎语</a></li>
            <li id="menu-item-162" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-162"><a href="<?=Url::toRoute('/beauty/index')?>">优美散文</a></li>
            <li id="menu-item-191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-191"><a href="<?=Url::toRoute('/positive/index')?>">正能量</a></li>
            <li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160 current-menu-item current_page_item"><a href="<?=Url::toRoute('/left/index')?>">留言板</a></li>
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
    body {background: url(http://m.jinsom.cn/wp-content/themes/jinsomM/images/about-bg.jpg);}
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
    .mainContent {background: 0;padding: 70px 0 70px;width: 730px;margin: auto;}
    .textfoot { text-align: left;padding: 20px 25px 85px; }
    .about-bg{background: url(http://m.jinsom.cn/wp-content/themes/jinsomM/images/about-bg.jpg);
        background-repeat: no-repeat;}
    section#comments {background: 0;}
    .mem_message {
        background: 0;
        border-bottom: rgba(60, 126, 66, 0) 40px solid;
        z-index: 999;
        position: relative;
        width: 557px;
        margin-left: 100px;
    }
    .mem_feedlist dd{    width: 427px;}
    footer {margin-top: 0px;}


</style>
<div class="about-bg">
    <div class="mainContent">
        <div style="position: absolute;right: 40px;">
            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/music.png" border="0">
            <p style="text-align: center;"><embed wmode="transparent" width="25" height="20" src="http://m.jinsom.cn/wp-content/themes/jinsomM/music/singlemp3player.swf?file=http://m.jinsom.cn/wp-content/uploads/2016/08/王菲-流年.mp3&repeatPlay=true&songVolume=30&autoStart=true"
                                                  type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></p></div>



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



        <div id="respond">
            <div class="mem_message lft">
                <div style="background: #fff;padding: 10px 10px 0px;box-shadow: #999 2px 2px 3px;">
                    <h5>
                        <span class="l">随便说点什么吧！</span>
                        <span class="r"></span>
                    </h5>
                    <div class="mem_discuss clearfix">
                        <dl class="mem_feedlist" id="feed_comment">
                            <dt>
                                <img alt='' src='https://secure.gravatar.com/avatar/334c4a4c42fdb79d7ebc3e73b517e6f8?s=50&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/334c4a4c42fdb79d7ebc3e73b517e6f8?s=100&amp;d=identicon&amp;r=g 2x' class='avatar avatar-50 photo' height='50' width='50' />
                            </dt>
                            <form action="http://m.jinsom.cn/wp-comments-post.php" method="post" id="commentform">
                                <div id="author_info">
                                    <input type="text" name="url" id="url" placeholder="网站：" value="" tabindex="3" />                    <input type="text" name="email" placeholder="邮箱：" id="email" value="" tabindex="2" style=""/>                    <input type="text" name="author" placeholder="昵称：" id="author" value="" tabindex="1" style=""/>          </div>
                                <dd class=""> <em class="arrow_css feed_arrow"><u></u></em>
                                    <div class="mem_comment">
                                        <div id="quoteDiv"></div>
                                        <div id="author_textarea">
                                            <textarea  name="comment" id="comment" ></textarea>
                                        </div>
                                    </div>
                                    <a class="ico_v ico_emotion" href="javascript:void(0);"><i class="ico"></i> 表情</a>
                                    <div id="js_emotion" class="commentPop" style="display: none;"><div id="facebox" class="qqFace"><table border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>




                                                    <td><a href="javascript:grin('/微笑')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/1.gif"  alt="微笑" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/可爱')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/2.gif"alt="可爱" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/害羞')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/3.gif"  alt="害羞" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/加油')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/4.gif"alt="加油" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/亲亲')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/5.gif"  alt="亲亲" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/色')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/6.gif"alt="色" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/坏坏')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/7.gif"  alt="坏坏" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/大哭')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/8.gif"alt="大哭" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/不错')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/9.gif"  alt="不错" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/猪头')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/10.gif"alt="猪头" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/阳光')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/11.gif"  alt="阳光" /></a>
                                                    </td>
                                                    <td><a href="javascript:grin('/喜欢')">
                                                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/12.gif"alt="喜欢" /></a>
                                                    </td>
                                                </tr></tbody></table></div></div>



                                    <span class="no-huifu"><a rel="nofollow" id="cancel-comment-reply-link" href="/guestbook#respond" style="display:none;">取消</a></span>
                                    <input type="submit" class="submit" value="确定">
                                </dd>
                                <input type='hidden' name='comment_post_ID' value='2' id='comment_post_ID' />
                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />

                            </form>
                        </dl>
                        <div id="thread_list">

                        </div>
                    </div>
                </div>
            </div><!-- 评论结束 -->
        </div>





        <section class="comments" id="comments">
            <div id="addnewcomment"></div>

            <article class="comment"  id="comment-4166">
                <a href="" class="comment-img">
                    <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/default-comments.jpg" width="50" height="50"> </a>
                <div class="comment-body">
                    <div class="text"> <k><a class="name" href="">
                                匿名（丑八怪）</a>
                        </k></div>
                    <div class="text1">
                        <p><p>不错</p>
                        </p>
                    </div>
                    <div class="attribution"><k style="text-align: left;color:#a6a6a6;">  02-23 上午10:05</k><k style="float: right;"><a rel='nofollow' class='comment-reply-link' href='http://m.jinsom.cn/guestbook?replytocom=4166#respond' onclick='return addComment.moveForm( "comment-4166", "4166", "respond", "2" )' aria-label='回复给'>回复</a></k></div>
                </div>
            </article>
            </li><!-- #comment-## -->

            <article class="comment"  id="comment-3619">
                <a href="" class="comment-img">
                    <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/default-comments.jpg" width="50" height="50"> </a>
                <div class="comment-body">
                    <div class="text"> <k><a class="name" href="">
                                匿名（丑八怪）</a>
                        </k></div>
                    <div class="text1">
                        <p><p>请问博主这个箭头的美化是怎么实现的<br />
                            <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/4.gif" alt="/加油" class="wp-smiley" style="height: 1em; max-height: 1em;" />  <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/4.gif" alt="/加油" class="wp-smiley" style="height: 1em; max-height: 1em;" /></p>
                        </p>
                    </div>
                    <div class="attribution"><k style="text-align: left;color:#a6a6a6;">  02-22 下午8:38</k><k style="float: right;"><a rel='nofollow' class='comment-reply-link' href='http://m.jinsom.cn/guestbook?replytocom=3619#respond' onclick='return addComment.moveForm( "comment-3619", "3619", "respond", "2" )' aria-label='回复给'>回复</a></k></div>
                </div>
            </article>
            </li><!-- #comment-## -->

            <article class="comment"  id="comment-367">
                <a href="" class="comment-img">
                    <img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/default-comments.jpg" width="50" height="50"> </a>
                <div class="comment-body">
                    <div class="text"> <k><a class="name" href="">
                                匿名（丑八怪）</a>
                        </k></div>
                    <div class="text1">
                        <p><p><img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/12.gif" alt="/喜欢" class="wp-smiley" style="height: 1em; max-height: 1em;" /></p>
                        </p>
                    </div>
                    <div class="attribution"><k style="text-align: left;color:#a6a6a6;">  02-19 上午12:43</k><k style="float: right;"><a rel='nofollow' class='comment-reply-link' href='http://m.jinsom.cn/guestbook?replytocom=367#respond' onclick='return addComment.moveForm( "comment-367", "367", "respond", "2" )' aria-label='回复给'>回复</a></k></div>
                </div>
            </article>
            </li><!-- #comment-## -->

            <article class="comment"  id="comment-336">
                <a href="" class="comment-img">
                    <img alt='' src='https://secure.gravatar.com/avatar/?s=50&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/?s=100&amp;d=identicon&amp;r=g 2x' class='avatar avatar-50 photo avatar-default' height='50' width='50' /> </a>
                <div class="comment-body">
                    <div class="text"> <k><a class="name" href="">
                                Mr.Lin</a>
                        </k></div>
                    <div class="text1">
                        <p><p>主题6666</p>
                        </p>
                    </div>
                    <div class="attribution"><k style="text-align: left;color:#a6a6a6;">  02-08 下午6:43</k><k style="float: right;"><a rel='nofollow' class='comment-reply-link' href='http://m.jinsom.cn/guestbook?replytocom=336#respond' onclick='return addComment.moveForm( "comment-336", "336", "respond", "2" )' aria-label='回复给Mr.Lin'>回复</a></k></div>
                </div>
            </article>
            </li><!-- #comment-## -->

            <article class="comment"  id="comment-335">
                <a href="" class="comment-img">
                    <img alt='' src='https://secure.gravatar.com/avatar/a31a3e0d74c8c55a002eb7f791eaa4e9?s=50&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/a31a3e0d74c8c55a002eb7f791eaa4e9?s=100&amp;d=identicon&amp;r=g 2x' class='avatar avatar-50 photo' height='50' width='50' /> </a>
                <div class="comment-body">
                    <div class="text"> <k><a class="name" href="http://www.mhcf.net/">
                                姜辰</a>
                        </k></div>
                    <div class="text1">
                        <p><p>主题很棒，前来支持。</p>
                        </p>
                    </div>
                    <div class="attribution"><k style="text-align: left;color:#a6a6a6;">  02-08 下午4:38</k><k style="float: right;"><a rel='nofollow' class='comment-reply-link' href='http://m.jinsom.cn/guestbook?replytocom=335#respond' onclick='return addComment.moveForm( "comment-335", "335", "respond", "2" )' aria-label='回复给姜辰'>回复</a></k></div>
                </div>
            </article>
            </li><!-- #comment-## -->

            <article class="comment"  id="comment-334">
                <a href="" class="comment-img">
                    <img alt='' src='https://secure.gravatar.com/avatar/1e1386268f309c18698fb72c0bdc31c6?s=50&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/1e1386268f309c18698fb72c0bdc31c6?s=100&amp;d=identicon&amp;r=g 2x' class='avatar avatar-50 photo' height='50' width='50' /> </a>
                <div class="comment-body">
                    <div class="text"> <k><a class="name" href="http://www.tingfeng-key.com">
                                听风</a>
                        </k></div>
                    <div class="text1">
                        <p><p>主题很好看,点赞</p>
                        </p>
                    </div>
                    <div class="attribution"><k style="text-align: left;color:#a6a6a6;">  02-08 下午4:26</k><k style="float: right;"><a rel='nofollow' class='comment-reply-link' href='http://m.jinsom.cn/guestbook?replytocom=334#respond' onclick='return addComment.moveForm( "comment-334", "334", "respond", "2" )' aria-label='回复给听风'>回复</a></k></div>
                </div>
            </article>
            </li><!-- #comment-## -->

            <article class="comment"  id="comment-332">
                <a href="" class="comment-img">
                    <img alt='' src='https://secure.gravatar.com/avatar/?s=50&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/?s=100&amp;d=identicon&amp;r=g 2x' class='avatar avatar-50 photo avatar-default' height='50' width='50' /> </a>
                <div class="comment-body">
                    <div class="text"> <k><a class="name" href="">
                                aaa</a>
                        </k></div>
                    <div class="text1">
                        <p><p><img src="http://m.jinsom.cn/wp-content/themes/jinsomM/images/smilies/3.gif" alt="/害羞" class="wp-smiley" style="height: 1em; max-height: 1em;" /></p>
                        </p>
                    </div>
                    <div class="attribution"><k style="text-align: left;color:#a6a6a6;">  02-01 下午5:41</k><k style="float: right;"><a rel='nofollow' class='comment-reply-link' href='http://m.jinsom.cn/guestbook?replytocom=332#respond' onclick='return addComment.moveForm( "comment-332", "332", "respond", "2" )' aria-label='回复给aaa'>回复</a></k></div>
                </div>
            </article>
            </li><!-- #comment-## -->
        </section>


        <div id="comments-nav">

            <a class="prev page-numbers" href="http://m.jinsom.cn/guestbook/comment-page-9#comments">上一页</a>
            <a class='page-numbers' href='http://m.jinsom.cn/guestbook/comment-page-1#comments'>1</a>
            <span class="page-numbers dots">&hellip;</span>
            <a class='page-numbers' href='http://m.jinsom.cn/guestbook/comment-page-8#comments'>8</a>
            <a class='page-numbers' href='http://m.jinsom.cn/guestbook/comment-page-9#comments'>9</a>
            <span class='page-numbers current'>10</span>
        </div>
    </div>
</div><!-- about-bg -->
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
                <li><a target="_blank" href="http://zoloft-no-prescriptionbuy.mobi/" title="iawajet"><img alt='' src='https://secure.gravatar.com/avatar/de334e09d1cf533ce9e12b363b59a350?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/de334e09d1cf533ce9e12b363b59a350?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://genericpills-viagra.mobi/" title="ocekokd"><img alt='' src='https://secure.gravatar.com/avatar/1129d71b39229b150425ea8a44298e60?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/1129d71b39229b150425ea8a44298e60?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://tadalafilcialis-buy.mobi/#tadalafil-cialis" title="otekura"><img alt='' src='https://secure.gravatar.com/avatar/f881f1c11b11462136ecc9e682845e66?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/f881f1c11b11462136ecc9e682845e66?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://no-prescriptionfurosemide-lasix.mobi/" title="umiroguutu"><img alt='' src='https://secure.gravatar.com/avatar/29a0338082e57eecf2d8192a986f833d?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/29a0338082e57eecf2d8192a986f833d?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://cialis-genericcanada.mobi/" title="usabavaquya"><img alt='' src='https://secure.gravatar.com/avatar/06a8c19246d8776586e2496f492143b5?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/06a8c19246d8776586e2496f492143b5?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://canadiangenericcialis.mobi/#cialis-20-mg-lowest-price" title="ebxeni"><img alt='' src='https://secure.gravatar.com/avatar/36f779f6b79e7a5c1cb9a48b9e4e56db?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/36f779f6b79e7a5c1cb9a48b9e4e56db?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://buyonlinepharmacy.mobi/" title="ukasalitfazi"><img alt='' src='https://secure.gravatar.com/avatar/8c8155ad588144e6daa57062b54c8ee1?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/8c8155ad588144e6daa57062b54c8ee1?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://doxycycline100mg-order.mobi/" title="ipukuwwetix"><img alt='' src='https://secure.gravatar.com/avatar/e15b60de807b498428eed4e999ffea3d?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/e15b60de807b498428eed4e999ffea3d?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://prednisone20mg-online.mobi/#prednisone-20-mg-side-effects" title="ehelatudo"><img alt='' src='https://secure.gravatar.com/avatar/a31588fa27a93c487951edfface98e10?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/a31588fa27a93c487951edfface98e10?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://onlinenoprescription-pharmacy.mobi/" title="iaxneresocjo"><img alt='' src='https://secure.gravatar.com/avatar/e4d8c680b332e911d962992796b582e9?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/e4d8c680b332e911d962992796b582e9?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://genericcheapestcialis.mobi/#generic-cialis-online" title="emupadir"><img alt='' src='https://secure.gravatar.com/avatar/f19f421fe5af85d642c088c9f3045b26?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/f19f421fe5af85d642c088c9f3045b26?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://viagraonline-cheapestprice.mobi/" title="eforeuoqusvuw"><img alt='' src='https://secure.gravatar.com/avatar/62adb39ceb35bcf42aabc1ba7cb4f6ca?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/62adb39ceb35bcf42aabc1ba7cb4f6ca?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://cialis-generic-for-sale.com/" title="adazoluriraqr"><img alt='' src='https://secure.gravatar.com/avatar/39f6b23569102730eb764e1a39bd79ed?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/39f6b23569102730eb764e1a39bd79ed?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://cialis20mgbuy.mobi/#generic-cialis" title="orizugoc"><img alt='' src='https://secure.gravatar.com/avatar/1c29ce6f7ee4af4bb566a443ce9f3bc2?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/1c29ce6f7ee4af4bb566a443ce9f3bc2?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://genericpills-viagra.mobi/" title="olofiiyu"><img alt='' src='https://secure.gravatar.com/avatar/7cf737aa42a98f7f237faa37da357149?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/7cf737aa42a98f7f237faa37da357149?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li><li><a target="_blank" href="http://pharmacycheap-online.net/" title="aozelabki"><img alt='' src='https://secure.gravatar.com/avatar/17cb91f8efb484fb11c583ac3576807b?s=40&#038;d=identicon&#038;r=g' srcset='https://secure.gravatar.com/avatar/17cb91f8efb484fb11c583ac3576807b?s=80&amp;d=identicon&amp;r=g 2x' class='avatar avatar-40 photo' height='40' width='40' /></a></li>   </ul>
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
<script type="text/javascript">
    var ias = $.ias({
        container: "#comments", //包含所有文章的元素
        item: ".comment", //文章元素
        pagination: "#comments-nav", //分页元素
        next: "a.prev.page-numbers", //下一页元素
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







