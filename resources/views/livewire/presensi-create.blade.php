<div>
    <form wire:submit.prevent="addPresensi">

        <div class="form-group">
            <label for="name">Tahun</label>
            <select class="form-control" name="tahun" wire:model="tahun">
                <option value="">-- Pilih Tahun --</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name">Bulans</label>
            <select class="form-control" name="bulan" wire:model="bulan">
                <option value="">-- Pilih Bulan --</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name">Satuan Kerja</label>
            <select class="form-control" name="satker_id" wire:model="satker_id">
                <!-- <option value="">-- Pilih--</option> -->
                <option value="1">BPS Provinsi Gorontalo</option>
                <!-- <option value="2">BPS Kabupaten Boalemo</option>
                <option value="3">BPS Kabupaten Gorontalo</option> -->
            </select>
        </div>

        <div class="form-group">
            <label for="name">Pekap Presensi dari BackOffice</label>
            <input type="file" name="file" class="form-control" wire:model="file">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
