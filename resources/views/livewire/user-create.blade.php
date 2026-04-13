<div>
    <form wire:submit.prevent="addUser">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="nama" wire:model="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" name="email" wire:model="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="username" wire:model="username" class="form-control">
        </div>

        <div class="form-group">
            <label for="nama">Role :</label>

            <div class="col-md-12">
                <select class="form-control" name="role" wire:model="role">
                    <option value="" selected>Pilih Role</option>
                    @foreach($jabatans as $jabatan)
                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="nama">Pegawai :</label>

            <div class="col-md-12">
                <select class="form-control" name="pegawai" wire:model="pegawai">
                    <option value="" selected>Pilih Pegawai</option>
                    @foreach($pegawais as $pegawai)
                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="nama">Satuan Kerja :</label>

            <div class="col-md-12">
                <select class="form-control" name="satker" wire:model="satker">
                    <option value="" selected>Pilih Satker</option>
                    <option value="1">BPS Provinsi Gorontalo</option>
                    <!-- <option value="2">BPS Kabupaten Boalemo</option>
                    <option value="3">BPS Kabupaten Gorontalo</option>
                    <option value="4">BPS Kabupaten Pohuwato</option>
                    <option value="5">BPS Kabupaten Bone Bolango</option>
                    <option value="6">BPS Kabupaten Gorontalo Utara</option> 
                    <option value="7">BPS Kota Gorontalo</option>-->
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Password :</label>
            <input type="password" name="passwrod" wire:model="password" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>