<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Livewire\Component;

class UserIndex extends Component
{
    public $nama, $email, $username, $role, $pegawaid, $satker, $password, $jabatan, $pegawai_id;
    public $updateMode = false;

    protected $listeners = [
        'userAdded',
    ];

    public function userAdded()
    {
        # code...
    }

    public function render()
    {
        $users = User::orderBy('id')->get();
        $jabatans = Jabatan::get();
        $pegawais = Pegawai::get();
        return view('livewire.user-index', compact('users', 'jabatans', 'pegawais'));
    }

    private function resetInputFields()
    {
        $this->nama = '';
        $this->email = '';
        $this->username = '';
        $this->role = '';
        $this->pegawai = '';
        $this->satker = '';
        $this->password = '';
        $this->is_password_reset_required = '';
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $pegawais = Pegawai::get();
        $jabatans = Jabatan::orderBy('nama')->get();
        $user = User::where('id', $id)->first();
        $this->user_id = $id;
        $this->nama = $user->nama;
        $this->email = $user->email;
        $this->username = $user->username;
        $this->role = $user->role;
        $this->pegawaid = $user->pegawai_id;
        $this->satker = $user->satker_id;
        $this->password = $user->password;
        $this->is_password_reset_required = $user->is_password_reset_required;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'nama' => $this->nama,
                'email' => $this->email,
                'username' => $this->username,
                'role' => $this->role,
                'pegawai_id' => $this->pegawaid,
                'satker_id' => $this->satker,
                'password' => Hash::make($this->password),
                'is_password_reset_required' => $this->is_password_reset_required,
                'updated_at' => now(),
            ]);
            // dd($user);         

            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            User::where('id', $id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
