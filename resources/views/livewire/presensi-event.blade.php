<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="card-body table-responsive p-0" style="height: 600px;">
        <form wire:submit.prevent="submit">
            <div class="form-group p-3">
                <label for="assessment_title">Judul Apel/Upacara/Lainnya:</label>
                <input type="text" wire:model.defer="assessment_title" id="assessment_title" class="form-control"
                    placeholder="Contoh: Apel Pagi Kesadaran Nasional">
                @error('assessment_title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group p-3">
                <label for="assessment_date">Tanggal Pelaksanaan:</label>
                <input type="date" wire:model.defer="assessment_date" id="assessment_date" class="form-control">
                @error('assessment_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>Nama Pegawai</th>
                        <th class="text-center">Hadir (1)</th>
                        <th class="text-center">Cuti/Ijin (0.5)</th>
                        <th class="text-center">Alpa (0)</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees_list as $employee)
                        @php
                            $safeKey = 'id_' . str_replace(['.', ' '], '_', $employee->nip_lama);
                        @endphp
                        <tr wire:key="row-event-{{ $employee->nip_lama }}">
                            <td>
                                {{ $employee->nama }}<br>
                                <small class="text-muted">{{ $employee->nip_lama }}</small>
                            </td>
                            <td class="text-center">
                                <input type="radio" wire:model="ratings.{{ $safeKey }}" value="1">
                            </td>
                            <td class="text-center">
                                <input type="radio" wire:model="ratings.{{ $safeKey }}" value="0.5">
                            </td>
                            <td class="text-center">
                                <input type="radio" wire:model="ratings.{{ $safeKey }}" value="0">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm"
                                    wire:model.defer="comments.{{ $safeKey }}" placeholder="...">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="p-3">
                <button type="submit" class="btn btn-success btn-block shadow" wire:loading.attr="disabled">
                    <span wire:loading.remove>Simpan Presensi</span>
                    <span wire:loading>Memproses...</span>
                </button>
            </div>
        </form>
    </div>
</div>