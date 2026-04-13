<div>


    @include('livewire.modal.update-pegawai')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
            {{ session('message') }}
        </div>
    @endif

    <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            @foreach ($pegawais as $pegawai)
                <tbody>

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pegawai->nip_lama }}</td>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->jabatan->nama }}</td>
                        <td>{{ $pegawai->status }}</td>
                        <td>
                            <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $pegawai->id }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            <button wire:click="delete({{ $pegawai->id }})"
                                class="btn btn-danger btn-sm">Delete</button>
                        </td>

                    </tr>

                </tbody>
            @endforeach
        </table>
    </div>

</div>
