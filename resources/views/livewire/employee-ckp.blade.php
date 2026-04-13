<div class="container mt-4">
    <!-- Flash Message -->
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="card">

        <div class="card-body">
            <form wire:submit.prevent="submit">
                <div class="row">
                    <!-- Tahun -->
                    <div class="col-md-6 mb-3">
                        <label for="tahun" class="font-weight-bold">Tahun</label>
                        <select class="form-control" id="tahun" wire:model="tahun">
                            <option value="">-- Pilih Tahun --</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        	<option value="2026">2026</option>
                        </select>
                        @error('tahun')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Bulan -->
                    <div class="col-md-6 mb-3">
                        <label for="bulan" class="font-weight-bold">Bulan</label>
                        <select class="form-control" id="bulan" wire:model="bulan">
                            <option value="">-- Pilih Bulan --</option>
                            @foreach ([1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'] as $key => $month)
                                <option value="{{ $key }}">{{ $month }}</option>
                            @endforeach
                        </select>
                        @error('bulan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>NIP</th>
                                <th>Nama Pegawai</th>
                                <th>Capaian Kinerja</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employess as $employee)
                                <tr>
                                    <td class="align-middle">{{ $employee->nip_lama }}</td>
                                    <td class="align-left">{{ $employee->nama }}</td>
                                    <td>
                                        <input type="number" class="form-control text-center"
                                            wire:model="nilais.{{ $employee->nip_lama }}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control"
                                            wire:model="comments.{{ $employee->nip_lama }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Error Message -->
                @error('nilais.*')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                @error('comments.*')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <!-- Submit Button -->
                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-check"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
