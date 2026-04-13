<div>
        <div class="form-group">
            <label for="name">Kategori</label>
            <select class="form-control" id="select2-dropdown" wire:model="kategori">
                <option value="">-- Filter berdasarkan kategori --</option>
                @foreach ($kategoris as $kategori)
                  <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                @endforeach
            </select>
        </div>            

            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed ">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Indikator</th>
                      <th>Tahun Data</th>
                      <th>Data</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  @foreach ($datas as $data)
                  
                  <tbody>
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$data->variabel->nama}}</td>
                      <td>{{$data->tahun}}</td>
                      <td>{{$data->data}} {{$data->variabel->satuan}}</td>
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
