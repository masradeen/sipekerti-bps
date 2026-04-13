<div>

    <a class="btn btn-success" data-toggle="collapse" href="#collapseRekapPegawai" role="button" aria-expanded="false"
        aria-controls="collapseRekapPegawai">
        Rekap Presensi Pegawai
    </a>
    <div class="collapse mt-1" id="collapseRekapPegawai">
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
            <label for="name">Bulan</label>
            <select class="form-control" id="select2-dropdown" wire:model="bulan">
                <option value="">-- Pilih Bulan --</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
        </div>

        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>HK</th>
                        <th>HD</th>
                        <th>TK</th>
                        <th>TL</th>
                        <th>TB</th>
                        <th>PD</th>
                        <th>DK</th>
                        <th>KN</th>
                        <th>PSW</th>
                        <th>PSW1</th>
                        <th>PSW2</th>
                        <th>PSW3</th>
                        <th>PSW4</th>
                        <th>HT</th>
                        <th>TL1</th>
                        <th>TL2</th>
                        <th>TL3</th>
                        <th>TL4</th>
                        <th>CB</th>
                        <th>CL</th>
                        <th>CM</th>
                        <th>CP</th>
                        <th>CS</th>
                        <th>CT10</th>
                        <th>CT11</th>
                        <th>CT12</th>
                        <th>CST1</th>
                        <th>CST2</th>
                        <th>KJK HT</th>
                        <th>KJK PC</th>
                        <th>Total KJK</th>
                    </tr>
                </thead>
                @foreach ($presensis as $presensi)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $presensi->nip }}</td>
                            <td>{{ $presensi->nama }}</td>
                            <td>{{ $presensi->hk }}</td>
                            <td>{{ $presensi->hd }}</td>
                            <td>{{ $presensi->tk }}</td>
                            <td>{{ $presensi->tl }}</td>
                            <td>{{ $presensi->tb }}</td>
                            <td>{{ $presensi->pd }}</td>
                            <td>{{ $presensi->dk }}</td>
                            <td>{{ $presensi->kn }}</td>
                            <td>{{ $presensi->psw }}</td>
                            <td>{{ $presensi->psw1 }}</td>
                            <td>{{ $presensi->psw2 }}</td>
                            <td>{{ $presensi->psw3 }}</td>
                            <td>{{ $presensi->psw4 }}</td>
                            <td>{{ $presensi->ht }}</td>
                            <td>{{ $presensi->tl1 }}</td>
                            <td>{{ $presensi->tl2 }}</td>
                            <td>{{ $presensi->tl3 }}</td>
                            <td>{{ $presensi->tl4 }}</td>
                            <td>{{ $presensi->cb }}</td>
                            <td>{{ $presensi->cl }}</td>
                            <td>{{ $presensi->cm }}</td>
                            <td>{{ $presensi->cp }}</td>
                            <td>{{ $presensi->cs }}</td>
                            <td>{{ $presensi->ct10 }}</td>
                            <td>{{ $presensi->ct11 }}</td>
                            <td>{{ $presensi->ct12 }}</td>
                            <td>{{ $presensi->cst1 }}</td>
                            <td>{{ $presensi->cst2 }}</td>
                            <td>{{ $presensi->kjk_ht }}</td>
                            <td>{{ $presensi->kjk_pc }}</td>
                            <td>{{ $presensi->kjk }}</td>
                        </tr>

                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

    <br>

    <a class="btn btn-primary mt-2" data-toggle="collapse" href="#collapseRekapSatker" role="button"
        aria-expanded="false" aria-controls="collapseRekapSatker">
        Rekap Presensi Satker
    </a>
    <div class="collapse mt-1" id="collapseRekapSatker">
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


        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Bulan</th>
                        <th>Hapus</th>
                        <th>HK</th>
                        <th>HD</th>
                        <th>TK</th>
                        <th>TL</th>
                        <th>TB</th>
                        <th>PD</th>
                        <th>DK</th>
                        <th>KN</th>
                        <th>PSW</th>
                        <th>PSW1</th>
                        <th>PSW2</th>
                        <th>PSW3</th>
                        <th>PSW4</th>
                        <th>HT</th>
                        <th>TL1</th>
                        <th>TL2</th>
                        <th>TL3</th>
                        <th>TL4</th>
                        <th>CB</th>
                        <th>CL</th>
                        <th>CM</th>
                        <th>CP</th>
                        <th>CS</th>
                        <th>CT10</th>
                        <th>CT11</th>
                        <th>CT12</th>
                        <th>CST1</th>
                        <th>CST2</th>
                        <th>KJK HT</th>
                        <th>KJK PC</th>
                        <th>Total KJK</th>
                        <th>Durasi</th>
                    </tr>
                </thead>
                @foreach ($rekaps as $rekap)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rekap->bulan }}</td>
                            <td><button wire:click="delete({{ $rekap->bulan }})"
                                    class="btn btn-danger btn-sm">Delete</button></td>
                            <td>{{ $rekap->hk }}</td>
                            <td>{{ $rekap->hd }}</td>
                            <td>{{ $rekap->tk }}</td>
                            <td>{{ $rekap->tl }}</td>
                            <td>{{ $rekap->tb }}</td>
                            <td>{{ $rekap->pd }}</td>
                            <td>{{ $rekap->dk }}</td>
                            <td>{{ $rekap->kn }}</td>
                            <td>{{ $rekap->psw }}</td>
                            <td>{{ $rekap->psw1 }}</td>
                            <td>{{ $rekap->psw2 }}</td>
                            <td>{{ $rekap->psw3 }}</td>
                            <td>{{ $rekap->psw4 }}</td>
                            <td>{{ $rekap->ht }}</td>
                            <td>{{ $rekap->tl1 }}</td>
                            <td>{{ $rekap->tl2 }}</td>
                            <td>{{ $rekap->tl3 }}</td>
                            <td>{{ $rekap->tl4 }}</td>
                            <td>{{ $rekap->cb }}</td>
                            <td>{{ $rekap->cl }}</td>
                            <td>{{ $rekap->cm }}</td>
                            <td>{{ $rekap->cp }}</td>
                            <td>{{ $rekap->cs }}</td>
                            <td>{{ $rekap->ct10 }}</td>
                            <td>{{ $rekap->ct11 }}</td>
                            <td>{{ $rekap->ct12 }}</td>
                            <td>{{ $rekap->cst1 }}</td>
                            <td>{{ $rekap->cst2 }}</td>
                            <td>{{ $rekap->kjk_ht }}</td>
                            <td>{{ $rekap->kjk_pc }}</td>
                            <td>{{ $rekap->kjk }}</td>
                            <td>{{ $rekap->durasi }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>


</div>
</div>
