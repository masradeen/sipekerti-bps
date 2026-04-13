<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Penilaian Nominasi Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Nama Pegawai</label>
                        <input type="text" class="form-control" wire:model="nama_pegawai" disabled>
                        <!-- @error('email') <span class="text-danger">{{ $message }}</span>@enderror -->
                    </div>

                    @foreach($seleksis as $seleksi)
                    <div class="dropdown-divider"></div>
                    <div class="form-group-row">
                        <label for="name">{{$seleksi->id}}. {{$seleksi->nama}}</label>
                        <div class="form-group-row">
                            <div class="form-check">
                                Tidak Setuju <input type="radio" wire:model="nilai{{$seleksi->id}}" value="1"> |
                                Kurang Setuju <input type="radio" wire:model="nilai{{$seleksi->id}}" value="2"> |
                                Setuju <input type="radio" wire:model="nilai{{$seleksi->id}}" value="3" checked> |
                                Sangat Setuju <input type="radio" wire:model="nilai{{$seleksi->id}}" value="4"> |
                                Sangat Setuju Sekali <input type="radio" wire:model="nilai{{$seleksi->id}}" value="5">
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    @endforeach
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-warning" data-dismiss="modal">Input Nilai</button>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="finalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Finalisasi nilai Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Apakah Anda yakin akan finalisasi nilai pegawai teladan ?</label>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" wire:click.prevent="final()" class="btn btn-success" data-dismiss="modal">Finalkan</button>
            </div>
        </div>
    </div>
</div>