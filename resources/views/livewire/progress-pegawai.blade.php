<div>
    @include('livewire.modal.update-usul')
    <div class="form-group">
        <label for="name">Tahun</label>
        <select class="form-control" id="select2-dropdown" wire:model="tahun">
            <option value="">-- Pilih Tahun --</option>
           <!-- <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option> -->
            <option value="2025">2025</option>
        	<option value="2026">2026</option>
        </select>
    </div>
    <div class="form-group">
        <label for="name">Triwulan</label>
        <select class="form-control" id="select2-dropdown" wire:model="bulan">
            <option value="">-- Pilih Triwulan --</option>
            <option value="1">Triwulan 1</option>
            <option value="2">Triwulan 2</option>
            <option value="3">Triwulan 3</option>
            <option value="4">Triwulan 4</option>
        </select>
    </div>

    <div class="card-body table-responsive p-0" style="height: 800px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Pegawai</th>
                    <th>Status</th>
                </tr>
            </thead>
            @foreach ($nominasis as $nominasi)
                <tbody>
                    <tr style="text-align:center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $nominasi->nip_lama }}</td>
                        <td style="text-align:left;">{{ $nominasi->nama }}</td>
                        @if ($nominasi->milih == null)
                            <td><span class="badge badge-danger">Belum</badge>
                            </td>
                        @else
                            <td><span class="badge badge-success">Sudah</badge>
                            </td>
                        @endif
                    </tr>

                </tbody>
            @endforeach
        </table>
    </div>

</div>
