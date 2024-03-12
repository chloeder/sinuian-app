<div>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-8 content-blocker">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- contact form box -->
                        <div class="contact-form-box">
                            <div class="title-section">
                                <h1><span>Surat Online</span></h1>
                            </div>
                            <form id="contact-form" wire:submit='save'>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="nama">Nama*</label>
                                        <input id="nama" wire:model="nama" type="text"
                                            placeholder="Cth : Figo Tendean" class="@error('nama') is-invalid @enderror"
                                            value="{{ old('nama') }}">
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="nik">NIK*</label>
                                        <input id="nik" wire:model="nik" type="text"
                                            placeholder="Cth : 3202080504910003"
                                            class="@error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                        @error('nik')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email">Email</label>
                                        <input id="email" wire:model="email" type="text"
                                            placeholder="Cth : 0Hn6i@example.com"
                                            class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <label class="form-label">Jenis Surat</label>
                                <select class="js-example-basic-single form-select" data-width="100%"
                                    wire:model="jenis_surat" class="@error('jenis_surat') is-invalid @enderror"
                                    value="{{ old('jenis_surat') }}">
                                    <option value="">Pilih</option>
                                    <option value="Surat Keterangan">Surat Keterangan</option>
                                    <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                    <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                                    <option value="Surat Keterangan Penduduk">Surat Keterangan Penduduk</option>
                                    <option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
                                    <option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
                                    <option value="Surat Keterangan Kelakuan Baik">Surat Keterangan Kelakuan Baik
                                    </option>
                                    <option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
                                    <option value="Surat Keterangan Belum Pernah Menikah">Surat Keterangan Belum Pernah
                                        Menikah</option>
                                    <option value="Surat Keterangan Sudah Pernah Menikah">Surat Keterangan Sudah Pernah
                                        Menikah</option>
                                    <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                                    <option value="Surat Ijin Berpergian">Surat Ijin Berpergian</option>
                                    <option value="Surat Ijin Berkumpul">Surat Ijin Berkumpul</option>
                                </select>
                                @error('jenis_surat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <label for="pesan">Pesan*</label>
                                <textarea id="pesan" wire:model="pesan" class="@error('pesan') is-invalid @enderror" value="{{ old('pesan') }}"></textarea>
                                @error('pesan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <button type="submit" id="submit-contact">
                                    <i class="fa fa-paper-plane"></i> Kirim
                                </button>
                            </form>
                        </div>
                        <!-- End contact form box -->

                    </div>
                    <!-- End block content -->

                </div>



            </div>

        </div>
    </section>
</div>
