<div>
    <form wire:submit.prevent="addData">
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
            <label for="nama">Tahun  :</label>
            <div class = "col-md-12">
                <select class="form-control" name="tahun" wire:model="tahun">
                    <option value="" selected>Pilih Tahun Data :</option>
                    @foreach($tahuns as $tahun)
                    <option value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Data : </label>
            <input type="number" name="data" wire:model="data" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
