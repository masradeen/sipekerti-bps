<div>
    <form wire:submit.prevent="addPegawai">
        <div class="form-group">
            <label for="name">NIP Lama</label>
            <input type="text" name="nip" wire:model="nip" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">NIP Baru</label>
            <input type="text" name="nip" wire:model="nip_baru" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Nama Pegawai</label>
            <input type="text" name="nama" wire:model="nama" class="form-control">
        </div>
        <!-- <div class="form-group">
            <label for="nama">Satuan kerja </label>
            <div class = "col-md-12">
                <select class="form-control" name="satker" wire:model="satker">
                    <option value="" selected>Pilih Satuan Kerja</option>
                    <option value="1">BPS Provinsi Gorontalo</option>
                    <option value="2">BPS Kabupaten Boalemo</option>
                    <option value="3">BPS Kabupaten Gorontalo</option>
                    <option value="4">BPS Kabupaten Pohuwato</option>
                    <option value="5">BPS Kabupaten Bone Bolango</option>
                    <option value="6">BPS Kabupaten Gorontalo Utara</option>
                    <option value="7">BPS Kota Gorontalo</option>
                </select>
            </div>
        </div> -->
        <div class="form-group">
            <label for="nama">Satuan kerja </label>
            <div class="col-md-12">
                <input type="text" class="form-control" value="BPS Provinsi Gorontalo" readonly>

                <input type="hidden" name="satker" wire:model="satker" value="1">
            </div>
        </div>
        <div class="form-group">
            <label for="nama">Jabatan</label>

            <div class="col-md-12">
                <select class="form-control" name="jabatan" wire:model="jabatan">
                    <option value="" selected>Pilih Jabatan</option>
                    @foreach($jabatans as $jabatan)
                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>