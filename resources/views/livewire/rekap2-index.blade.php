<div>
  <div class="form-group">
    <label for="name">Tahun</label>
    <select class="form-control" id="select2-dropdown" wire:model="tahun">
      <option value="">-- Pilih Tahun --</option>
      <option value="2023">2023</option>
    </select>
  </div>
  <div class="form-group">
    <label for="name">Bulan</label>
    <select class="form-control" id="select2-dropdown" wire:model="bulan">
      <option value="">-- Pilih Triwulan --</option>
      <option value="1">Triwulan 1</option>
      <option value="2">Triwulan 2</option>
      <!-- <option value="3">Triwulan 3</option> -->
      <option value="4">Triwulan 4</option>
    </select>
  </div>


  <hr>

  <h5>Rekapitulasi Nominasi Pegawai Berdasarkan Penilaian Indeks Berakhlak</h5>
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
          <td colspan="9">Nama Nominasi Pegawai: {{$nominasi->nama}}</td>
          <td>{{number_format($nominasi->rtotal/(290*$nominasi->retotal)*100,2)}}</td>

        </tr>
        @foreach ($finals as $final)
        @if( $final->pegawai_id == $nominasi->pegawai_id)
        <tr>
          <td>-</td>
          <td>{{$final->nama_penilai}}</td>
          <td>{{number_format($final->bplayan/35*100,2)}}</td>
          <td>{{number_format($final->akuntabel/25*100,2)}}</td>
          <td>{{number_format($final->kompeten/40*100,2)}}</td>
          <td>{{number_format($final->harmonis/55*100,2)}}</td>
          <td>{{number_format($final->loyal/40*100,2)}}</td>
          <td>{{number_format($final->adaptif/50*100,2)}}</td>
          <td>{{number_format($final->kolaboratif/45*100,2)}}</td>
          <td>{{number_format($final->total/290*100,2)}}</td>
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
  <hr>

  <h5>Rekapitulasi Penilaian Pegawai Tahap Akhir</h5>
  <div class="card-body table-responsive p-0" style="height: 300px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Nominasi</th>
          <th>Nilai Berakhlak <br>(40%)</th>
          <th>Skor CKP <br>(20%)</th>
          <th>Skor Partisipasi <br>(20%)</th>
          <th>Skor KJK <br>(20%)</th>
          <th>Total</th>
          <th>Hasil</th>
        </tr>
      </thead>
      @foreach ($rekaps as $nominasi)
      <tbody>
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$nominasi->nama}}</td>
          <td>{{number_format($nominasi->total/(290*$nominasi->ctotal)*100*0.4,2)}}</td>
          <td>{{number_format($nominasi->rckp,2)}}</td>
          <td>{{number_format($nominasi->rabsensi,2)}}</td>
          <td>{{number_format($nominasi->rkjk,2)}}</td>
          <!-- <td>{{number_format($nominasi->rtotal+$nominasi->rckp+$nominasi->rabsensi,2)}}</td> -->
          <td>{{number_format(($nominasi->total/(290*$nominasi->ctotal)*100*0.4)+$nominasi->rckp+$nominasi->rabsensi+$nominasi->rkjk,2)}}</td>
          <td>Terbaik {{$loop->iteration}}</td>
        </tr>
      </tbody>
      @endforeach
    </table>

  </div>


</div>