<?php

namespace App\Http\Livewire;
use App\Models\Video;
use App\Models\Variabel;
use Livewire\Component;

class VideoCreate extends Component
{
    public $tautan;
    public $variabel;

    public function addVideo()
    {
        Video::create([
            'tautan' => $this->tautan,
            'variabel_id' => $this->variabel
        ]);

        $this->emit('videoAdded');

        $this->tautan = '';
        $this->variabel = '';
    }
    public function render()
    {
        $variabels = Variabel::get();
        $videos = Video::get();
        return view('livewire.video-create',compact('variabels','videos'));
    }
}
