<div>
    <form wire:submit.prevent="addVideo">
        <div class="form-group">
            <label for="nama">Variabel :</label>
            
            <div class = "col-md-12">
                <select class="form-control" name="variabel" wire:model="variabel">
                    <option value="" selected>Pilih Indikator</option>
                    @foreach($variabels as $variabel)
                    <option value="{{ $variabel->id }}">{{ $variabel->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Link Video </label>
            <input type="text" name="tautan" wire:model="tautan" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
