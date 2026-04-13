<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Penilaian Nominasi Pegawaiii</h5>
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
                        <small id="emailHelp" class="form-text text-muted">Indikator {{$seleksi->id}}</small>
                        <label for="name">{{$seleksi->indikator}}</label>
                        <small id="emailHelp" class="form-text text-muted">{{$seleksi->deskripsi1}}</small>
                        <small id="emailHelp" class="form-text text-muted">{{$seleksi->deskripsi2}}</small>
                        <small id="emailHelp" class="form-text text-muted">{{$seleksi->deskripsi3}}</small>
                        <div class="form-group-row">
                            <div class="form-check">
                                 <input  type="radio" wire:model="nilai{{$seleksi->id}}"  value="0"> Tidak Setuju |
                                 <input  type="radio" wire:model="nilai{{$seleksi->id}}"  value="1"> Kurang Setuju |
                                 <input  type="radio" wire:model="nilai{{$seleksi->id}}"  value="2"> Setuju |
                                 <input  type="radio" wire:model="nilai{{$seleksi->id}}"  value="3"> Sangat Setuju
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

<div wire:ignore.self class="modal fade" id="usulModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Usul Nominasi Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Apakah Anda yakin akan mengusulkan  sebagai pegawai teladan?</label>
                    </div>                  
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" wire:click.prevent="usul()" class="btn btn-warning" data-dismiss="modal">Usulkan</button>
            </div>
       </div>
    </div>
</div>