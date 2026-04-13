

<div>
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Subkomponen</th>
                      <th>Nama Komponen</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  @foreach ($subkomponens as $subkomponen)
                  
                  <tbody>
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$subkomponen->nama}}</td>
                      <td>{{$subkomponen->komponen->nama}}</td>
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


