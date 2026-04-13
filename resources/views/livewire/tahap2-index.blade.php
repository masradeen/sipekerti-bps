<div>

    @include('livewire.modal.update-final')
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
                    <th>Nomor</th>
                    <!-- <th>Bulan</th> -->
                    <th>Pegawai</th>
                    <th>Penilai</th>
                    <th>Berorientasi Pelayanan</th>
                    <th>Akuntabel</th>
                    <th>Kompeten</th>
                    <th>Harmonis</th>
                    <th>Loyal</th>
                    <th>Adaptif</th>
                    <th>Kolaboratif</th>
                    <th>Total Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($fins as $final)
                <tbody>


                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <!-- <td>{{ $final->bulan }}</td> -->
                        <td>{{ $final->nama_pegawai }}</td>
                        <td>{{ $final->nama_penilai }}</td>
                        <td>{{ number_format((($final->nilai2 + $final->nilai4 + $final->nilai1 + $final->nilai5 + $final->nilai19 + $final->nilai3 + $final->nilai19) / 35) * 100), 2 }}
                        </td>
                        <td>{{ number_format((($final->nilai26 + $final->nilai28 + $final->nilai27 + $final->nilai29 + $final->nilai30) / 25) * 100), 2 }}
                        </td>
                        <td>{{ number_format((($final->nilai6 + $final->nilai7 + $final->nilai18 + $final->nilai19 + $final->nilai8 + $final->nilai9 + $final->nilai10 + $final->nilai18) / 40) * 100), 2 }}
                        </td>
                        <td>{{ number_format((($final->nilai1 + $final->nilai11 + $final->nilai12 + $final->nilai16 + $final->nilai18 + $final->nilai15 + $final->nilai21 + $final->nilai22 + $final->nilai23 + $final->nilai25 + $final->nilai35) / 55) * 100), 2 }}
                        </td>
                        <td>{{ number_format((($final->nilai26 + $final->nilai27 + $final->nilai30 + $final->nilai31 + $final->nilai32 + $final->nilai34 + $final->nilai18 + $final->nilai29) / 40) * 100), 2 }}
                        </td>
                        <td>{{ number_format((($final->nilai19 + $final->nilai22 + $final->nilai23 + $final->nilai34 + $final->nilai24 + $final->nilai25 + $final->nilai4 + $final->nilai21 + $final->nilai33 + $final->nilai35) / 50) * 100), 2 }}
                        </td>
                        <td>{{ number_format((($final->nilai1 + $final->nilai4 + $final->nilai11 + $final->nilai12 + $final->nilai16 + $final->nilai13 + $final->nilai15 + $final->nilai12 + $final->nilai14) / 45) * 100), 2 }}
                        </td>
                        <td>{{ number_format(($final->total / 290) * 100), 2 }}</td>
                        <td>
                            @if ($final->is_final != 1)
                                <button data-toggle="modal" data-target="#updateModal"
                                    wire:click="edit({{ $final->id }})" class="btn btn-warning ">Beri Nilai</button>
                                <button data-toggle="modal" data-target="#finalModal"
                                    wire:click="edit({{ $final->id }})" class="btn btn-success">Finalisasi</button>
                            @else
                                <h5><span class="badge badge-success">Sudah difinalkan</span></h5>
                            @endif
                            <!-- <button type="button" class="btn btn-danger">Hapus</button> -->
                        </td>


                    </tr>

                </tbody>
            @endforeach
        </table>
    </div>

</div>
