        <footer>
            <div class="container">
                <div class="footer-widgets-part">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget text-widget">
                                <h1>About</h1>
                                <p>Desa Sinuian, Kecamatan Remboken, Kabupaten Minahasa, Provinsi Sulawesi Utara</p>
                                <p>Kode Pos 95681</p>
                                <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="LOGO" width="100px">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">

                            {{-- <div class="widget tags-widget">
                                <h1>Popular Tags</h1>
                                <ul class="tag-list">
                                    @foreach ($informasiDesa as $index => $informasi)
                                        @if ($index === 0 || $informasi->tag !== $informasiDesa[$index - 1]->tag)
                                            <li><a href="#">{{ $informasi->tag }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div> --}}
                        </div>
                        <div class="col-md-4">
                            <div class="widget flickr-widget">
                                <h1>Lokasi Desa</h1>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.908188927929!2d124.86145339999997!3d1.2238308000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287416d86910bc9%3A0x9346d4587ff4fdf9!2sDesa%20Sinuian%20Remboken!5e0!3m2!1sen!2sid!4v1701100622693!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
