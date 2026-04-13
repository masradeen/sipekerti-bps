<div>
    <form wire:submit.prevent="addTahap1">

        <div class="form-group">
            <label for="name">Tahun</label>
            <select class="form-control" id="select2-dropdown" name="tahun" wire:model="tahun">
                <option value="">-- Pilih Tahun --</option>
                <!-- <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>-->
                <option value="2025">2025</option>
            	<option value="2026">2026</option>
            </select>

        </div>

        <div class="form-group">
            <label for="name">Triwulan</label>
            <select class="form-control" id="select2-dropdown" name="bulan" wire:model="bulan">
                <option value="">-- Pilih Triwulan --</option>
                <option value="1">Triwulan 1</option>
                <option value="2">Triwulan 2</option>
                <option value="3">Triwulan 3</option>
                <option value="4">Triwulan 4</option>
            </select>

        </div>

        <div class="form-group">
            <label for="name">Nama Pegawai yang Dinominasikan : </label>
            <select class="form-control" id="select2-dropdown" name="pegawai_id" wire:model="pegawai_id">
                <option>-- Pilih Nama Pegawai Nominasi --</option>
                @foreach ($pegawais as $pegawai)
                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                @endforeach
            </select>
        </div>

        @if ($cek < 3)
            <button type="submit" class="btn btn-primary">Submit</button>
        @else
        @endif
    </form>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#select2-dropdown').select2();
            $('#select2-dropdown').on('change', function(e) {
                var data = $('#select2-dropdown').select2("val");
                // @this.set('ottPlatform', data);
            });
        });
    </script>
@endpush
