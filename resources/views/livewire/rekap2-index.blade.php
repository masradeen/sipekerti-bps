<div>
    <div class="form-group">
        <label for="name">Tahun</label>
        <select class="form-control" id="select2-dropdown" wire:model="tahun">
            <option value="">-- Pilih Tahun --</option>
            <!-- <option value="2023">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option> -->
            <option value="2025">2025</option>
            <option value="2026">2026</option>
        </select>
    </div>
    <div class="form-group">
        <label for="name">Bulan</label>
        <select class="form-control" id="select2-dropdown" wire:model="bulan">
            <option value="">-- Pilih Triwulan --</option>
            <option value="1">Triwulan 1</option>
            <option value="2">Triwulan 2</option>
            <option value="3">Triwulan 3</option>
            <option value="4">Triwulan 4</option>
        </select>
    </div>

    <!-- @if (Auth::user()->id == 15) -->
    <div class="form-group">
        <label for="name">Satuan kerja</label>
        <select class="form-control" name="satker" wire:model="satker">
            <option value="" selected>Pilih Satuan Kerja</option>
            <option value="1">BPS Provinsi Gorontalo</option>
            <!-- <option value="2">BPS Kabupaten Boalemo</option>
            <option value="3">BPS Kabupaten Gorontalo</option>
            <option value="4">BPS Kabupaten Pohuwato</option>
            <option value="5">BPS Kabupaten Bone Bolango</option>
            <option value="6">BPS Kabupaten Gorontalo Utara</option>
            <option value="7">BPS Kota Gorontalo</option> -->
        </select>
    </div>
    <!-- @endif -->


    <hr>
    <h5>Rekapitulasi Nominasi Pegawai Tahap 1</h5>
    <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pegawai</th>
                    <th>Total Nilai</th>
                    <th>Status</th>
                </tr>
            </thead>
            @foreach ($nominasis as $nominasi)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $nominasi->pegawai->nama }}</td>
                    <td>{{ $nominasi->rtotal }}</td>
                    <td>
                        @if ($nominasi->rcalon == 0)
                        @else
                        <h5><span class="badge badge-success"> Nominasi</span></h5>
                        @endif
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>


    <hr>
    <h5>Rekapitulasi Nominasi Pegawai Tahap 2</h5>
    <div class="card-body table-responsive p-0" style="height: 710px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Penilai</th>
                    <th>Berorientasi Pelayanan</th>
                    <th>Akuntabel</th>
                    <th>Kompeten</th>
                    <th>Harmonis</th>
                    <th>Loyal</th>
                    <th>Adaptif</th>
                    <th>kolaboratif</th>
                    <th>Nilai Berakhlak</th>

                </tr>
            </thead>
            @foreach ($finals_nama as $nominasi)
            <tbody>
                <tr>
                    <td colspan="9">Nama Nominasi Pegawai: {{ $nominasi->nama }}</td>
                    <!-- <td>{{ number_format(($nominasi->rtotal / 870) * 100, 2) }}</td>
                     -->
                    <td>{{ number_format(($nominasi->rtotal / (290 * $nominasi->retotal)) * 100, 2) }}</td>

                </tr>
                @foreach ($finals as $final)
                @if ($final->pegawai_id == $nominasi->pegawai_id)
                <tr>
                    <td>-</td>
                    <td>{{ $final->nama_penilai }}</td>
                    <td>{{ number_format(($final->bplayan / 35) * 100, 2) }}</td>
                    <td>{{ number_format(($final->akuntabel / 25) * 100, 2) }}</td>
                    <td>{{ number_format(($final->kompeten / 40) * 100, 2) }}</td>
                    <td>{{ number_format(($final->harmonis / 55) * 100, 2) }}</td>
                    <td>{{ number_format(($final->loyal / 40) * 100, 2) }}</td>
                    <td>{{ number_format(($final->adaptif / 50) * 100, 2) }}</td>
                    <td>{{ number_format(($final->kolaboratif / 45) * 100, 2) }}</td>
                    <td>{{ number_format(($final->total / 290) * 100, 2) }}</td>
                    <td>
                    </td>
                </tr>
                @endif
                @endforeach



            </tbody>
            @endforeach

        </table>
    </div>

    <hr>
    <h5>Rekapitulasi Penilaian Pegawai Tahap Akhir</h5>
    <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Nominasi</th>
                    <th>Nilai Berakhlak <br>(40%)</th>
                    <th>NIlai CKP <br>(40%)</th>
                    <th>Nilai Kedisiplinan <br>(20%)</th>
                    <th>Total</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            @foreach ($rekaps as $nominasi)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $nominasi->nama }}</td>
                    <td>{{ number_format(($nominasi->total / (290 * $nominasi->ctotal)) * 100 * 0.4, 2) }}</td>
                    <td>{{ number_format($nominasi->rckp, 2) }}</td>
                    <td>{{ number_format($nominasi->rabsensi, 2) }}</td>
                    <td>{{ number_format(($nominasi->total / (290 * $nominasi->ctotal)) * 100 * 0.4 + $nominasi->rckp + $nominasi->rabsensi, 2) }}
                    </td>
                    <td>Terbaik {{ $loop->iteration }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>


</div>