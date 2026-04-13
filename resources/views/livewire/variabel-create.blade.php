<div>
    <form wire:submit.prevent="addVariabel">
        <div class="form-group">
            <label for="name">Nama Indikator: </label>
            <input type="text" name="nama" wire:model="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Satuan : </label>
            <input type="text" name="satuan" wire:model="satuan" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Kategori</label>
   
            <div class = "col-md-12">
                <select class="form-control" name="kategori" wire:model="kategori">
                    <option value="" selected>Pilih Kategori</option>
                    @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
