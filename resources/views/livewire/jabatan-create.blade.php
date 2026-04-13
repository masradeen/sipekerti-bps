<div>
    <form wire:submit.prevent="addJabatan">
        
        <div class="form-group">
            <label for="name">Nama Jabatan</label>
            <input type="text" name="nama" wire:model="nama" class="form-control">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
