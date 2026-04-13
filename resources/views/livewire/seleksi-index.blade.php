<div>
<div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Pertanyaan</th>
                      <th>Deskripsi 1</th>
                      <th>Deskripsi 2</th>
                      <th>Deskripsi 3</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  @foreach ($seleksis as $seleksi)
                  
                  <tbody>
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$seleksi->indikator}}</td>
                      <td>{{$seleksi->deskripsi1}}</td>
                      <td>{{$seleksi->deskripsi2}}</td>
                      <td>{{$seleksi->deskripsi3}}</td>
                      
                      <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                      </td>
                     
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
            </div>

</div>
