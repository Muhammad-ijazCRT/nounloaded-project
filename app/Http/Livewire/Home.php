<?php

namespace App\Http\Livewire;

use App\Models\CountDownAlerts;
use App\Models\TmaQuestions;
use Livewire\Component;
use App\Models\Tutors as ModelsTutors;
use App\Models\Faculties;
use Livewire\WithPagination;

class Home extends Component
{
    public $faculties, $faculty;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public $student, $name, $email, $contact, $password, $countDowns;

    // mount 
    public function mount()
    {
        $this->countDowns =  CountDownAlerts::all();
    }

    public function render()
    {
        $alert = session('alert');
        if ($alert) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Your Profile cannot be Updated!']);
        }


        $this->faculties = Faculties::all();
        if ($this->faculty == "") {
            return view('livewire.home', [
                "tutors" => ModelsTutors::paginate(12)->where('pay_status', 'paid')
            ]);
        } else {
            return view('livewire.home', [
                "tutors" => ModelsTutors::where("tutor_faculty", $this->faculty)->paginate(12)->where('pay_status', 'paid')
            ]);
        }
        // return view('livewire.student.student-dashboard')->extends("layouts.students")->section("main-body-section");
    }
}
