<div>
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed ">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Indikator</th>
                      <th>Tautan Video Interpretasi Data</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  @foreach ($videos as $video)
                  
                  <tbody>
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$video->variabel->nama}}</td>
                      <td><a href={{$video->tautan}}>{{$video->tautan}}</a></td>
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
