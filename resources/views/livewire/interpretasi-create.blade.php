<div>
    <form wire:submit.prevent="addInterpretasi">
        
        <div class="form-group">
            <label for="nama">Variabel : </label>
   
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
            <label for="name">Interpretasi : </label>
            <textarea name="interpretasi" wire:model="interpretasi" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
