@extends('layouts.layout')

<div id="wrapper">
    @section('search')
        @include('layouts.search')
    @endsection

    @section('content')
        <section id="cta" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 align-self-center">
                        <h2>A digital marketing blog</h2>
                        <p class="lead"> Aenean ut hendrerit nibh. Duis non nibh id tortor consequat cursus at mattis
                            felis. Praesent sed lectus et neque auctor dapibus in non velit. Donec faucibus odio semper
                            risus rhoncus rutrum. Integer et ornare mauris.</p>
                        <a href="#" class="btn btn-primary">Try for free</a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="newsletter-widget text-center align-self-center">
                            <h3>Subscribe Today!</h3>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>

                        </div><!-- end newsletter -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-custom-build">
                                @foreach ($posts as $post)
                                    <div class="blog-box wow fadeIn">
                                        <div class="post-media">
                                            <a href="{{ route('posts.single', ['slug' => $post]) }}" title="">
                                                <img src="{{ asset('uploads/' . $post->thumbnail) }}" alt=""
                                                    class="img-fluid">
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
                                                                class="fa fa-facebook"></i> <span class="down-mobile">Share
                                                                on Facebook</span></a></li>
                                                    <li><a href="#" class="tw-button btn btn-primary"><i
                                                                class="fa fa-twitter"></i> <span class="down-mobile">Tweet
                                                                on Twitter</span></a></li>
                                                </ul>
                                            </div><!-- end post-sharing -->
                                            <h4><a href="{{ route('posts.single', ['slug' => $post]) }}"
                                                    title="">{{ $post->title }}</a></h4>
                                            {!! $post->description !!}
                                            <br>
                                    
                                            <small><a href="" title="">{{ $post->getPostDate() }}</a></small>
                                            <small><a href="#" title="">by Jack</a></small>
                                            <small><a href="#" title=""><i class="fa fa-ten"></i>
                                                    {{ $post->views }}</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                    <hr class="invis">
                                @endforeach


                            </div>
                        </div>

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
                  