<div>
    <form wire:submit.prevent="addInter">
        <div class="form-group">
            <label for="nama">Variabel : </label>
   
            <div class = "col-md-12">
                <select class="form-control" name="variabel" wire:model="variabel">
                    <option value="" selected>Pilih Variabel</option>
                    @foreach($variabels as $variabel)
                    <option value="{{ $variabel->id }}">{{ $variabel->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Interpretasi Data : </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="intpretasi" wire:model="interpretasi"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

