<div>
    <form wire:submit.prevent="addSeleksi">
        <div class="form-group">
            <label for="name">Indikator</label>
            <input type="text" name="indikator" wire:model="indikator" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Deskripsi 1</label>
            <input type="text" name="deskripsi1" wire:model="deskripsi1" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Deskripsi 2</label>
            <input type="text" name="deskripsi2" wire:model="deskripsi2" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Deskripsi 3</label>
            <input type="text" name="deskripsi3" wire:model="deskripsi3" class="form-control">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
