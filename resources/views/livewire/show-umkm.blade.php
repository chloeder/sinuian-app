 <section class="block-wrapper">
     <div class="container">
         <div class="row">

             <div class="col-md-12 col-sm-12 content-blocker">

                 <!-- block content -->
                 <div class="block-content">

                     <!-- single-post box -->
                     <div class="single-post-box">

                         <div class="title-post">
                             <h1>DAFTAR UMKM DESA SINUIAN REMBOKEN</h1>
                             <p>
                                 UMKM adalah singkatan dari "Usaha Mikro, Kecil, dan Menengah." Istilah ini mengacu pada
                                 kategori usaha berdasarkan ukuran dan skala operasionalnya. UMKM merupakan usaha
                                 produktif
                                 yang dimiliki perorangan maupun badan usaha yang telah memenuhi kriteria sebagai usaha.
                             </p>
                         </div>


                         <div class="article-inpost">
                             <div class="row">
                                 @foreach ($usahas as $umkm)
                                     <div class="col-md-6">
                                         <div class="image-content">
                                             <div class="image-place">
                                                 <img src="{{ asset('storage/' . $umkm->image) }}" alt="">
                                                 <div class="hover-image">
                                                     <a class="zoom" href="{{ asset('storage/' . $umkm->image) }}"><i
                                                             class="fa fa-arrows-alt"></i></a>
                                                 </div>
                                             </div>
                                             <h4 class="image-caption font-weight-bold">
                                                 {{ $umkm->nama_umkm }} |
                                                 {{ $umkm->alamat_usaha }}
                                             </h4>
                                             <p class="image-caption font-weight-bold">
                                                 Pemilik : {{ $umkm->nama_pemilik }} - +62{{ $umkm->no_telp }}
                                             </p>
                                             <p class="image-caption font-weight-bold">
                                                 Jenis Produk : {{ $umkm->jenis_produk }}
                                             </p>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                             {{ $usahas->links('pagination::bootstrap-4') }}
                         </div>
                         {{-- <table class="table table-striped table-hover">
                                 <thead>
                                     <tr>
                                         <th>NO</th>
                                         <th>Nama UMKM</th>
                                         <th>Nama Pemilik</th>
                                         <th>Jenis Produk</th>
                                         <th>Alamat Usaha</th>
                                         <th>No Telepon</th>
                                         <th>Sosial Media</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($usahas as $umkm)
                                         <tr>
                                             <th>{{ $loop->iteration }}</th>
                                             <td>{{ $umkm->nama_umkm }}</td>
                                             <td>{{ $umkm->nama_pemilik }}</td>
                                             <td>{{ $umkm->jenis_produk }}</td>
                                             <td>{{ $umkm->alamat_usaha }}</td>
                                             <td>+62 {{ $umkm->no_telp }}</td>
                                             <td>{{ $umkm->sosial_media }}</td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                             </table> --}}

                     </div>
                     <!-- End single-post box -->

                 </div>
                 <!-- End block content -->

             </div>


         </div>

     </div>
 </section>
