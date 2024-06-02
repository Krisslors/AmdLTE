@extends('layouts.layout')

<div id="wrapper">
    @section('search')
        @include('layouts.search')
    @endsection

    @section('content')
        <div class="page-title db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2> Теги</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Теги</a></li>
                        </ol>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                     @include('layouts.sidebar')
                    </div><!-- end col -->

                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-custom-build">
                                <div class="blog-box wow fadeIn">

                                    @foreach ($posts as $post)
                                        <div class="blog-box wow fadeIn">
                                            <div class="post-media">
                                                <a href="{{ route('posts.single', ['slug' => $post->slug]) }}"
                                                    title="">
                                                    <img src="{{ asset('uploads/' . $post->thumbnail) }}"
                                                        alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span></span>
                                                    </div>
                                                    <!-- end hover -->
                                                </a>
                                            </div>
                                            <!-- end media -->
                                            <div class="blog-meta big-meta text-center">
                                                <div class="post-sharing">
                                                    <ul class="list-inline">
                                                        <li><a href="#" class="fb-button btn btn-primary"><i
                                                                    class="fa fa-facebook"></i> <span
                                                                    class="down-mobile">Share on
                                                                    Facebook</span></a></li>
                                                        <li><a href="#" class="tw-button btn btn-primary"><i
                                                                    class="fa fa-twitter"></i> <span
                                                                    class="down-mobile">Tweet on Twitter</span></a>
                                                        </li>
                                                    </ul>
                                                </div><!-- end post-sharing -->
                                                <h4><a href="{{ route('posts.single', ['slug' => $post->slug]) }}"
                                                        title="">{{ $post->title }}</a></h4>
                                                {!! $post->description !!}
                                                <small><a
                                                        href="{{ route('categories.single', ['slug' => $post->category->slug]) }}"
                                                        title="">{{ $post->category->slug }}</a></small>
                                                <small><a href=""
                                                        title="">{{ $post->getPostDate() }}</a></small>
                                                <small><a href="#" title="">by Jack</a></small>
                                                <small><a href="#" title=""><i class="fa fa-eye"></i>
                                                        {{ $post->views }}</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    @endforeach



                                  

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-12">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- end col -->
                            </div><!-- end row -->
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