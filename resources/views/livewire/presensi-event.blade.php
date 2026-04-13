<div>
    <!-- <h1>Employee Performance Assessment</h1> -->

    @if (session()->has('message'))
    <div style="color: green;">
        {{ session('message') }}
    </div>
    @endif

    <div class="card-body table-responsive p-0" style="height: 600px;">

        <form wire:submit.prevent="submit">
            <div class="form-group">
                <label for="assessment_title">Judul Apel/Upacara/Lainnya:</label>
                <input type="text" wire:model="assessment_title" id="assessment_title" class="form-control">
                @error('assessment_title') <span style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="assessment_date">Tanggal Pelaksanaan:</label>
                <input type="date" wire:model="assessment_date" id="assessment_date" class="form-control">
                @error('assessment_date') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>Nama Pegawai</th>
                        <th style="text-align: center">Hadir</th>
                        <th style="text-align: center">Cuti/Ijin/TL</th>
                        <th style="text-align: center">Tidak Hadir</th>
                        <th style="text-align: center">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employess as $employee)
                    <tr>
                        <td>{{ $employee->nama }}</td>
                        <td style="text-align: center">
                            <input type="radio" wire:model="ratings.{{ $employee->nip_lama }}" value="1" {{ $ratings[$employee->nip_lama] == 1 ? 'checked' : '' }}>
                        </td>
                        <td style="text-align: center">
                            <input type="radio" wire:model="ratings.{{ $employee->nip_lama }}" value="0.5" {{ $ratings[$employee->nip_lama] == 0.5 ? 'checked' : '' }}>
                        </td>
                        <td style="text-align: center">
                            <input type="radio" wire:model="ratings.{{ $employee->nip_lama }}" value="0" {{ $ratings[$employee->nip_lama] == 0 ? 'checked' : '' }}>
                        </td>
                        <td style="text-align: center">
                            <input type="text" wire:model="comments.{{ $employee->nip_lama }}">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @error('ratings.*') <span style="color: red;">{{ $message }}</span> @enderror
            @error('comments.*') <span style="color: red;">{{ $message }}</span> @enderror

            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
    </div>
</div>