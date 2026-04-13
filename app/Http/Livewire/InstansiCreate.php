<?php

namespace App\Http\Livewire;
use App\Models\Instansi;
use Livewire\Component;

class InstansiCreate extends Component
{
    public $nama;
    

    
        public function addInstansi()
        {
            Instansi::create(
            [
                'nama' => $this->nama,
            ]);

            $this->emit('instansiAdded');
    
            
            $this->nama = '';
            
        }
    
    public function render()
    {
        $instansis = Instansi::get();
        return view('livewire.instansi-create',compact('instansis'));
    }
}
