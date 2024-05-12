  <section class="block-wrapper">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-sm-12 content-blocker">

                  <!-- block content -->
                  <div class="block-content">

                      <!-- single-post box -->
                      <div class="single-post-box">

                          <div class="title-post">
                              <h1>{{ $informasiDesa->judul }}</h1>
                              <ul class="post-tags">
                                  <li><i
                                          class="fa fa-clock-o"></i>{{ $informasiDesa->created_at->locale('id')->format('d F Y') }}
                                  </li>
                                  <li><i class="fa fa-user"></i>by <a href="#">{{ $informasiDesa->user->name }}</a>
                                  </li>
                                  <li><i class="fa fa-eye"></i>{{ $informasiDesa->views }}</li>
                              </ul>
                          </div>

                          <div class="post-gallery">
                              <img src="{{ asset('storage/' . $informasiDesa->cover) }}" alt="">
                              <span class="image-caption">{{ $informasiDesa->judul }}</span>
                          </div>

                          <div class="post-content">
                              <p>
                                  {{ $informasiDesa->isi }}
                              </p>
                          </div>

                          <div class="post-tags-box">
                              <ul class="tags-box">
                                  <li><i class="fa fa-tags"></i><span>Tags:</span></li>

                                  <li>
                                      <a href="#">{{ $informasiDesa->tag }}</a>
                                  </li>
                              </ul>
                          </div>

                          <div class="carousel-box owl-wrapper">
                              <div class="title-section">
                                  <h1><span>Lihat yang populer</span></h1>
                              </div>
                              <div class="owl-carousel" data-num="3">
                                  @foreach ($populerPost as $item)
                                      <div class="item news-post image-post3">
                                          <img src="{{ asset('storage/' . $item->cover) }}" alt="">
                                          <div class="hover-box">
                                              <h2>
                                                  <a href="{{ route('informasi', $item->id) }}">
                                                      {{ $item->judul }}
                                                  </a>
                                              </h2>
                                              <ul class="post-tags">
                                                  <li><i
                                                          class="fa fa-clock-o"></i>{{ $item->created_at->locale('id')->format('d F Y') }}
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  @endforeach

                              </div>
                          </div>
                          <!-- End carousel box -->



                      </div>
                      <!-- End single-post box -->

                  </div>
                  <!-- End block content -->

              </div>


          </div>
      </div>
  </section>
