<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use App\Models\PresensiEvents;
use Carbon\Carbon;
use Livewire\Component;

class PresensiEvent extends Component
{
    // Hapus $employess dari properti public
    public $ratings = [];
    public $comments = [];
    public $assessment_date;
    public $assessment_title;

    protected $rules = [
        'ratings.*' => 'required',
        'comments.*' => 'nullable|string|max:255',
        'assessment_date' => 'required|date',
        'assessment_title' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->assessment_date = date('Y-m-d');
        $pegawais = Pegawai::where('status', 1)->get();

        foreach ($pegawais as $employee) {
            // Gunakan prefix id_ untuk kunci array yang aman
            $safeKey = 'id_' . str_replace(['.', ' '], '_', $employee->nip_lama);
            $this->ratings[$safeKey] = 1;
            $this->comments[$safeKey] = null;
        }
    }

    public function submit()
    {
        $this->validate();

        foreach ($this->ratings as $key => $rating) {
            // Kembalikan ke NIP asli
            $originalNip = str_replace('id_', '', $key);

            PresensiEvents::create([
                'pegawai_id' => $originalNip,
                'nilai' => $rating,
                'comment' => $this->comments[$key] ?? null,
                'tanggal' => Carbon::parse($this->assessment_date),
                'event' => $this->assessment_title,
            ]);
        }

        session()->flash('message', 'Presensi event berhasil disimpan.');

        // Reset fields
        $this->reset(['ratings', 'comments', 'assessment_date', 'assessment_title']);
        $this->mount(); // Re-inisialisasi default rating
    }

    public function render()
    {
        // Ambil data pegawai di sini agar tidak membebani payload
        return view('livewire.presensi-event', [
            'employees_list' => Pegawai::where('status', 1)->orderBy('nama')->get()
        ]);
    }
}