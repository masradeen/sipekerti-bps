<?php

namespace App\Http\Livewire;
use App\Models\Video;
use App\Models\Variabel;
use Livewire\Component;

class VideoIndex extends Component
{
    protected $listeners = [
        'videoAdded',
    ];

    public function videoAdded()
    {
        # code...
    }
    public function render()
    {
        $variabels = Variabel::get();
        $videos = Video::get();
        return view('livewire.video-index',compact('variabels','videos'));
    }
}
