@extends('layouts.index')

@section('content')

    @include('partials.navMobile')
    @include('partials.topbar')
    @include('partials.navbar')



    <div class="wrapper mm-page mm-slideout" id="mm-0">
        <div class="parallax-mirror"
            style="visibility: visible; z-index: 0; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 116.5px, 0px); height: 535px; width: 966px;">
        </div>

        {{-- @foreach ($blog as $item) --}}

        <div class="blog-post-cover gradient-overlay op5" data-src={{ asset("images/blog/post/blog-full.jpg") }}
            data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0"
            style="margin-top: 0px;">
            <div class="container inner">
                <h2 class="blog-post-title">{{ $blog->title }}</h2>
                <div class="blog-post-info">
                    <img alt="" src="{{ asset('images/users/admin.jpg') }}" class="author-avatar" width="16">
                    <p>by
                        <span>
                            <a href="#">{{ $blog->auteur }}</a></span>
                    </p>
                    <p>on
                        <time datetime="2017-09-27T06:52:20+00:00">{{ $blog->creation }}</time>
                    </p>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}

        <main class="post-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <article class="entry">
                            <div class="details">
                                <p class="dropcap">Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                    wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                    nisl ut aliquip ex ea
                                    <u>commodo consequat.</u>
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                    consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                                    iusto odio dignissim qui blandit praesent luptatum zzril delenit...
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna
                                    <a href="#">aliquam</a>
                                    erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                    dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                                    eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                                    blandit praesent luptatum zzril delenit...
                                </p>
                                <blockquote>
                                    <p class="quote-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        <a href="#" data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                            data-original-title="Marius Doe">Mauris
                                        </a>non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique
                                        sodales est There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration.
                                    </p>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip
                                    ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                                    eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                    dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                                    qui blandit praesent luptatum zzril delenit...</p>
                                <figure>
                                    <img src={{ asset("images/blog/post/blog-post1.jpg") }} class="img-fluid">
                                    <figcaption>Image Caption
                                        <span class="source">
                                            <a href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                pexeles.com</a></span>
                                    </figcaption>
                                </figure>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip
                                    ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                                    eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                    augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis
                                    eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim
                                    assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                                    claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt
                                    saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem
                                    consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus
                                    parum claram,
                                    anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta
                                    decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in
                                    futurum.</p>
                                <div class="row image-gallery">
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href="images/blog/post/blog-post2.jpg">
                                                    <img src={{ asset("images/blog/post/blog-post2.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href="images/blog/post/blog-post3.jpg">
                                                    <img src={{ asset("images/blog/post/blog-post3.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href="images/blog/post/blog-post4.jpg">
                                                    <img src={{ asset("images/blog/post/blog-post4.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href="images/blog/post/blog-post5.jpg">
                                                    <img src={{ asset("images/blog/post/blog-post5.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
                                    quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus
                                    legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt
                                    lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                    dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam
                                    littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
                                    humanitatis
                                    per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                    parum clari, fiant sollemnes in futurum.</p>
                                <div class="meta-post">
                                    <div class="tags">
                                        <span>
                                            <i class="fa fa-tags"></i>
                                            TAGS</span>
                                        <a href="#" rel="tag">Himara</a>
                                        <a href="#" rel="tag">Holiday</a>
                                        <a href="#" rel="tag">Summer</a>
                                    </div>
                                    <div class="share">
                                        <span>
                                            <i class="fa fa-share-alt"></i>
                                            SHARE</span>
                                        <div class="social-media">
                                            <a class="facebook" href="#" data-toggle="tooltip"
                                                data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="twitter" href="#" data-toggle="tooltip"
                                                data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="googleplus" href="#" data-toggle="tooltip"
                                                data-original-title="Google Plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a class="pinterest" href="#" data-toggle="tooltip"
                                                data-original-title="Pinterest">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div id="comments">
                            <div class="section-title">
                                <h4>COMMENTS</h4>
                                <p class="section-subtitle">Leave your comment</p>
                            </div>
                            <ul id="comments-list" class="comments-list">
                                <li>
                                    <div class="comment-main-level">
                                        <div class="comment-avatar"><img src={{ asset("images/blog/users/user1.jpg") }} alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment_content">
                                                <h4 class="author-name">
                                                    <a href="#">JANE Doe</a>
                                                </h4>
                                                <a href="#comment-form" class="reply_link">Reply</a>
                                                <span class="comment_info">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">
                                                        <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017 at
                                                            7:56 pm</time>
                                                    </a>
                                                </span>
                                                <div class="comment_said_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat volutpat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comments-list reply-list">
                                        <li>
                                            <div class="comment-avatar"><img src={{ asset("images/blog/users/user2.jpg") }} alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment_content">
                                                    <h4 class="author-name">
                                                        <a href="#">
                                                            Ina Aldrich</a>
                                                    </h4>
                                                    <a href="#comment-form" class="reply_link">Edit</a>
                                                    <span class="comment_info">
                                                        <i class="fa fa-clock-o"></i>
                                                        <a href="#">
                                                            <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017
                                                                at 7:56 pm</time>
                                                        </a>
                                                    </span>
                                                    <div class="comment_said_text">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                            aliquam erat volutpat, euismod tincidunt ut laoreet dolore
                                                            magna aliquam erat volutpat.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-avatar">
                                                <img src={{ asset("images/blog/users/user3.jpg") }} alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment_content">
                                                    <h4 class="author-name">
                                                        <a href="#">William Whiten</a>
                                                    </h4>
                                                    <a href="#comment-form" class="reply_link">Reply</a>
                                                    <span class="comment_info">
                                                        <i class="fa fa-clock-o"></i>
                                                        <a href="#">
                                                            <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017
                                                                at 7:56 pm</time>
                                                        </a>
                                                    </span>
                                                    <div class="comment_said_text">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                            aliquam erat volutpat.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment-main-level">
                                        <div class="comment-avatar">
                                            <img src={{ asset("images/blog/users/user4.jpg") }} alt="">
                                        </div>
                                        <div class="comment-box">
                                            <div class="comment_content">
                                                <h4 class="author-name">
                                                    <a href="#">Amy Ellison</a>
                                                </h4>
                                                <a href="#comment-form" class="reply_link">Reply</a>
                                                <span class="comment_info">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">
                                                        <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017 at
                                                            7:56 pm</time>
                                                    </a>
                                                </span>
                                                <div class="comment_said_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat volutpat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="section-title mt100">
                                <h4>LEAVE YOUR COMMENT</h4>
                                <p class="section-subtitle">Write your comment</p>
                            </div>
                            <form id="comment-form" class="comment-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Name*">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" class="form-control" placeholder="Email*">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Website">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="Write Your Comment"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn float-right">
                                            POST YOUR COMMENT
                                        </button>
                                        <div class="align-left">*Your email address will not be published.</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="sidebar">
                            <aside class="widget noborder">
                                <div class="search">
                                    <form class="widget-search">
                                        <input type="search" placeholder="Search">
                                        <button class="btn-search" id="searchsubmit" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4 class="widget-title">CATEGORIES</h4>
                                <ul class="categories">
                                    <li>
                                        <a href="#">Travel<span class="posts-num">51</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Rooms<span class="posts-num">24</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Holidays
                                            <span class="posts-num">9</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Travel<span class="posts-num">12</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Events<span class="posts-num">28</span></a>
                                    </li>
                                </ul>
                            </aside>

                            <aside class="widget">
                                <h4 class="widget-title">Latest Posts</h4>
                                <div class="latest-posts">

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post1.jpg") }} class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">10 Tips for Holiday Travel</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post2.jpg") }} class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Are you ready to enjoy your
                                                            holidays</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post3.jpg") }} class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post4.jpg") }} class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Travel Gift Ideas for Every Type of
                                                            Traveler</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post5.jpg") }} class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Breakfast with coffee and orange
                                                            juic</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tagcloud">
                                    <a href="#">
                                        <span class="tag">Party</span></a>
                                    <a href="#">
                                        <span class="tag">Travel</span></a>
                                    <a href="#">
                                        <span class="tag">Wedding</span></a>
                                    <a href="#">
                                        <span class="tag">Food</span></a>
                                    <a href="#">
                                        <span class="tag">Music</span></a>
                                    <a href="#">
                                        <span class="tag">City</span></a>
                                    <a href="#">
                                        <span class="tag">Image</span></a>
                                    <a href="#">
                                        <span class="tag">Hotel</span></a>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('partials.footer')
    </div>
    @include('partials.notification')

    @endsection
