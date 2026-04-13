<div>
    @include('livewire.modal.update-usul1')
    <div class="form-group">
        <label for="name">Tahun</label>
        <select class="form-control" id="select2-dropdown" wire:model="tahun">
            <option value="">-- Pilih Tahun --</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
        </select>
    </div>
    <div class="form-group">
        <label for="name">Bulan</label>
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
                    <th>Nomor</th>
                    <!-- <th>Bulan</th> -->
                    <th>NIP</th>
                    <th>Pegawai</th>
                    <th>Polling Pegawai</th>
                    <th>Skor KJK</th>
                    <th>Skor CKP</th>
                    <th>Skor Partisipasi</th>
                    <th>Total Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($nominasis as $nominasi)
                <tbody>

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <!-- <td>{{ $nominasi->bulan }}</td> -->
                        <td>{{ $nominasi->nip_lama }}</td>
                        <td>{{ $nominasi->nama }}</td>
                        <td>{{ $nominasi->nilai_tahap1 }}</td>
                        <td>{{ $nominasi->nilai_kjk }}</td>
                        <td>{{ $nominasi->nilai_ckp }}</td>
                        <td>{{ $nominasi->nilai_presensi }}</td>
                        <td>{{ $nominasi->total }}</td>


                        <td>
                            @if ($nominasi->rcalon == 0 && Auth::user()->role == 1)
                                <button data-toggle="modal" data-target="#calonModal1"
                                    wire:click="edit({{ $nominasi->pegawai_id }})"
                                    class="btn btn-success btn-sm">PILIH</button>
                            @elseif ($nominasi->rcalon == 0 && Auth::user()->role != 1)
                            @else
                                <h5><span class="badge badge-success">Sudah Terpilih</span></h5>
                            @endif
                        </td>

                    </tr>

                </tbody>
            @endforeach
        </table>
    </div>

</div>
