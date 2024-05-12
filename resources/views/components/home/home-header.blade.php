        <header class="clearfix">
            <!-- Bootstrap navbar -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation">

                <!-- Top line -->
                <div class="top-line">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <ul class="top-line-list">
                                    <li><span
                                            class="time-now">{{ \Carbon\Carbon::now('Asia/Jakarta')->format('l j F Y / H:i') }}</span>
                                    </li>
                                    <li><a href="{{ route('filament.admin.auth.login') }}">Log In</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top line -->

                <!-- Logo & advertisement -->
                <div class="logo-advertisement">
                    <div class="container">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('home') }}" wire:navigate>
                                <img src="{{ asset('img/logo.png') }}" alt="LOGO">
                                <div class="desa-description">
                                    <h1>WEBSITE RESMI DESA SINUIAN</h1>
                                    <p>KEC.REMBOKEN KAB.MINAHASA PROV.SULAWESI UTARA</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- End Logo & advertisement -->

                <!-- navbar list container -->
                <div class="nav-list-container">
                    <div class="container">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left">

                                <li>
                                    <a class="{{ request()->routeIs('home') ? 'active' : '' }}"
                                        href="{{ route('home') }}" wire:navigate>Home</a>
                                </li>
                                <li class="drop-arrow drop"><a href="#">Tentang Desa</a>
                                    <ul class="dropdown">
                                        <li>
                                            <a class="{{ request()->routeIs('struktur.pemerintahan') ? 'active' : '' }}"
                                                href="{{ route('struktur.pemerintahan') }}" wire:navigate>Struktur
                                                Pemerintahan</a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->routeIs('visi.misi') ? 'active' : '' }}"
                                                href="{{ route('visi.misi') }}" wire:navigate>Visi
                                                Misi</a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->routeIs('sejarah.desa') ? 'active' : '' }}"
                                                href="{{ route('sejarah.desa') }}" wire:navigate>Sejarah Desa</a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->routeIs('wilayah.desa') ? 'active' : '' }}"
                                                href="{{ route('wilayah.desa') }}" wire:navigate>Wilayah Desa</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('galeri.desa') ? 'active' : '' }}"
                                        href="{{ route('galeri.desa') }}" wire:navigate>Galeri</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('umkm.desa') ? 'active' : '' }}"
                                        href="{{ route('umkm.desa') }}" wire:navigate>UMKM Desa</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('surat.online') ? 'active' : '' }}"
                                        href="{{ route('surat.online') }}" wire:navigate>Surat
                                        Online</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('wajib.lapor') ? 'active' : '' }}"
                                        href="{{ route('wajib.lapor') }}" wire:navigate>Wajib
                                        Lapor</a>
                                </li>

                            </ul>
                            {{-- <form class="navbar-form navbar-right" role="search">
                                <input type="text" id="search" name="search" placeholder="Search here">
                                <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                            </form> --}}
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </div>
                <!-- End navbar list container -->

            </nav>
            <!-- End Bootstrap navbar -->

        </header>
