  <h2>Rekapitulasi Penilaian Pegawai Tahap Akhir Seluruh Pegawai</h2>

  <h4>Tahun : {{$tahun}}</h4>
  <h4>Triwulan : {{$bulan}}</h4>


  <table border="1">
      <thead>
          <tr>
              <th width="400px" style='text-align: left; font-weight: bold'>Nama</th>
              <th style='text-align: center; font-weight: bold'>KJK</th>
              <th style='text-align: center; font-weight: bold'>CKP</th>
              <th style='text-align: center; font-weight: bold'>Presensi</th>
              <th style='text-align: center; font-weight: bold'>Tahap 1</th>
              <th style='text-align: center; font-weight: bold'>Tahap 2</th>
              <th style='text-align: center; font-weight: bold'>Total</th>
          </tr>
      </thead>
      <tbody>
          @foreach($rekaps as $user)
          <tr>
              <td>{{ $user->nama }}</td>
              <td>{{ $user->kjk }}</td>
              <td>{{ $user->ckp }}</td>
              <td>{{ $user->presensi }}</td>
              <td>{{ $user->tahap1 }}</td>
              <td>{{ $user->tahap2 }}</td>
              <td>{{ $user->total }}</td>
          </tr>
          @endforeach
      </tbody>
  </table>