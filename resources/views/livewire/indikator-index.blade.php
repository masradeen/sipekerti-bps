<div>
    <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Indikator</th>
                      <th>Subkomponen</th>
                      <th>Komponen</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  @foreach ($indikators as $indikator)
                  
                  <tbody>
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$indikator->nama}}</td>
                      <td>{{$indikator->subkomponen->nama}}</td>
                      <td>{{$indikator->subkomponen->komponen->nama}}</td>
                      <td><span class="tag tag-success">Approved</span></td>
                     
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
            </div>{{-- The whole world belongs to you. --}}
</div>
