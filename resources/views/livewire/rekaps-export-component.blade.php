<div>
    <div class="form-group">
        <label for="name">Tahun</label>
        <select class="form-control" id="select2-dropdown" wire:model="tahun">
            <option value="">-- Pilih Tahun --</option>
            <!-- <option value="2022">2022</option>
      <option value="2023">2023</option> -->
            <option value="2024">2024</option>
        </select>
    </div>
    <div class="form-group">
        <label for="name">Bulan</label>
        <select class="form-control" id="select2-dropdown" wire:model="bulan">
            <option value="">-- Pilih Bulan --</option>
            <option value="1">Triwulan 1</option>
            <option value="2">Triwulan 2</option>
            <option value="3">Triwulan 3</option>
            <option value="4">Triwulan 4</option>
        </select>
    </div>
    <button wire:click="export">Export to Excel</button>
</div>