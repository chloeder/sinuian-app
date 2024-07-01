 <section class="block-wrapper">
     <div class="container">
         <div class="row">

             <div class="col-md-12 col-sm-12 content-blocker">

                 <!-- block content -->
                 <div class="block-content">

                     <!-- single-post box -->
                     <div class="single-post-box">

                         <div class="title-post">
                             <h1>Destinasi Wisata</h1>
                             <p>
                                 Daftar destinasi wisata di Desa Sinuian Remboken yang bisa anda kunjungi.
                             </p>
                         </div>


                         <div class="article-inpost">
                             <div class="row">
                                 @foreach ($destinasiWisata as $wisata)
                                     <div class="col-md-6">
                                         <div class="image-content">
                                             <div class="image-place">
                                                 <img src="{{ asset('storage/' . $wisata->foto) }}" alt="">
                                                 <div class="hover-image">
                                                     <a class="zoom" href="{{ asset('storage/' . $wisata->foto) }}"><i
                                                             class="fa fa-arrows-alt"></i></a>
                                                 </div>
                                             </div>
                                             <h4 class="image-caption font-weight-bold">
                                                 {{ $wisata->nama }}
                                             </h4>
                                             <p class="image-caption font-weight-bold">
                                                 {{ $wisata->deskripsi }}
                                             </p>
                                             <p class="image-caption font-weight-bold">
                                                 Lokasi : {{ $wisata->lokasi }}
                                             </p>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                             {{ $destinasiWisata->links('pagination::bootstrap-4') }}
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
