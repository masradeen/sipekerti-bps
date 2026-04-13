<div wire:ignore.self class="modal fade" id="calonModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Nominasi Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <!-- <label for="exampleFormControlInput2">Apakah Anda yakin akan memilih $nama_pegawai sebagai nominasi pegawai teladan?</label> -->
                        <label for="exampleFormControlInput2">Apakah Anda yakin akan memilih {{ $nama_pegawais }}
                            sebagai nominasi pegawai teladan?</label>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Pikir-pikir ulang..</button>
                <button type="button" wire:click.prevent="pilih()" class="btn btn-warning"
                    data-dismiss="modal">Yakin!</button>
            </div>
        </div>
    </div>
</div>
