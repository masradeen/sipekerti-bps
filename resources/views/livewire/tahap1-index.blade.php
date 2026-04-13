<div>

    @include('livewire.modal.update-nilai')


    <div class="form-group">
        <label for="name">Tahun</label>
        <select class="form-control" id="select2-dropdown" wire:model="tahun">
            <option value="">-- Pilih Tahun --</option>
            <!-- <option value="2022">2022</option>
      <option value="2023">2023</option> 
            <option value="2024">2024</option>-->
            <option value="2025">2025</option>
        	<option value="2026">2026</option>
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

    <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <!-- <th>Bulan</th> -->
                    <th>NIP</th>
                    <th>Pegawai</th>
                    <th>Indikator 1</th>
                    <th>Indikator 2</th>
                    <th>Indikator 3</th>
                    <th>Indikator 4</th>
                    <th>Indikator 5</th>
                    <th>Indikator 6</th>
                    <th>Indikator 7</th>
                    <th>Total Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($nominasis as $nominasi)
                <tbody>

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <!-- <td>{{ $nominasi->bulan }}</td> -->
                        <td>{{ $nominasi->pegawai->nip_lama }}</td>
                        <td>{{ $nominasi->pegawai->nama }}</td>
                        <td>{{ $nominasi->nilai1 }}</td>
                        <td>{{ $nominasi->nilai2 }}</td>
                        <td>{{ $nominasi->nilai3 }}</td>
                        <td>{{ $nominasi->nilai4 }}</td>
                        <td>{{ $nominasi->nilai5 }}</td>
                        <td>{{ $nominasi->nilai6 }}</td>
                        <td>{{ $nominasi->nilai7 }}</td>
                        <td>{{ $nominasi->total }}</td>
                        <td>
                            @if ($nominasi->is_final != 1)
                                @if ($nominasi->total == 0)
                                    <button data-toggle="modal" data-target="#updateModal"
                                        wire:click="edit({{ $nominasi->id }})" class="btn btn-warning btn-sm">Beri
                                        Nilai</button>
                                @else
                                    <button data-toggle="modal" data-target="#updateModal"
                                        wire:click="edit({{ $nominasi->id }})" class="btn btn-warning btn-sm">Edit
                                        Nilai</button>
                                    <button data-toggle="modal" data-target="#usulModal"
                                        wire:click="edit({{ $nominasi->id }})"
                                        class="btn btn-success btn-sm">Usulkan</button>
                                @endif
                                <button wire:click="delete({{ $nominasi->id }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            @else
                                <h5><span class="badge badge-success">Sudah Dicalonkan</span></h5>
                            @endif
                        </td>

                    </tr>

                </tbody>
            @endforeach
        </table>
    </div>

</div>
