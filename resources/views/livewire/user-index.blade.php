<div>

@include('livewire.modal.update-user')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif

<div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Aksi</th>
                     
                    </tr>
                  </thead>
                  @foreach ($users as $user)
                  
                  <tbody>
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$user->nama}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->username}}</td>
                      <td>
                        <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $user->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $user->id }})" class="btn btn-danger btn-sm">Delete</button>
                      </td>
                     
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
            </div>

</div>
