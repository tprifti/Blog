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

    <title>Title of my website</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->

    {{HTML::style('/assets/user/css/style.css')}}

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
                <li><a href="">####</a>
                </li>
                <li><a href="">####</a>
                </li>
                <li><a href="">######</a>
                </li>
                <li><a href="">###</a>
                </li>
            </ul>            
        </div>
    </div>
</nav>
<header class="main_h">
    <div class="row">
        <a class="logo" href="#">BR</a>
        <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav>
            <ul>
                <li><a href=".sec01">Section 01</a></li>
                <li><a href=".sec02">Section 02</a></li>
                <li><a href=".sec03">Section 03</a></li>
                <li><a href=".sec04">Section 04</a></li>
            </ul>
        </nav>
    </div> <!-- / row -->
</header>
<!-- here ends navbar-->

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">My blog name</h1>
        <p class="lead blog-description">My blog moto(should find )</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="row">
                <h4 class="block-title slider"><span>RELATED POSTS</span></h4>
                <div id="owl-example" class="owl-carousel">
                    @foreach($slides as $slide)
                    <div>
                        <div class="item">
                            <img src="{{$slide->getImage()}}" />
                            <div class="slider-item-content">
                                <div class="meta-items">
                                    <a class="meta-item " href="">
                                        <i class="fa fa-comment-o fa-lg"></i> <span>5</span>
                                    </a>
                                    <a href="#" class="meta-item">
                                        <i class="fa fa-pencil-square-o fa-lg "></i>
                                        <span>{{$slide->getAdmin()}}</span>
                                    </a>
                                    <a class="meta-item " href="">
                                        <i class="fa fa-clock-o fa-lg"></i>
                                        <span>{{date('F d, Y',strtotime($slide->created_at))}}</span>
                                    </a>
                                </div>
                                <div class="item-title">
                                    <h3>{{$slide->title}}</h3>
                                </div>
                                <div class="item-readmore">
                                    <a class="item-readmore" href="{{route('article.show',$slide->slug)}}">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- HERE STARTS SOME SHIT-->
            <div class="row">
            <span>
                <div class="td_block_wrap td_block_2  td-pb-border-top">
                    <h4 class="block-title lifestyle"><span>LIFESTYLE</span></h4>
            </span>
                    <div class="td_block_inner">
                        @foreach($related->chunk(2) as $test)
                        <div class="td-block-row">
                            @foreach($test as $android)
                            <div class="td-block-span6">
                                <div class="td_module_2 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href=""><img width="324" height="160" itemprop="image" class="entry-thumb " src="{{$android->getImage()}}" alt="" title="Robots helped inspire deep learning might become">
                                            </a>
                                        </div> <a href="" class="td-post-category">{{$android->getCategory()}}</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="" rel="bookmark" title="Robots helped inspire deep learning might become">{{$android->title}}</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href=""><!-- {{$android->getAdmin()}} --></a> <span><!-- - --></span> </div>
                                        <div class="td-post-date">
                                            {{date('F d, Y',strtotime($android->created_at))}}

                                        </div>
                                        <div class="td-module-comments"><a href="">0</a>
                                        </div>
                                    </div>
                                    <div class="td-excerpt">{{substr($android->body,0,150)}} </div>
                                    <meta itemprop="author" content="">
                                    <meta itemprop="datePublished" content="">
                                    <meta itemprop="headline " content="">
                                    <meta itemprop="image" content="">
                                    <meta itemprop="interactionCount" content=""> </div>

                            </div>
                            @endforeach

                        </div>
                        @endforeach

                        @foreach($small->chunk(2) as $haha)
                        <div class="td-block-row">
                            @foreach($haha as $rihanna)
                            <div class="td-block-span6">
                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-thumb">
                                        <a href="" rel="bookmark" title=""><img width="100" height="70" itemprop="image" class="entry-thumb " src="{{$rihanna->getImage()}}" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="{{route('article.show',$rihanna->slug)}}" rel="bookmark" title="">{{$rihanna->title}}</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                {{date('F d, Y',strtotime($rihanna->created_at))}}

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="">
                                    <meta itemprop="datePublished" content="">
                                    <meta itemprop="headline " content="">
                                    <meta itemprop="image" content="">
                                    <meta itemprop="interactionCount" content=""> </div>
                            </div>
                                @endforeach

                        </div>
                            @endforeach

                    </div>

                </div>
            </div>


            <!-- HERE GOES SOME 2nd random shit-->
            <div class="row">

                <div class="td_block_wrap td_block_1  td_with_ajax_pagination td-pb-border-top">
                    <h4 class="block-title health"><span style="margin-right: 0px;">HEALTH</span></h4>
                    <div  class="td_block_inner">

                        <div class="td-block-row">

                            <div class="td-block-span6">
                                @foreach($gethealthArticle as $headArticle)
                                <div class="td_module_4 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything"><img width="324" height="235" itemprop="image" class="entry-thumb " src="{{$headArticle->getImage()}}" alt="" title="Amazon’s Apple Watch killer will be free and sell you everything">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-technology/" class="td-post-category">{{$headArticle->getCategory()}}</a> </div>

                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything">{{$headArticle->title}}</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="http://demo.tagdiv.com/newspaper/author/marius/"><!-- {{$headArticle->getAdmin()}} --></a> <span><!-- - --></span> </div>
                                        <div class="td-post-date">
                                            {{date('F d, Y',strtotime($headArticle->created_at))}}

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/#comments">0</a>
                                        </div>
                                    </div>

                                    <div class="td-excerpt">
                                        {{substr($headArticle->body,0,150)}} </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#">
                                </div>
                                    @endforeach

                            </div>

                            <!-- ./td-block-span6 -->

                            <div class="td-block-span6">
                                @foreach($smallHealthArticles as $smallArticle)
                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-thumb">
                                        <a href="http://demo.tagdiv.com/newspaper/td-post-microsoft-subsumes-open-tech-unit-back-inside-mothership/" rel="bookmark" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership"><img width="100" height="70" itemprop="image" class="entry-thumb " src="{{$smallArticle->getImage()}}" alt="" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://demo.tagdiv.com/newspaper/td-post-microsoft-subsumes-open-tech-unit-back-inside-mothership/" rel="bookmark" title="Microsoft Subsumes Open Tech Unit Back Inside Mothership">{{$smallArticle->title}}</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                                {{date('F d, Y',strtotime($smallArticle->created_at))}}

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#">
                                </div>
                                    @endforeach


                            </div>
                            <!-- ./td-block-span6 -->
                        </div>

                        <!--./row-fluid-->
                    </div>

                </div>

            </div>
            <div class="row">

                <div class="td_block_wrap td-pb-border-top">
                    <h4 class="block-title entertainment"><span style="margin-right: 0px;">ENTERTAINMENT</span></h4>
                    <div  class="td_block_inner">

                        <div class="td-block-row">

                            <div class="td-block-span6">
                                @foreach($entertainmentHeader as $enterheader)
                                <div class="td_module_4 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="{{route('article.show',$enterheader->slug)}}" rel="bookmark" title="{{$enterheader->title}}"><img width="324" height="235" itemprop="image" class="entry-thumb " src="{{$enterheader->getImage()}}" alt="" title="{{$enterheader->title}}">
                                            </a>
                                        </div> <a href="#" class="td-post-category">Technology</a> </div>

                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="{{route('article.show',$enterheader->slug)}}" rel="bookmark" title="{{$enterheader->title}}">{{$enterheader->title}}</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="#"><!-- ADMIN-NAME --></a> <span><!-- - --></span> </div>
                                        <div class="td-post-date">
                                            {{date('F d, Y',strtotime($enterheader->created_at))}}

                                        </div>
                                        <div class="td-module-comments"><a href="http://demo.tagdiv.com/newspaper/td-post-amazons-apple-watch-killer-will-be-free-and-sell-you-everything/#comments">0</a>
                                        </div>
                                    </div>

                                    <div class="td-excerpt">
                                        {{substr($headArticle->body,0,250)}} </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#">
                                </div>
                                @endforeach

                            </div>
                            <!-- ./td-block-span6 -->
                        
                            <div class="td-block-span6">
                            @foreach($eArticles as $esmalltArticles)
                                <div class="td_module_6 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">

                                    <div class="td-module-thumb">
                                        <a href="{{route('article.show',$esmalltArticles->slug)}}" rel="bookmark" title="{{$esmalltArticles->title}}"><img width="100" height="70" itemprop="image" class="entry-thumb " src="{{$esmalltArticles->getImage()}}" alt="" title="{{$esmalltArticles->title}}">
                                        </a>
                                    </div>
                                    <div class="item-details">
                                        <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="{{route('article.show',$esmalltArticles->slug)}}" rel="bookmark" title="{{$esmalltArticles->slug}}">{{$esmalltArticles->title}}</a></h3>
                                        <div class="td-module-meta-info">
                                            <div class="td-post-date">
                                               {{date('F d, Y',strtotime($esmalltArticles->created_at))}}

                                            </div>
                                        </div>
                                    </div>
                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> 
                                    </div>
                                    @endforeach

                                

                

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
                        <h4 class="block-title latest"><span>LATEST POSTS</span></h4>

                        @foreach($latestArticles->chunk(2) as $latestArticle)
                        <div class="td-block-row">
                            @foreach($latestArticle as $test)
                            <div class="td-block-span6">
                                <div class="td_module_1 td_module_wrap " itemscope="" itemtype="http://schema.org/Article">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="{{route('article.show',$test->slug)}}" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything"><img width="324" height="160" itemprop="image" class="entry-thumb " src="{{$test->getImage()}}" alt="" title="Amazon’s Apple Watch killer will be free and sell you everything">
                                            </a>
                                        </div> <a href="http://demo.tagdiv.com/newspaper/category/tagdiv-technology/" class="td-post-category">{{$test->getCategory()}}</a> </div>
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="{{route('article.show',$test->slug)}}" rel="bookmark" title="Amazon’s Apple Watch killer will be free and sell you everything">{{$test->title}}</a></h3>
                                    <div class="td-module-meta-info">
                                        <div class="td-post-author-name"><a itemprop="author" href="#">{{$test->getAdmin()}}</a> <span>-</span> </div>
                                        <div class="td-post-date">
                                            May 4, 2015

                                        </div>
                                        <div class="td-module-comments"><a href="#">0</a>
                                        </div>
                                    </div>

                                    <meta itemprop="author" content="#">
                                    <meta itemprop="datePublished" content="#">
                                    <meta itemprop="headline " content="#">
                                    <meta itemprop="image" content="#">
                                    <meta itemprop="interactionCount" content="#"> </div>

                            </div>
                            @endforeach

                            <!-- ./td-block-span6 -->
                            <!-- ./td-block-span6 -->
                        </div>
                        @endforeach

                        <!--./row-fluid-->

                        <!--./row-fluid-->

                        <!--./row-fluid-->

                        <!--./row-fluid-->


                        <!--./row-fluid-->
                        <div class="clearfix"></div>
                    </div>
                </div>


            </div>

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
{{HTML::script('assets/user/js/script.js')}}
<script>

    $(document).ready(function() {
        $("#owl-example").owlCarousel({
            items: 1,
            autoPlay: true,
            slideSpeed: 30,
            singleItem: true,
            paginationNumbers: true,
            
        });

    
    });
</script>
</body>

</html>