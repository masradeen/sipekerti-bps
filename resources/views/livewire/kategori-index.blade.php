
@include('livewire.modal.update-kategoris')
<div>
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Kategori</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  @foreach ($kategoris as $kategori)
                  
                  <tbody>
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$kategori->nama}}</td>
                      <td>
                        <button data-toggle="modal" data-target="#updateModalKat" wire:click="edit({{$kategori->id}})" class="btn btn-warning">Edit</button>
                        <button wire:click="delete({{ $kategori->id }})" class="btn btn-danger">Delete</button>
                      </td>
                     
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
            </div>
</div>


