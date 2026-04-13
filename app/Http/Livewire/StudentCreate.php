<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentCreate extends Component
{
    public $name;

    public function addStudent()
    {
        Student::create(['name' => $this->name]);

        $this->emit('studentAdded');

        $this->name = '';
    }

    public function render()
    {
        return view('livewire.student-create');
    }
}
