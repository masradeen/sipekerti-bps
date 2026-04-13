<!-- Modal -->

<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="user_id">
                        <label for="exampleFormControlInput1"> Namas :</label>
                        <input type="text" class="form-control" wire:model="nama">
                        <!-- @error('name')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Email :</label>
                        <input type="email" class="form-control" wire:model="email">
                        <!-- @error('email')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Username :</label>
                        <input type="text" class="form-control" wire:model="username">
                        <!-- @error('email')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Role :</label>
                        <select class="form-control" name="role" wire:model="role">
                            <option value="" selected>Pilih Role</option>
                            @foreach ($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                            @endforeach
                        </select>
                        <!-- @error('jabatan')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Pegawai :</label>
                        <select class="form-control" name="pegawaid" wire:model="pegawaid">
                            <option value="" selected>Pilih Pegawai</option>
                            @foreach ($pegawais as $pegawai)
                                <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                            @endforeach
                        </select>
                        <!-- @error('jabatan')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>
                    <div class="form-group">
                        <label for="nama">Satuan Kerja :</label>

                        <div class = "col-md-12">
                            <select class="form-control" name="satker" wire:model="satker">
                                <option value="" selected>Pilih Satker</option>
                                <option value="1">BPS Provinsi Gorontalo</option>
                                <option value="2">BPS Kabupaten Boalemo</option>
                                <option value="3">BPS Kabupaten Gorontalo</option>
                                <option value="4">BPS Kabupaten Pohuwato</option>
                                <option value="5">BPS Kabupaten Bone Bolango</option>
                                <option value="6">BPS Kabupaten Gorontalo Utara</option>
                                <option value="7">BPS Kota Gorontalo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Password</label>
                        <input type="password" class="form-control" wire:model="password">
                        <!-- @error('email')
    <span class="text-danger">{{ $message }}</span>
@enderror -->
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Reset Pass :</label>
                        <select class="form-control" name="is_password_reset_required"
                            wire:model="is_password_reset_required">
                            <option value="" selected>Pilih</option>

                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>

                        </select>

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
