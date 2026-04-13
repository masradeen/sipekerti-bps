<?php

namespace App\Http\Livewire;
use App\Models\Instansi;
use Livewire\Component;

class InstansiIndex extends Component
{
    public $nama;
    public $updateMode = false;

    public function render()
    {
        $instansis = Instansi::get();
        return view('livewire.instansi-index',compact('instansi'));
    }

    

    protected $listeners = [
        'jabatanAdded',
    ];

    public function jabatanAdded()
    {
        # code...
    }

    
    private function resetInputFields(){
        $this->nama = '';
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $jabatan = Jabatan::where('id',$id)->first();
        $this->nama = $jabatan->nama;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        if ($this->jabatan_id) {
            $jabatan = Jabatan::find($this->jabatan_id);
            $jabatan->update([
                'nama' => $this->nama,
                'updated_at' => now(),
            ]);
            

            $this->updateMode = false;
            session()->flash('message', 'Jabatan Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id){
            Jabatan::where('id',$id)->delete();
            session()->flash('message', 'Jabatan Deleted Successfully.');
        }
    }

}
