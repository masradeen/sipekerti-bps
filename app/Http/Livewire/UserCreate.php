<?php

namespace App\Http\Livewire;
use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Livewire\Component;

class UserCreate extends Component
{
    public $nama,$email,$username,$pegawai,$role,$satker,$password;

    public function addUser()
        {
            User::create(
                [
                'nama' => $this->nama,
                'email' => $this->email,
                'username' => $this->username,
                'role' => $this->role,
                'pegawai_id' => $this->pegawai,
                'satker_id' => $this->satker,
                'password' => Hash::make($this->password),
            ]);
            $this->emit('userAdded');
    
            $this->nama = '';
            $this->email = '';
            $this->username = '';
            $this->role = '';
            $this->pegawai_id = '';
            $this->satker_id = '';
            $this->password = '';
        }
    
    public function render()
    {
        $pegawais = Pegawai::get();
        $jabatans = Jabatan::get();
        return view('livewire.user-create',compact('pegawais','jabatans'));
    }
}
