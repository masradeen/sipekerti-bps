<div>
    @include('livewire.modal.update-penilai')

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
                    <th>NIP</th>
                    <th>Pegawai</th>
                    <th>Penilai 1</th>
                    <th>Penilai 2</th>
                    <th>Penilai 3</th>
                    <!-- <th>Penilai 4</th>
                      <th>Penilai 5</th> -->
                    <!-- <th>Skor Partisipasi</th>
                      <th>Skor CKP</th>
                      <th>Skor KJK</th> -->
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($pen as $penilai)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penilai->nip }}</td>
                        <td>{{ $penilai->nama }}</td>
                        <td>{{ $penilai->penilai1 }}</td>
                        <td>{{ $penilai->penilai2 }}</td>
                        <td>{{ $penilai->penilai3 }}</td>
                        <!-- <td>{{ $penilai->penilai4 }}</td> -->

                        <td>
                            @if ($penilai->is_final == 1)
                                <h5><span class="badge badge-success">Penilai Sudah ditetapkan</span></h5>
                            @else
                                <button data-toggle="modal" data-target="#calonModal" wire:click="edit({{ $penilai->id }})"
                                    class="btn btn-warning btn-sm">Edit</button>
                                <button data-toggle="modal" data-target="#penilaiModal" wire:click="edit({{ $penilai->id }})"
                                    class="btn btn-success btn-sm">Finalisasi</button>
                            @endif
                        </td>

                    </tr>

                </tbody>
            @endforeach

        </table>
    </div></div>