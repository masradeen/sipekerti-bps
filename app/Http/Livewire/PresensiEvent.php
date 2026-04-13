<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use App\Models\PresensiEvents;
use Carbon\Carbon;

use Livewire\Component;

class PresensiEvent extends Component
{
    public $employess;
    public $ratings = [];
    public $comments = [];
    public $assessment_date;
    public $assessment_title;

    public function mount()
    {
        $this->employess = Pegawai::where('status', 1)->orderBy('nama')->get();

        foreach ($this->employess as $employee) {
            $this->ratings[$employee->nip_lama] = 1;
        }
    }

    protected $rules = [
        'ratings.*' => 'required',
        'comments.*' => 'nullable|string|max:255',
        'assessment_date' => 'required|date',
        'assessment_title' => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();

        foreach ($this->ratings as $employee_id => $rating) {
            PresensiEvents::create([
                'pegawai_id' => $employee_id,
                'nilai' => $rating,
                'comment' => $this->comments[$employee_id] ?? null,
                'tanggal' => Carbon::parse($this->assessment_date),
                'event' => $this->assessment_title,
            ]);
        }

        session()->flash('message', 'Performance assessment submitted successfully.');

        // Reset form fields
        $this->reset(['ratings', 'comments', 'assessment_date', 'assessment_title']);

        // Reinitialize default rating
        foreach ($this->employess as $employee) {
            $this->ratings[$employee->nip_lama] = 1;
        }
    }

    public function render()
    {
        // $employess = Pegawai::where('status', 1)->orderBy('nama', 'asc')->get();
        // return view('livewire.presensi-event', compact('employess'));

        return view('livewire.presensi-event');
    }
}
