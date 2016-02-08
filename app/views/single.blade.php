<html lang="en" hola_ext_inject="disabled">
<head>
    <meta charset="UTF-8">
    <title>Single Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    {{HTML::style('assets/user/css/singleview.css')}}
    {{HTML::style('assets/user/css/style.css')}}
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

    <div class="row">

        <div class="col-sm-8 blog-main">
            <article class="post type-post status-publish format-standard has-post-thumbnail hentry category-tagdiv-technology" itemtype="http://schema.org/Article">
                <div class="td-post-header">
                    <ul class="td-category">
                        <li class="entry-category"><a style="background-color:#49b5f8;" href="">{{$article->getCategory()}}</a> </li>
                    </ul>
                    <header class="td-post-title">
                        <h1 class="entry-title">{{$article->title}}</h1>
                        <div class="td-module-meta-info">
                            <div class="td-post-author-name">By <a itemprop="author" href="">John Doe</a> - </div>
                            <div class="td-post-date">
                                <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="{{ date('F d, Y',strtotime($article->created_at)) }}">{{ date('F d, Y',strtotime($article->created_at)) }}</time>
                                <meta itemprop="interactionCount" content="UserComments:0">
                            </div>
                            {{--<div class="td-post-comments"><a href=""><i class="td-icon-comments"></i>0</a> </div>--}}
                            {{--<div class="td-post-views"><i class="fa fa-eye"></i> <span class="td-nr-views-75">555</span> </div>--}}
                        </div>
                    </header>
                </div>
                <div class="td-post-sharing td-post-sharing-top ">
                    <div class="td-default-sharing">
                        <a class="td-social-sharing-buttons td-social-facebook" href="">
                            <i class="td-icon-facebook"></i>
                            <div class="td-social-but-text">Share on Facebook</div>
                        </a>
                        <a class="td-social-sharing-buttons td-social-twitter" href="">
                            <i class="td-icon-twitter"></i>
                            <div class="td-social-but-text">Tweet on Twitter </div>
                        </a>
                        <a class="td-social-sharing-buttons td-social-google" href=""> <i class="td-icon-googleplus"></i> </a>
                        <a class="td-social-sharing-buttons td-social-pinterest" href=""> <i class="td-icon-pinterest"></i> </a>
                    </div>
                </div>
                <div class="td-post-content">
                    <div class="td-post-featured-image">
                        <a href="#" class="td-modal-image">

                            {{HTML::image($article->getImage->image, '', array('class' => 'entry-thumb td-animation-stack-type0-2', 'width'=>'696px','height'=>'464px'))}}
                        </a>
                    </div>
                    <div class="td-paragraph-padding-1">


                        {{--<h3><strong>The main thing that you have to remember on this journey is just be nice to everyone and always smile.</strong></h3>--}}
                        <p>{{$article->body}}</p>
                    </div>

                    {{--<div class="td-paragraph-padding-1">--}}
                        {{--<h3><strong>You must learn one thing. The world was made to be free in. Give up all the other worlds Except the one in which you belong.</strong></h3>--}}
                        {{--<p>So simple, yet so essential, the white shirt is the foundation of any wardrobe. It’s also the most multi-functional item, taking you from work to play with just the quick unfastening of a couple of buttons. It matter what style fitted boyfriend etc or even what fabric from silk to heavy cotton go with whatever suits your personal style best.</p>--}}
                        {{--<p>Calvin Klein known for <strong><a href="#">launching the careers of such svelte</a></strong> models as Brooke Shields and Kate Moss to cast a model who deviates from the size standard and make a fuss about it to Dalbesio who spent years.</p>--}}
                        {{--<ul class="td-arrow-list">--}}
                            {{--<li>must explain to you how all this mistaken idea of denouncing</li>--}}
                            {{--<li>pleasure and praising pain was born and I will give you a complete account</li>--}}
                            {{--<li>the system and expound the actual teachings</li>--}}
                            {{--<li>great explorer of the truth, the master builder of human happiness.</li>--}}
                        {{--</ul>--}}
                        {{--<p>Adderall and flirting with bulimia in an attempt to whittle herself to represents progress released this campaign and were like Whoa look this plus size girl in our campaign from work to play with just the quick unfastening of a couple of buttons.</p>--}}
                    {{--</div>--}}
                    <blockquote>
                        <div class="td-paragraph-padding-2">
                            <p>Be the change that you wish to see in the world</p>
                        </div>
                    </blockquote>
                    <div class="td-paragraph-padding-1">
                        <p>They released me in this campaign with everyone else there no distinction. It’s not a separate section for plus size girls she says.</p>
                    </div>
                    <div class="td-paragraph-padding-1">
                        <p>There was a time in the industry not too long ago, when it seemed that the high fashion world was using plus size models as a headline-grabbing gimmick see the groundbreaking
                            <a href="#"> <i>Italian Vogue</i> </a> cover featuring Tara Lynn, Candice Huffine, and Robyn Lawley in June 2016.
                        </p>
                        <p> <em>Related:</em> <a href="#"><i> Calendar Gets Its First Plus-Size Model 2016</i></a> </p>
                    </div>
                    <footer>
                        <div class="td-post-source-tags"> </div>
                        <div class="td-post-sharing td-post-sharing-bottom td-with-like">
                            <span class="td-post-share-title">SHARE</span>
                            <div class="td-default-sharing">
                                <a class="td-social-sharing-buttons td-social-facebook" href="">
                                    <i class="td-icon-facebook"></i>
                                    <div class="td-social-but-text">Facebook</div>
                                </a>
                                <a class="td-social-sharing-buttons td-social-twitter" href="">
                                    <i class="td-icon-twitter"></i>
                                    <div class="td-social-but-text">Twitter</div>
                                </a>
                                <a class="td-social-sharing-buttons td-social-google" href="">
                                    <i class="td-icon-googleplus"></i>
                                </a>
                                <a class="td-social-sharing-buttons td-social-pinterest" href="">
                                    <i class="td-icon-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="author-box-wrap">
                            <a itemprop="author" href="#"><img src="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/avatar3.jpg" width="96" height="96" alt="John Doe" class="avatar avatar-96 wp-user-avatar wp-user-avatar-96 alignnone photo td-animation-stack-type0-2"> </a>
                            <div class="desc">
                                <div class="td-author-name vcard author"><span class="fn"><a itemprop="author" href="#">John Doe</a></span> </div>
                                <div class="td-author-url"><a href="#">MYWEBSITEURL.COM</a> </div>
                                <div class="td-author-description">Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo. Donec urna lacus gravida ac vulputate sagittis tristique vitae lectus. Nullam rhoncus tortor at dignissim vehicula.</div>
                                <div class="td-author-social"> <span class="td-social-icon-wrap">
                <a href="#" title="Evernote">
                    <i class="td-icon-font td-icon-evernote"></i>
                </a>
                </span> <span class="td-social-icon-wrap">
                <a href="#" title="Facebook">
                    <i class="td-icon-font td-icon-facebook"></i>
                </a>
                </span> <span class="td-social-icon-wrap">
                <a href="#" title="Google+">
                    <i class="td-icon-font td-icon-googleplus"></i>
                </a>
                </span> <span class="td-social-icon-wrap">
                <a  href="#" title="Twitter">
                    <i class="td-icon-font td-icon-twitter"></i>
                </a>
                </span> <span class="td-social-icon-wrap">
                <a href="#" title="VKontakte">
                    <i class="td-icon-font td-icon-vk"></i>
                </a>
                </span> <span class="td-social-icon-wrap">
                <a href="#" title="Youtube">
                    <i class="td-icon-font td-icon-youtube"></i>
                </a>
                </span>
                                </div>
                            </div>
                        </div>
                        <meta itemprop="author" content="John Doe">
                        <meta itemprop="datePublished" content="2015-04-24T05:44:22+00:00">
                        <meta itemprop="headline " content="Amazon's Apple Watch killer will be free and sell you everything">
                        <meta itemprop="image" content="http://demo.tagdiv.com/newspaper/wp-content/uploads/2015/04/26.jpg">
                        <meta itemprop="interactionCount" content="UserComments:0">
                    </footer>
            </article>
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

</body>
</html>

