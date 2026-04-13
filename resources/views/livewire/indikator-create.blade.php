<div>
    <form wire:submit.prevent="addIndikator">
        <div class="form-group">
            <label for="name">Nama Indikator</label>
            <input type="text" name="nama" wire:model="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Subkomponen</label>
   
            <div class = "col-md-12">
                <select class="form-control" name="subkomponen" wire:model="subkomponen">
                    <option value="" selected>Pilih Subkomponen</option>
                    @foreach($subkomponens as $subkomponen)
                        <option value="{{ $subkomponen->id }}">{{ $subkomponen->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form> {{-- Stop trying to control. --}}
</div>
