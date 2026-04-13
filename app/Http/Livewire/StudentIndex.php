<?php

namespace App\Http\Livewire;
use App\Models\Student;

use Livewire\Component;

class StudentIndex extends Component
{
    protected $listeners = [
        'studentAdded',
    ];

    public function studentAdded()
    {
        # code...
    }
    
    public function render()
    {
        $students = Student::get();
        return view('livewire.student-index', compact('students'));
    }
}
