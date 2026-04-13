
@include('livewire.modal.stuba.update-tahun')
<div>
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Tahun Data</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  @foreach ($tahuns as $tahun)
                  
                  <tbody>
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$tahun->tahun}}</td>
                      <td>
                       
                        <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{$tahun->id}})" class="btn btn-warning">Edit</button>
                        <button wire:click="delete({{ $tahun->id }})" class="btn btn-danger">Delete</button>
                      </td>
                     
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
            </div>
</div>


