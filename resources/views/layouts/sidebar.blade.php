<div class="sidebar">
    <div class="widget">
        <h2 class="widget-title">Последние посты</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach ($popular_posts as $post)
                    <a href="{{ route('posts.single', ['slug' => $post]) }}"
                        class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="{{ asset('uploads/' . $post->thumbnail) }}" alt=""
                                class="img-fluid float-left">
                            <h5 class="mb-1">{{ $post->title }}</h5>
                            <small>{{ $post->getPostDate() }}</small>
                            <small><i class="fa fa-eye"></i>{{ $post->views }}</small>
                        </div>
                    </a>
                @endforeach

            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->


    <div class="widget">
        <h2 class="widget-title">Популярные категории</h2>
        <div class="link-widget">
            <ul>
                @foreach ($cats as $cat)
                    <li><a
                            href="{{ route('categories.single', ['slug' => $cat]) }}">{{ $cat->title }}<span>{{ $cat->posts_count }}</span></a>
                    </li>
                @endforeach
            </ul>
        </div><!-- end link-widget -->
    </div><!-- end widget -->
</div><!-- end sidebar -->
