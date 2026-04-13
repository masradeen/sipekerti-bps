<div>
<form wire:submit.prevent="addPegawai">
        <div class="form-group">
            <label for="name">NIP Lama</label>
            <input type="text" name="nip" wire:model="nip" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Nama Pegawai</label>
            <input type="text" name="nama" wire:model="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Jabatan</label>
   
            <div class = "col-md-12">
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
