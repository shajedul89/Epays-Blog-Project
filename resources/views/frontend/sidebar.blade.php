@php
  $cat =  App\Models\category::all();
  $tag = App\Models\Tag::all();
  $post = App\Models\post::latest()->get()->take(3);
@endphp
<div class="col-md-6 col-lg-4 col-xl-3 widg">
    <div class="widget-area-wrapper style-02">
        <div class="widget widget-search">
            <form class="form-inline" action="{{ route('blog.search') }}" >
                @csrf
                <div class="form-group">
                    <input type="search" name="search" class="form-control" placeholder="search...">
                </div>
                <button type="submit" class="form-btn-1"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="widget widget-about-author">
            <h5 class="widget-title">about author</h5>
            <div class="img-box">
                <img src="{{ URL::to('')}}/img/widget/author/02.png" alt="image">
                <div class="content">
                    <h3 class="title">
                        <a href="#">Jhon Doe</a>
                    </h3>
                    <p class="info">One advanced diverted domestic
                        repeated bringing you old. Possible procured her trifling laughter though.</p>
                    <ul class="social-link-list">
                        <li class="list-item">
                            <a href="#" tabindex="-1">
                                <i class="fab fa-facebook-f icon"></i>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" tabindex="-1">
                                <i class="fab fa-twitter icon"></i>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" tabindex="-1">
                                <i class="fab fa-instagram icon"></i>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" tabindex="-1">
                                <i class="fas fa-rss icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="widget widget-category">
            <h5 class="widget-title">Categories</h5>
            <ul class="list">

                @foreach ($cat as $c)

                @if (App\Models\post::where('category','=' ,$c->id)->count()>0)


                <li>
                    <a href="{{ route('blog.search.category',$c->slug)}}">
                        <span class="name">{{ $c->name }}</span>
                        @php
                           $s= $c->id ;
                           $pc = App\Models\post::where('category','=' ,$s)->count()
                        @endphp
                        <span class="number">(@php
                            echo ($pc);
                        @endphp)</span>
                    </a>
                </li>
                @endif
                @endforeach

            </ul>
        </div>

        <div class="widget widget-recent-post">
            <h5 class="widget-title">Latest Posts</h5>
            <ul class="post-list">
                @foreach ($post as $p )


                <li>
                    <div class="thumb">
                        <img src="{{-- {{ URL::to('')}}/ --}}{{ $p->images }} " width="100px" alt="image">
                    </div>
                    <div class="content">
                        <span class="catg">
                            <a href="#">{{ $p->postCat->name }}</a>
                        </span>
                        <h5 class="post-title"><a href="{{ url('blogSingleView',$p->id) }}">{{ $p->title }}</a></h5>
                    </div>
                </li>


                @endforeach

            </ul>
        </div>
        <div class="widget widget-add">
            <div class="add-banner-y">
                <a href="#">
                    <img src="{{ URL::to('')}}/img/widget/add/03.png" alt="image">
                </a>
            </div>
        </div>
        <div class="widget widget-tag">
            <h5 class="widget-title">Tags</h5>
            <div class="tag-wrapper">
                @foreach ( $tag as $t )
                <a href="{{ route('blog.search.tag',$t->slug) }}" class="btn-tag">{{ $t->name }}</a>
                @endforeach

            </div>
        </div>
    </div>
</div>
