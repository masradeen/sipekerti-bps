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

    <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <!-- <th>NIP</th> -->
                    <th>Pegawai</th>
                    <th>Jumlah Pemilih</th>
                    <th>Indikator 1</th>
                    <th>Indikator 2</th>
                    <th>Indikator 3</th>
                    <th>Indikator 4</th>
                    <th>Indikator 5</th>
                    <th>Indikator 6</th>
                    <th>Indikator 7</th>
                    <th>Total Nilai</th>
                    <!--
                    @if (Auth::user()->role == 1)
<th>Aksi</th>
@else
<th>Status</th>
@endif
                    -->
                </tr>
            </thead>
            @foreach ($nominasis as $nominasi)
                <tbody>
                    <tr style="text-align:center;">
                        <td>{{ $loop->iteration }}</td>
                        <!-- <td>{{ $nominasi->pegawai->nip_lama }}</td> -->
                        <td style="text-align:left;">{{ $nominasi->pegawai->nama }}</td>
                        <td>{{ $nominasi->rpegawai }}</td>
                        <td>{{ $nominasi->rnilai1 }}</td>
                        <td>{{ $nominasi->rnilai2 }}</td>
                        <td>{{ $nominasi->rnilai3 }}</td>
                        <td>{{ $nominasi->rnilai4 }}</td>
                        <td>{{ $nominasi->rnilai5 }}</td>
                        <td>{{ $nominasi->rnilai6 }}</td>
                        <td>{{ $nominasi->rnilai7 }}</td>
                        <td>{{ $nominasi->rtotal }}</td>
                        <!-- tidak digunakan lagi -->
                        <!--
                        <td>
                            @if ($nominasi->rcalon == 0 && Auth::user()->role == 1)
<button data-toggle="modal" data-target="#calonModal"
                                    wire:click="edit({{ $nominasi->pegawai_id }})"
                                    class="btn btn-success btn-sm">PILIH</button>
@elseif ($nominasi->rcalon == 0 && Auth::user()->role != 1)
@else
<h5><span class="badge badge-success">Sudah Terpilih</span></h5>
@endif
                        </td>
                        -->
                    </tr>

                </tbody>
            @endforeach
        </table>
    </div>

</div>
