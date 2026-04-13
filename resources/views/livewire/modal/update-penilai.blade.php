<div wire:ignore.self class="modal fade" id="calonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Atur Penilai Nominasi Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="pegawai_id">
                        <input type="hidden" wire:model="bulan">
                        <label for="exampleFormControlInput1">Nama Nominasi Pegawai Teladan:</label>
                        <input type="text" class="form-control" wire:model="nama_nominasi" disabled>
                        <!-- @error('name')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Penilai 1 :</label>
                        <select class="form-control" name="penilai1" wire:model="penilai1">
                            <option value="" selected>Pilih Penilai 1</option>
                            @foreach ($penilai1s as $penilai1)
                                <option value="{{ $penilai1->id }}">{{ $penilai1->nama }}</option>
                            @endforeach
                        </select>
                        <!-- @error('jabatan')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Penilai 2 :</label>
                        <select class="form-control" name="penilai2" wire:model="penilai2">
                            <option value="" selected>Pilih Penilai 2</option>
                            @foreach ($penilai2s as $penilai2)
                                <option value="{{ $penilai2->id }}">{{ $penilai2->nama }}</option>
                            @endforeach
                        </select>
                        <!-- @error('jabatan')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Penilai 3 :</label>
                        <select class="form-control" name="penilai3" wire:model="penilai3">
                            <option value="" selected>Pilih Penilai 3</option>
                            @foreach ($penilai3s as $penilai3)
                                <option value="{{ $penilai3->id }}">{{ $penilai3->nama }}</option>
                            @endforeach
                        </select>
                        <!-- @error('jabatan')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>





                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Pikir-pikir ulang..</button>
                <button type="button" wire:click.prevent="penilai()" class="btn btn-warning"
                    data-dismiss="modal">Yakin!</button>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="penilaiModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Finalisasi Penilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <!-- <label for="exampleFormControlInput2">Apakah Anda yakin akan memilih $nama_pegawai sebagai nominasi pegawai teladan?</label> -->
                        <label for="exampleFormControlInput2">Apakah Anda yakin akan memfinalkan alokasi penilai pada
                            {{ $nama_nominasi }}?</label>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Pikir-pikir ulang..</button>
                <button type="button" wire:click.prevent="final()" class="btn btn-warning"
                    data-dismiss="modal">Yakin!</button>
            </div>
        </div>
    </div>
</div>
