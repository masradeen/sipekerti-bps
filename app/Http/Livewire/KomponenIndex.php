<?php

namespace App\Http\Livewire;
use App\Models\Komponen;

use Livewire\Component;

class KomponenIndex extends Component
{
    public $nama_komponen;
    
    protected $listeners = [
        'komponenAdded',
    ];

    public function komponenAdded()
    {
        # code...
    }

    public function render()
    {
        $komponens = Komponen::get();
        return view('livewire.komponen-index',compact('komponens'));
    }

    private function resetInputFields(){
        $this->nama_komponen = '';
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $komponen = Komponen::where('id',$id)->first();
        $this->komponen_id = $komponen->id;
        $this->nama_komponen = $komponen->nama;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        if ($this->komponen_id) {
            $komponen = Komponen::find($this->komponen_id);
            $komponen->update([
                'nama' => $this->nama_komponen,
                'updated_at' => now(),
            ]);
            

            $this->updateMode = false;
            session()->flash('message', 'Komponen Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id){
            Komponen::where('id',$id)->delete();
            session()->flash('message', 'Komponen Deleted Successfully.');
        }
    }
}
