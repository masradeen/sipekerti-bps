<div class="container mt-4">
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form wire:submit.prevent="submit">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="font-weight-bold">Tahun</label>
                        <select class="form-control" wire:model="tahun">
                            <option value="">-- Pilih Tahun --</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="font-weight-bold">Bulan</label>
                        <select class="form-control" wire:model="bulan">
                            <option value="">-- Pilih Bulan --</option>
                            @foreach([
                                    1 => 'Jan',
                                    2 => 'Feb',
                                    3 => 'Mar',
                                    4 => 'Apr',
                                    5 => 'Mei',
                                    6 => 'Jun',
                                    7 => 'Jul',
                                    8 => 'Agu',
                                    9 => 'Sep',
                                    10 => 'Okt',
                                    11 => 'Nov',
                                    12 => 'Des'
                                ] as $num => $name)
                                <option value="{{ $num }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                @if($tahun && $bulan)
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>Nama Pegawai</th>
                                    <th width="150">Nilai</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees_list as $employee)
                                    @php
                                        // Samakan kunci dengan yang ada di Class (Prefix id_)
                                        $safeKey = 'id_' . str_replace(['.', ' '], '_', $employee->nip_lama);
                                    @endphp
                                    <tr wire:key="row-{{ $employee->nip_lama }}">
                                        <td>
                                            {{ $employee->nama }}<br>
                                            <small class="text-muted">{{ $employee->nip_lama }}</small>
                                        </td>
                                        <td>
                                            <input type="number" wire:model.defer="nilais.{{ $safeKey }}"
                                                class="form-control text-center" step="0.01">
                                        </td>
                                        <td>
                                            <input type="text" wire:model.defer="comments.{{ $safeKey }}" class="form-control"
                                                placeholder="...">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-success btn-lg shadow" wire:loading.attr="disabled">
                            <span wire:loading.remove><i class="fas fa-save"></i> Simpan Data</span>
                            <span wire:loading><i class="fas fa-spinner fa-spin"></i> Sedang Menyimpan...</span>
                        </button>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>