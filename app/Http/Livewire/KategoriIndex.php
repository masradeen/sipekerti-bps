<?php

namespace App\Http\Livewire;
use App\Models\Kategori;

use Livewire\Component;

class KategoriIndex extends Component
{
    public $nama_kategori, $kategori_id;
    
    protected $listeners = [
        'kategoriAdded',
    ];

    public function kategoriAdded()
    {
        # code...
    }

    public function render()
    {
        $kategoris = Kategori::get();
        
        return view('livewire.kategori-index',compact('kategoris'));
    }

    private function resetInputFields(){
        $this->nama_kategori = '';
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $kategori = Kategori::where('id',$id)->first();
        dd($this->kategori_id);
        $this->kategori_id = $kategori->id;
        $this->nama_kategori = $kategori->nama;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        if ($this->kategori_id) {
            $kategori = Kategori::find($this->kategori_id);
            $kategori->update([
                'nama' => $this->nama_kategori,
                'updated_at' => now(),
            ]);
            

            $this->updateMode = false;
            session()->flash('message', 'Kategori Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id){
            Kategori::where('id',$id)->delete();
            session()->flash('message', 'Kategori Deleted Successfully.');
        }
    }
}
