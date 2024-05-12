<div>
    <section class="ticker-news">
        <div class="container">
            <div class="ticker-news-box">
                <span class="breaking-news">DESA SINUIAN</span>
                <ul id="js-news">
                    <li class="news-item">Selamat Datang di Website Resmi Desa SINUIAN</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End ticker-news-section -->

    <!-- block-wrapper-section
                             ================================================== -->
    <section class="block-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-md-9 col-sm-8 content-blocker">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- grid box -->
                        <div class="grid-box">

                            <div class="title-section">
                                <h1><span>Informasi Terbaru</span></h1>
                            </div>

                            <div class="image-post-slider">
                                <ul class="bxslider">
                                    @foreach ($informasiDesa as $item)
                                        <li>
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                    <img src="{{ asset('storage/' . $item->cover) }}" alt="">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <a class="category-post" href="#">
                                                                {{ $item->tag }}
                                                            </a>
                                                            {{-- <a class="category-post"
                                                                href="{{ route('informasi.kategori', $item->tag) }}">{{ $item->tag }}
                                                            </a> --}}
                                                            <h2><a
                                                                    href="{{ route('informasi', $item->id) }}">{{ $item->judul }}</a>
                                                            </h2>
                                                            <ul class="post-tags">
                                                                <li>
                                                                    <i
                                                                        class="fa fa-clock-o"></i>{{ $item->created_at->locale('id')->format('d F Y') }}
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-user"></i>by <a
                                                                        href="#">{{ $item->user->name }}
                                                                    </a>
                                                                </li>

                                                                <li><i class="fa fa-eye"></i>{{ $item->views }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                            <div class="row">
                                @foreach ($informasiDesa as $item)
                                    <div class="col-md-6">
                                        <ul class="list-posts">
                                            <li>
                                                <img src="{{ asset('storage/' . $item->cover) }}" alt="">
                                                <div class="post-content">
                                                    <h2>
                                                        <a
                                                            href="{{ route('informasi', $item->id) }}">{{ $item->judul }}</a>
                                                    </h2>
                                                    <ul class="post-tags">
                                                        <li>
                                                            <i
                                                                class="fa fa-clock-o"></i>{{ $item->created_at->locale('id')->format('d F Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>

                            <div class="center-button">
                                <a href="#"><i class="fa fa-refresh"></i>Lihat Lebih Banyak</a>
                            </div>

                        </div>
                        <!-- End grid box -->
                    </div>
                    <!-- End block content -->

                </div>

                <div class="col-md-3 col-sm-4 sidebar-sticky">

                    <!-- sidebar -->
                    <div class="sidebar large-sidebar theiaStickySidebar">

                        <div class="widget social-widget">
                            <div class="title-section">
                                <h1><span>Stay Connected</span></h1>
                            </div>
                            <ul class="social-share">
                                <li>
                                    <a href="#" class="rss"><i class="fa fa-rss"></i></a>
                                    <span class="number">9,455</span>
                                    <span>Subscribers</span>
                                </li>
                                <li>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <span class="number">56,743</span>
                                    <span>Fans</span>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <span class="number">43,501</span>
                                    <span>Followers</span>
                                </li>
                                <li>
                                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                    <span class="number">35,003</span>
                                    <span>Followers</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget features-slide-widget">
                            <div class="title-section">
                                <h1><span>Destinasi Wisata</span></h1>
                            </div>
                            <div class="image-post-slider">
                                <ul class="bxslider">
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="{{ asset('img/campjames.jpeg') }}" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
                                                        <h2><a href="#">CAMP JAMES </a>
                                                        </h2>
                                                        <ul class="post-tags">
                                                            <li>Desan Sinuian, Remboken</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="{{ asset('img/campjames2.jpeg') }}" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
                                                        <h2><a href="#">CAMP JAMES </a>
                                                        </h2>
                                                        <ul class="post-tags">
                                                            <li>Desan Sinuian, Remboken</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="{{ asset('img/campjames3.jpeg') }}" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
                                                        <h2><a href="#">CAMP JAMES </a>
                                                        </h2>
                                                        <ul class="post-tags">
                                                            <li>Desan Sinuian, Remboken</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget tab-posts-widget">

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#option1" data-toggle="tab">Populer</a>
                                </li>
                                <li>
                                    <a href="#option2" data-toggle="tab">Terbaru</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="option1">
                                    <ul class="list-posts">
                                        @foreach ($populerPost as $item)
                                            <li>
                                                <img src="{{ asset('storage/' . $item->cover) }}" alt="">
                                                <div class="post-content">
                                                    <h2><a
                                                            href="{{ route('informasi', $item->id) }}">{{ $item->judul }}</a>
                                                    </h2>
                                                    <ul class="post-tags">
                                                        <li>
                                                            <i class="fa fa-user"></i>{{ $item->user->name }}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-clock-o"></i>
                                                            {{ $item->created_at->locale('id')->format('d F Y') }}
                                                        </li>
                                                        <li><i class="fa fa-eye"></i>{{ $item->views }}</li>

                                                    </ul>
                                                </div>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                                <div class="tab-pane" id="option2">
                                    <ul class="list-posts">
                                        @foreach ($informasiDesa as $item)
                                            <li>
                                                <img src="{{ asset('storage/' . $item->cover) }}" alt="">
                                                <div class="post-content">
                                                    <h2><a
                                                            href="{{ route('informasi', $item->id) }}">{{ $item->judul }}</a>
                                                    </h2>
                                                    <ul class="post-tags">
                                                        <li> <i
                                                                class="fa fa-clock-o"></i>{{ $item->created_at->locale('id')->format('d F Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End sidebar -->

                </div>

            </div>

        </div>
    </section>
    <!-- End block-wrapper-section -->
</div>
