<div>
    <form wire:submit.prevent="addTahun">
        <div class="form-group">
            <label for="name">Tahun</label>
            <input type="text" name="tahun" wire:model="tahun" class="form-control">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
