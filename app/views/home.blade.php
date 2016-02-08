<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">


    <!-- Custom styles for this template -->

    {{HTML::style('/assets/css/style.css')}}

</head>

<body>
<!-- here starts navbar-->
<nav class="navbar navbar-trans" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-danger" href="#">BRAND</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapsible">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="bota.html">Bota</a>
                </li>
                <li><a href="politike.html">Politike</a>
                </li>
                <li><a href="aktualitet.html">Aktualitet</a>
                </li>
                <li><a href="teknologji.html">Teknologji</a>
                </li>
                <li><a href="sport.html">Sport</a>
                </li>
                @if(Auth::user()->get())
                <li><a href="#">{{Auth::user()->get()->username}}</a>
                </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-heart-o fa-lg"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- here ends navbar-->

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="row">
                <h4 class="block-title"><span>LATEST NEWS</span></h4>
                <div id="owl-example" class="owl-carousel">
                    <div>
                        <div class="item">
                            <img src="http://images3.alphacoders.com/101/101527.jpg" />
                            <div class="slider-item-content">
                                <div class="meta-items">
                                    <a class="meta-item " href="">
                                        <i class="fa fa-comment-o fa-lg"></i> <span>5</span>
                                    </a>
                                    <a href="#" class="meta-item">
                                        <i class="fa fa-pencil-square-o fa-lg "></i>
                                        <span>Tien Nguyen</span>
                                    </a>
                                    <a class="meta-item " href="">
                                        <i class="fa fa-clock-o fa-lg"></i>
                                        <span>Apr 20, 2015</span>
                                    </a>
                                </div>
                                <div class="item-title">
                                    <h3>This is the title of photo.</h3>
                                </div>
                                <div class="item-readmore">
                                    <a class="item-readmore" href="">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item">
                            <img src="http://images3.alphacoders.com/101/101527.jpg" />
                            <div class="slider-item-content">
                                <div class="meta-items">
                                    <a class="meta-item " href="">
                                        <i class="fa fa-comment-o fa-lg"></i> <span>5</span>
                                    </a>
                                    <a href="" class="meta-item ">
                                        <i class="fa fa-pencil-square-o fa-lg "></i>
                                        <span>Tien Nguyen</span>
                                    </a>
                                    <a class="meta-item meta-item-date" href="">
                                        <i class="fa fa-clock-o fa-lg"></i>
                                        <span>Apr 20, 2015</span>
                                    </a>
                                </div>
                                <div class="item-title">
                                    <h3>This is the title of photo 2.</h3>
                                </div>
                                <div class="item-readmore">
                                    <a class="item-readmore" href="">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item">
                            <img src="http://images3.alphacoders.com/101/101527.jpg" />
                            <div class="slider-item-content">
                                <div class="meta-items">
                                    <a class="meta-item " href="">
                                        <i class="fa fa-comment-o fa-lg"></i>
                                        <span>5</span>
                                    </a>
                                    <a href="" class="meta-item m">
                                        <i class="fa fa-pencil-square-o fa-lg "></i>
                                        <span>Tien Nguyen</span>
                                    </a>
                                    <a class="meta-item " href="">
                                        <i class="fa fa-clock-o fa-lg"></i>
                                        <span>Apr 20, 2015</span>
                                    </a>
                                </div>
                                <div class="item-title">
                                    <h3>This is the title of photo 3.</h3>
                                </div>
                                <div class="item-readmore">
                                    <a class="item-readmore" href="">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item">
                            <img src="http://images3.alphacoders.com/101/101527.jpg" />
                            <div class="slider-item-content">
                                <div class="meta-items">
                                    <a class="meta-item meta-item-comment-number" href="">
                                        <i class="fa fa-comment-o fa-lg"></i> <span>5</span>
                                    </a>
                                    <a href="" class="meta-item ">
                                        <i class="fa fa-pencil-square-o fa-lg "></i>
                                        <span>Tien Nguyen</span>
                                    </a>
                                    <a class="meta-item " href="">
                                        <i class="fa fa-clock-o fa-lg"></i>
                                        <span>Apr 20, 2015</span>
                                    </a>
                                </div>
                                <div class="item-title">
                                    <h3>This is the title of photo 4.</h3>
                                </div>
                                <div class="item-readmore">
                                    <a class="item-readmore" href="">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HERE STARTS SOME SHIT-->
            <div class="row">
                <div class="td_block_wrap td_block_2   td-pb-border-top">
                    <h4 class="block-title"><span>ANDROID</span></h4>
                    <div class="td_block_inner">
                        <div class="td-block-row">
                            <div class="td-block-span6">
                                <div class="td_module_2 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href=""><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/81-324x160.jpg" alt="" title="Robots helped inspire deep learning might become">
                                            </a>
                                        </div> <a href="" class="td-post-category">Android</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="" rel="bookmark" title="Robots helped inspire deep learning might become">Robots helped inspire deep learning might become</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="">Armin Vans</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="">0</a>
                                        </div>
                                    </div>
                                    <div class="td-excerpt">
                                        Happy Sunday from Software Expand! In this week's edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense... </div>
                                    <meta itemprop="author" content="">
                                    <meta itemprop="datePublished" content="">
                                    <meta itemprop="headline " content="">
                                    <meta itemprop="image" content="">
                                    <meta itemprop="interactionCount" content=""> </div>

                            </div>
                            <div class="td-block-span6">
                                <div class="td_module_2 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="" rel="bookmark" title=""><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/71-324x160.jpg" alt="" title="">
                                            </a>
                                        </div> <a href="" class="td-post-category">Android</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="" rel="bookmark" title="">Building a Gimbal in Rust: An Introduction</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="">Armin Vans</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="">0</a>
                                        </div>
                                    </div>
                                    <div class="td-excerpt">
                                        Happy Sunday from Software Expand! In this week's edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense... </div>
                                    <meta itemprop="author" content="">
                                    <meta itemprop="datePublished" content="">
                                    <meta itemprop="headline " content="">
                                    <meta itemprop="image" content="">
                                    <meta itemprop="interactionCount" content=""> </div>
                            </div>
                        </div>
                        <div class="td-block-row">
                            <div class="td-block-span6">
                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-thumb">
                                        <a href="" rel="bookmark" title=""><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/510-100x70.jpg" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="" rel="bookmark" title="">Audio Tour App Detour Steers You Away from the Typical Tourist...</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="">
                                    <meta itemprop="datePublished" content="">
                                    <meta itemprop="headline " content="">
                                    <meta itemprop="image" content="">
                                    <meta itemprop="interactionCount" content=""> </div>
                            </div>
                            <div class="td-block-span6">
                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-thumb">
                                        <a href="" rel="bookmark" title=""><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/66-100x70.jpg" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="" rel="bookmark" title="">How Internet Providers Get Around War Zones</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="">
                                    <meta itemprop="datePublished" content="">
                                    <meta itemprop="headline " content="">
                                    <meta itemprop="image" content="">
                                    <meta itemprop="interactionCount" content=""> </div>
                            </div>
                        </div>
                        <div class="td-block-row">
                            <div class="td-block-span6">
                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-thumb">
                                        <a href="" rel="bookmark" title=""><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/410-100x70.jpg" alt="" title="Announcing a specification for PHP">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="" rel="bookmark" title="">Announcing a specification for PHP</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015
                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="">
                                    <meta itemprop="datePublished" content="">
                                    <meta itemprop="headline " content="">
                                    <meta itemprop="image" content="">
                                    <meta itemprop="interactionCount" content=""> </div>
                            </div>
                            <div class="td-block-span6">
                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-thumb">
                                        <a href=""><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/110-100x70.jpg" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="" rel="bookmark" title="">The Ideal Length of Everything Online, Backed by Research</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="">
                                    <meta itemprop="datePublished" content="">
                                    <meta itemprop="headline " content="">
                                    <meta itemprop="image" content="">
                                    <meta itemprop="interactionCount" content=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- HERE GOES SOME 2nd random shit-->
            <div class="row">

                <div class="td_block_wrap td_block_1  td_with_ajax_pagination td-pb-border-top">
                    <h4 class="block-title"><span style="margin-right: 0px;">TECH AND GADGETS</span></h4>
                    <div  class="td_block_inner">

                        <div class="td-block-row">

                            <div class="td-block-span6">

                                <div class="td_module_4 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything"><img width="324" height="235" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/26-324x235.jpg" alt="" title="Amazon’s Apple Watch killer will be free and sell you everything">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-technology/" class="td-post-category">Technology</a> </div>

                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything">Amazon’s Apple Watch killer will be free and sell you everything</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius/">John Doe</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/#comments">0</a>
                                        </div>
                                    </div>

                                    <div class="td-excerpt">
                                        The model is talking about booking her latest gig, modeling WordPress underwear in the brand latest Perfectly Fit campaign, which was shot by Lachian... </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#">
                                </div>

                            </div>
                            <!-- ./td-block-span6 -->

                            <div class="td-block-span6">

                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">

                                    <div class="td-module-thumb">
                                        <a href="http://demo.tagdiv.com/newspaper/td-post-microsoft-subsumes-open-tech-unit-back-inside-mothership/" rel="bookmark" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership"><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/32-100x70.jpg" alt="" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-microsoft-subsumes-open-tech-unit-back-inside-mothership/" rel="bookmark" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership">Microsoft Subsumes Open Tech Unit Back Inside Mothership</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">

                                    <div class="td-module-thumb">
                                        <a href="http://demo.tagdiv.com/newspaper/td-post-why-tech-accelerators-may-soon-be-as-irrelevant-as-an-mba/" rel="bookmark" title="Why tech accelerators may soon be as irrelevant as an MBA"><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/28-100x70.jpg" alt="" title="Why tech accelerators may soon be as irrelevant as an MBA">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-why-tech-accelerators-may-soon-be-as-irrelevant-as-an-mba/" rel="bookmark" title="Why tech accelerators may soon be as irrelevant as an MBA">Why tech accelerators may soon be as irrelevant as an MBA</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="entry-review-stars"><i class="td-icon-star"></i><i class="td-icon-star"></i><i class="td-icon-star"></i><i class="td-icon-star"></i><i class="td-icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">

                                    <div class="td-module-thumb">
                                        <a href="http://demo.tagdiv.com/newspaper/td-post-canon-xc10-4k-digital-camcorder-is-out-compact-versatile-and-for-only-2500/" rel="bookmark" title="Canon XC10 4K Digital Camcorder Is Out: Compact, Versatile And For Only $2,500"><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/46-100x70.jpg" alt="" title="Canon XC10 4K Digital Camcorder Is Out: Compact, Versatile And For Only $2,500">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-canon-xc10-4k-digital-camcorder-is-out-compact-versatile-and-for-only-2500/" rel="bookmark" title="Canon XC10 4K Digital Camcorder Is Out: Compact, Versatile And For Only $2,500">Canon XC10 4K Digital Camcorder Is Out: Compact, Versatile And For...</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">

                                    <div class="td-module-thumb">
                                        <a href="http://demo.tagdiv.com/newspaper/td-post-fuji-goes-fast-and-wide-with-its-new-16mm-f1-4-prime-lens/" rel="bookmark" title="Fuji goes fast and wide with its new 16mm f/1.4 prime lens"><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/45-100x70.jpg" alt="" title="Fuji goes fast and wide with its new 16mm f/1.4 prime lens">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-fuji-goes-fast-and-wide-with-its-new-16mm-f1-4-prime-lens/" rel="bookmark" title="Fuji goes fast and wide with its new 16mm f/1.4 prime lens">Fuji goes fast and wide with its new 16mm f/1.4 prime...</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->
                        </div>
                        <!--./row-fluid-->
                    </div>

                </div>

            </div>
            <div class="row">

                <div class="td_block_wrap td-pb-border-top">
                    <h4 class="block-title"><span style="margin-right: 0px;">TECH AND GADGETS</span></h4>
                    <div  class="td_block_inner">

                        <div class="td-block-row">

                            <div class="td-block-span6">

                                <div class="td_module_4 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything"><img width="324" height="235" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/26-324x235.jpg" alt="" title="Amazon’s Apple Watch killer will be free and sell you everything">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-technology/" class="td-post-category">Technology</a> </div>

                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything">Amazon’s Apple Watch killer will be free and sell you everything</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius/">John Doe</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/#comments">0</a>
                                        </div>
                                    </div>

                                    <div class="td-excerpt">
                                        The model is talking about booking her latest gig, modeling WordPress underwear in the brand latest Perfectly Fit campaign, which was shot by Lachian... </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#">
                                </div>

                            </div>
                            <!-- ./td-block-span6 -->

                            <div class="td-block-span6">

                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">

                                    <div class="td-module-thumb">
                                        <a href="http://demo.tagdiv.com/newspaper/td-post-microsoft-subsumes-open-tech-unit-back-inside-mothership/" rel="bookmark" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership"><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/32-100x70.jpg" alt="" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-microsoft-subsumes-open-tech-unit-back-inside-mothership/" rel="bookmark" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership">Microsoft Subsumes Open Tech Unit Back Inside Mothership</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">

                                    <div class="td-module-thumb">
                                        <a href="http://demo.tagdiv.com/newspaper/td-post-why-tech-accelerators-may-soon-be-as-irrelevant-as-an-mba/" rel="bookmark" title="Why tech accelerators may soon be as irrelevant as an MBA"><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/28-100x70.jpg" alt="" title="Why tech accelerators may soon be as irrelevant as an MBA">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-why-tech-accelerators-may-soon-be-as-irrelevant-as-an-mba/" rel="bookmark" title="Why tech accelerators may soon be as irrelevant as an MBA">Why tech accelerators may soon be as irrelevant as an MBA</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="entry-review-stars"><i class="td-icon-star"></i><i class="td-icon-star"></i><i class="td-icon-star"></i><i class="td-icon-star"></i><i class="td-icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">

                                    <div class="td-module-thumb">
                                        <a href="http://demo.tagdiv.com/newspaper/td-post-canon-xc10-4k-digital-camcorder-is-out-compact-versatile-and-for-only-2500/" rel="bookmark" title="Canon XC10 4K Digital Camcorder Is Out: Compact, Versatile And For Only $2,500"><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/46-100x70.jpg" alt="" title="Canon XC10 4K Digital Camcorder Is Out: Compact, Versatile And For Only $2,500">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-canon-xc10-4k-digital-camcorder-is-out-compact-versatile-and-for-only-2500/" rel="bookmark" title="Canon XC10 4K Digital Camcorder Is Out: Compact, Versatile And For Only $2,500">Canon XC10 4K Digital Camcorder Is Out: Compact, Versatile And For...</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                                <div class="td_module_6 td_module_wrap"  itemtype="http://schema.org/Article">

                                    <div class="td-module-thumb">
                                        <a href="http://demo.tagdiv.com/newspaper/td-post-fuji-goes-fast-and-wide-with-its-new-16mm-f1-4-prime-lens/" rel="bookmark" title="Fuji goes fast and wide with its new 16mm f/1.4 prime lens"><img width="100" height="70" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/45-100x70.jpg" alt="" title="Fuji goes fast and wide with its new 16mm f/1.4 prime lens">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-fuji-goes-fast-and-wide-with-its-new-16mm-f1-4-prime-lens/" rel="bookmark" title="Fuji goes fast and wide with its new 16mm f/1.4 prime lens">Fuji goes fast and wide with its new 16mm f/1.4 prime...</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                May 4, 2015

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->
                        </div>
                        <!--./row-fluid-->
                    </div>

                </div>

            </div>
            <!--HERE IS RECENT POSTS-->
            <div class="row">

                <div class="td-pb-span8 td-main-content" role="main">
                    <div class="td-ss-main-content">
                        <div class="clearfix"></div>
                        <h4 class="block-title"><span>LATEST ARTICLES</span></h4>

                        <div class="td-block-row">

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/26-324x160.jpg" alt="" title="Amazon’s Apple Watch killer will be free and sell you everything">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-technology/" class="td-post-category">Technology</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything">Amazon’s Apple Watch killer will be free and sell you everything</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius/">John Doe</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-microsoft-subsumes-open-tech-unit-back-inside-mothership/" rel="bookmark" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/32-324x160.jpg" alt="" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-technology/tagdiv-gadgets/" class="td-post-category">Gadgets</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-microsoft-subsumes-open-tech-unit-back-inside-mothership/" rel="bookmark" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership">Microsoft Subsumes Open Tech Unit Back Inside Mothership</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/admin/">Armin Vans</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-microsoft-subsumes-open-tech-unit-back-inside-mothership/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->
                        </div>
                        <!--./row-fluid-->

                        <div class="td-block-row">

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/whitewater-rafting-day-trip-new-york-east/" rel="bookmark" title="Whitewater Rafting Day Trip from New York in the East"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/69-324x160.jpg" alt="" title="Whitewater Rafting Day Trip from New York in the East">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-lifestyle/tagdiv-business/" class="td-post-category">Business</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/whitewater-rafting-day-trip-new-york-east/" rel="bookmark" title="Whitewater Rafting Day Trip from New York in the East">Whitewater Rafting Day Trip from New York in the East</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius2/">Matt Cloey</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/whitewater-rafting-day-trip-new-york-east/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-five-things-you-may-have-missed-over-the-weekend-from-the-world-of-business/" rel="bookmark" title="Five things you may have missed over the weekend from the world of business"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/67-324x160.jpg" alt="" title="Five things you may have missed over the weekend from the world of business">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-lifestyle/tagdiv-business/" class="td-post-category">Business</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-five-things-you-may-have-missed-over-the-weekend-from-the-world-of-business/" rel="bookmark" title="Five things you may have missed over the weekend from the world of business">Five things you may have missed over the weekend from the...</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/admin/">Armin Vans</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-five-things-you-may-have-missed-over-the-weekend-from-the-world-of-business/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->
                        </div>
                        <!--./row-fluid-->

                        <div class="td-block-row">

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-express-recipes-how-to-make-creamy-papaya-raita/" rel="bookmark" title="Express Recipes: How to make Creamy Papaya Raita"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/49-324x160.jpg" alt="" title="Express Recipes: How to make Creamy Papaya Raita">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-lifestyle/" class="td-post-category">Lifestyle</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-express-recipes-how-to-make-creamy-papaya-raita/" rel="bookmark" title="Express Recipes: How to make Creamy Papaya Raita">Express Recipes: How to make Creamy Papaya Raita</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius/">John Doe</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-express-recipes-how-to-make-creamy-papaya-raita/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-what-do-i-need-to-make-it-in-business/" rel="bookmark" title="What Do I Need To Make It In Business?"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/68-324x160.jpg" alt="" title="What Do I Need To Make It In Business?">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-lifestyle/tagdiv-business/" class="td-post-category">Business</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-what-do-i-need-to-make-it-in-business/" rel="bookmark" title="What Do I Need To Make It In Business?">What Do I Need To Make It In Business?</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius2/">Matt Cloey</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-what-do-i-need-to-make-it-in-business/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->
                        </div>
                        <!--./row-fluid-->

                        <div class="td-block-row">

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-kerala-india-they-call-it-own-country-for-nothing/" rel="bookmark" title="Kerala, India: They call it Own Country for nothing"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/1-324x160.jpg" alt="" title="Kerala, India: They call it Own Country for nothing">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-fashion/" class="td-post-category">Fashion</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-kerala-india-they-call-it-own-country-for-nothing/" rel="bookmark" title="Kerala, India: They call it Own Country for nothing">Kerala, India: They call it Own Country for nothing</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/admin/">Armin Vans</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-kerala-india-they-call-it-own-country-for-nothing/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="#" rel="bookmark" title="Designer fashion show kicks off Variety Week"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/12-324x160.jpg" alt="" title="Designer fashion show kicks off Variety Week">
                                            </a>
                                        </div> <a href="#" class="td-post-category">New look 2015</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-designer-fashion-show-kicks-off-variety-week/" rel="bookmark" title="Designer fashion show kicks off Variety Week">Designer fashion show kicks off Variety Week</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius2/">Matt Cloey</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-designer-fashion-show-kicks-off-variety-week/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->
                        </div>
                        <!--./row-fluid-->

                        <div class="td-block-row">

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap" itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-springfest-one-fashion-show-at-the-university-of-michigan/" rel="bookmark" title="SpringFest One Fashion Show at the University of Michigan"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/9-324x160.jpg" alt="" title="SpringFest One Fashion Show at the University of Michigan">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-fashion/tagdiv-new-look-2015/" class="td-post-category">New look 2015</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-springfest-one-fashion-show-at-the-university-of-michigan/" rel="bookmark" title="SpringFest One Fashion Show at the University of Michigan">SpringFest One Fashion Show at the University of Michigan</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/admin/">Armin Vans</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-springfest-one-fashion-show-at-the-university-of-michigan/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap" itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-patricia-urquiola-coats-transparent-furniture-for-glas-italia-with-an-iridescent-sheen/" rel="bookmark" title="Patricia Urquiola coats transparent furniture for Glas Italia with an iridescent sheen"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/119-324x160.jpg" alt="" title="Patricia Urquiola coats transparent furniture for Glas Italia with an iridescent sheen">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-design/tagdiv-interiors/" class="td-post-category">Interiors</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-patricia-urquiola-coats-transparent-furniture-for-glas-italia-with-an-iridescent-sheen/" rel="bookmark" title="Patricia Urquiola coats transparent furniture for Glas Italia with an iridescent sheen">Patricia Urquiola coats transparent furniture for Glas Italia with an iridescent...</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius/">John Doe</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-patricia-urquiola-coats-transparent-furniture-for-glas-italia-with-an-iridescent-sheen/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->
                        </div>
                        <!--./row-fluid-->

                        <div class="td-block-row">

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap" itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-denton-corker-marshall-the-mysterious-black-box-is-biennale-pavilion/" rel="bookmark" title="Denton Corker Marshall the mysterious black box is biennale pavilion"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/115-324x160.jpg" alt="" title="Denton Corker Marshall the mysterious black box is biennale pavilion">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-design/tagdiv-architecture/" class="td-post-category">Architecture</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-denton-corker-marshall-the-mysterious-black-box-is-biennale-pavilion/" rel="bookmark" title="Denton Corker Marshall the mysterious black box is biennale pavilion">Denton Corker Marshall the mysterious black box is biennale pavilion</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius/">John Doe</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-denton-corker-marshall-the-mysterious-black-box-is-biennale-pavilion/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->

                            <div class="td-block-span6">

                                <div class="td_module_1 td_module_wrap" itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-man-agrees-to-complete-50000-hereford-inlet-lighthouse-paint-job/" rel="bookmark" title="Man agrees to complete $50,000 Hereford Inlet Lighthouse paint job"><img width="324" height="160" itemprop="image" class="entry-thumb " src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/107-324x160.jpg" alt="" title="Man agrees to complete $50,000 Hereford Inlet Lighthouse paint job">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-design/tagdiv-architecture/" class="td-post-category">Architecture</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-man-agrees-to-complete-50000-hereford-inlet-lighthouse-paint-job/" rel="bookmark" title="Man agrees to complete $50,000 Hereford Inlet Lighthouse paint job">Man agrees to complete $50,000 Hereford Inlet Lighthouse paint job</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius2/">Matt Cloey</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-man-agrees-to-complete-50000-hereford-inlet-lighthouse-paint-job/#comments">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            <!-- ./td-block-span6 -->
                        </div>
                        <!--./row-fluid-->
                        <div class="clearfix"></div>
                    </div>
                </div>


            </div>

            <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a>
                    </li>
                    <li><a href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
        <!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a>
                    </li>
                    <li><a href="#">February 2014</a>
                    </li>
                    <li><a href="#">January 2014</a>
                    </li>
                    <li><a href="#">December 2013</a>
                    </li>
                    <li><a href="#">November 2013</a>
                    </li>
                    <li><a href="#">October 2013</a>
                    </li>
                    <li><a href="#">September 2013</a>
                    </li>
                    <li><a href="#">August 2013</a>
                    </li>
                    <li><a href="#">July 2013</a>
                    </li>
                    <li><a href="#">June 2013</a>
                    </li>
                    <li><a href="#">May 2013</a>
                    </li>
                    <li><a href="#">April 2013</a>
                    </li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a>
                    </li>
                    <li><a href="#">Twitter</a>
                    </li>
                    <li><a href="#">Facebook</a>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.blog-sidebar -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<footer class="blog-footer">
    <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-example").owlCarousel({
            items: 1,
            autoPlay: false,
            slideSpeed: 200,
            singleItem: true,
            paginationNumbers: true,
            afterUpdate: function() {
                updateSize();
            },
            afterInit: function() {
                updateSize();
            }
        });

        function updateSize() {
            var minHeight = parseInt($('.owl-item').eq(0).css('height'));
            $('.owl-item').each(function() {
                var thisHeight = parseInt($(this).css('height'));
                minHeight = (minHeight <= thisHeight ? minHeight : thisHeight);
            });
            $('.owl-wrapper-outer').css('height', minHeight + 'px');
        }
    });
</script>
</body>

</html>