@extends('layouts.layout')

<div id="wrapper">
    @section('search')
        @include('layouts.search')
    @endsection

    @section('content')

    <div id="wrapper">
        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="marketing-index.html"><img src="images/version/market-logo.png"
                            alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home1')}}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('categories.single',['slug' => 'marketing'])}}">Категории</a>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="How may I help?">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <section class="section lb m3rem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="{{ route('home1') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('categories.single', ['slug' => $post->category]) }}">{{ $post->category->title }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ $post->title }}</li>
                                </ol>

                                <span class="color-yellow"><a
                                        href="{{ route('categories.single', ['slug' => $post->category]) }}"
                                        title="">{{ $post->category->title }}</a></span>

                                <h3>{{ $post->title }}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="" title="">{{ $post->getPostDate() }}</a></small>

                                    <small><a href="#" title=""><i class="fa fa-eye"></i>
                                            {{ $post->views }}</a></small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i
                                                    class="fa fa-facebook"></i> <span class="down-mobile">Share on
                                                    Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i
                                                    class="fa fa-twitter"></i> <span class="down-mobile">Tweet on
                                                    Twitter</span></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="{{ asset('uploads/' . $post->thumbnail) }}" alt=""
                                    class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">

                                {!! $post->content !!}

                            </div><!-- end content -->

                            <div class="blog-title-area">
                                @if ($post->tags->count())
                                    <div class="tag-cloud-single">
                                        <span>Теги</span>
                                        @foreach ($post->tags as $tag)
                                            <small><a href="{{ route('tags.single', ['slug' => $tag]) }}"
                                                    title="">{{ $tag->title }}</a></small>
                                        @endforeach

                                    </div><!-- end meta -->

                                @endif
                            </div><!-- end title -->


                            <hr class="invis1">

                            <div class="custombox authorbox clearfix">
                                <h4 class="small-title">About author</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle">
                                    </div><!-- end col -->

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <h4><a href="#">Jessica</a></h4>
                                        <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a>
                                            amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl
                                            eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for
                                            stop Markedia!</p>

                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end author-box -->

                            <hr class="invis1">


                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">3 Comments</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-list">
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="upload/author.jpg" alt=""
                                                        class="rounded-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading user_name">Amanda Martines <small>5 days
                                                            ago</small></h4>
                                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small
                                                        batch freegan sed. Craft beer elit seitan exercitation, photo
                                                        booth et 8-bit kale chips proident chillwave deep v laborum.
                                                        Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami
                                                        readymade swag. Selfies iPhone Kickstarter, drinking vinegar
                                                        jean.</p>
                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="upload/author_01.jpg" alt=""
                                                        class="rounded-circle">
                                                </a>
                                                <div class="media-body">

                                                    <h4 class="media-heading user_name">Baltej Singh <small>5 days
                                                            ago</small></h4>

                                                    <p>Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche
                                                        lomo biodiesel Neutra selfies. Shorts fixie consequat
                                                        flexitarian four loko tempor duis single-origin coffee. Banksy,
                                                        elit small.</p>

                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                            <div class="media last-child">
                                                <a class="media-left" href="#">
                                                    <img src="upload/author_02.jpg" alt=""
                                                        class="rounded-circle">
                                                </a>
                                                <div class="media-body">

                                                    <h4 class="media-heading user_name">Marie Johnson <small>5 days
                                                            ago</small></h4>
                                                    <p>Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up
                                                        artisan sunt. Deep v cliche lomo biodiesel Neutra selfies.
                                                        Shorts fixie consequat flexitarian four loko tempor duis
                                                        single-origin coffee. Banksy, elit small.</p>

                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Leave a Reply</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-wrapper">
                                            <input type="text" class="form-control" placeholder="Your name">
                                            <input type="text" class="form-control" placeholder="Email address">
                                            <input type="text" class="form-control" placeholder="Website">
                                            <textarea class="form-control" placeholder="Your comment"></textarea>
                                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                     
                        
                        @include('layouts.sidebar')

                        <!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
                </div><!-- end container -->
                </section>
                
                <footer class="footer">
                <div class="container">
                
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <br>
                        <div class="copyright">&copy; Markedia. Design: <a href="http://html.design">HTML Design</a>.</div>
                    </div>
                </div>
                </div><!-- end container -->
                </footer><!-- end footer -->
                
                <div class="dmtop">Scroll to Top</div>
                
                </div><!-- end wrapper -->
                        @endsection
                        

