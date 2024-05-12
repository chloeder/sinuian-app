 <section class="block-wrapper">
     <div class="container">
         <div class="row">

             <div class="col-md-12 col-sm-12 content-blocker">

                 <!-- block content -->
                 <div class="block-content">

                     <!-- single-post box -->
                     <div class="single-post-box">

                         <div class="title-post">
                             <h1>GALERI DESA</h1>
                         </div>

                         <div class="article-inpost">
                             <div class="row">
                                 @foreach ($informasiDesa as $item)
                                     <div class="col-md-6">
                                         <div class="image-content">
                                             <div class="image-place">
                                                 <img src="{{ asset('storage/' . $item->cover) }}" alt="">
                                                 <div class="hover-image">
                                                     <a class="zoom" href="{{ asset('storage/' . $item->cover) }}"><i
                                                             class="fa fa-arrows-alt"></i></a>
                                                 </div>
                                             </div>
                                             <span class="image-caption">{{ $item->judul }}</span>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                             {{ $informasiDesa->links('pagination::bootstrap-4') }}
                         </div>

                     </div>
                     <!-- End single-post box -->

                 </div>
                 <!-- End block content -->

             </div>


         </div>

     </div>
 </section>
