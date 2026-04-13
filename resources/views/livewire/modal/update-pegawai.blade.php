<!-- Modal -->

<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="pegawai_id">
                        <label for="exampleFormControlInput1">Nama :</label>
                        <input type="text" class="form-control" wire:model="nama" id="exampleFormControlInput1">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">NIP Lama :</label>
                        <input type="text" class="form-control" wire:model="nip_lama" id="exampleFormControlInput2">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Jabatan :</label>
                        <select class="form-control" name="jabatan" wire:model="jabatan">
                            <option value="" selected>Pilih Jabatan</option>
                            @foreach ($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                            @endforeach
                        </select>
                        @error('jabatan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Status :</label>
                        <select class="form-control" name="status" wire:model="status">
                            <option value="" selected>Pilih Status</option>
                            <option value="1" {{ $jabatan->status == 1 ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ $jabatan->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                            <option value="2" {{ $jabatan->status == 2 ? 'selected' : '' }}>Tugas Belajar/Cuti
                            </option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
