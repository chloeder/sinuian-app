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
                                <h1><span>Wajib Lapor</span></h1>
                            </div>
                            <form id="contact-form" wire:submit='save'>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="nama_tamu">Nama Tamu*</label>
                                        <input id="nama_tamu" wire:model="nama_tamu" type="text"
                                            placeholder="Cth : Figo Tendean"
                                            class="@error('nama_tamu') is-invalid @enderror"
                                            value="{{ old('nama_tamu') }}">
                                        @error('nama_tamu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Jaga</label>
                                        <select class="js-example-basic-single form-select" data-width="100%"
                                            wire:model="jaga_id" class="@error('jaga_id') is-invalid @enderror"
                                            value="{{ old('jaga_id') }}">
                                            @foreach ($jagas as $jaga)
                                                <option value="{{ $jaga->id }}">{{ $jaga->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('jaga_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lama_bertamu">Lama Bertamu</label>
                                        <input id="lama_bertamu" type="text" placeholder="Cth : 2 Hari/Minggu"
                                            wire:model="lama_bertamu"class="@error('lama_bertamu') is-invalid @enderror"
                                            value="{{ old('lama_bertamu') }}">
                                        @error('lama_bertamu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <label for="keperluan_bertamu">Keperluan Bertamu*</label>
                                <textarea id="keperluan_bertamu" placeholder="Cth : Menghadiri pernikahan saudara" wire:model="keperluan_bertamu"
                                    class="@error('keperluan_bertamu') is-invalid @enderror" value="{{ old('keperluan_bertamu') }}"></textarea>
                                @error('keperluan_bertamu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <button type="submit" id="submit-contact">
                                    <i class="fa fa-paper-plane"></i> Kirim Laporan
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
