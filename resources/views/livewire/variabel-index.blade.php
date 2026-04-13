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
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Variabel</th>
                      <th>Satuan</th>
                      <th>Kategori</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  @foreach ($variabels as $variabel)
                  <tbody>
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$variabel->nama}}</td>
                      <td>{{$variabel->satuan}}</td>
                      <td>{{$variabel->kategori->nama}}</td>
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
