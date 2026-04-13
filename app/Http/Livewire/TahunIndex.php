<?php

namespace App\Http\Livewire;
use App\Models\Tahun;

use Livewire\Component;

class TahunIndex extends Component
{
    public $nama_tahun, $tahun_id;
    
    protected $listeners = [
        'tahunAdded',
    ];

    public function tahunAdded()
    {
        # code...
    }

    public function render()
    {
        $tahuns = Tahun::orderBy('tahun','desc')->get();
       
        return view('livewire.tahun-index', compact('tahuns'));
    }

    private function resetInputFields(){
        $this->nama_tahun = '';
    }

    public function edit($id)
    {
        // dd($id);
        $this->updateMode = true;
        $tahun = Tahun::where('id',$id)->first();
        $this->tahun_id = $tahun->id;
        $this->nama_tahun = $tahun->tahun;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        if ($this->tahun_id) {
            $tahun = Tahun::find($this->tahun_id);
            $tahun->update([
                'tahun' => $this->tahun,
                'updated_at' => now(),
            ]);
            

            $this->updateMode = false;
            session()->flash('message', 'Tahun Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id){
            Tahun::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
