<div>
    <form wire:submit.prevent="addSubkomponen">
        <div class="form-group">
            <label for="name">Nama Subkomponen</label>
            <input type="text" name="nama" wire:model="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Komponen</label>
   
            <div class = "col-md-12">
                <select class="form-control" name="komponen" wire:model="komponen">
                    <option value="" selected>Pilih Komponen</option>
                    @foreach($komponens as $komponen)
                        <option value="{{ $komponen->id }}">{{ $komponen->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
