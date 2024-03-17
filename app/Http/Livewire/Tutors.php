<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tutors as ModelsTutors;
use App\Models\Faculties;
use App\Models\TutorsReviews;

class Tutors extends Component
{
    public $faculties, $faculty, $tutor_reviews, $star_rating, $tutor, $tutor_id;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // classes
    // RUN BEFORE RENDER
    public function mount()
    {
        $this->tutor = ModelsTutors::where('pay_status', 'paid')->with(['reviews', 'classes'])->get();
    }


    // RENDER THE PAGE
    public function render()
    {

        $this->faculties = Faculties::all();

        if ($this->faculty == "") {
            return view('livewire.tutors', [
                "tutors" => ModelsTutors::where('pay_status', 'paid')->paginate(12)
            ]);
        } else {
            return view('livewire.tutors', [
                "tutors" => ModelsTutors::where('pay_status', 'paid')->where("tutor_faculty", $this->faculty)->paginate(12)
            ]);
        }
    }


    public function getAverageReviews($reviews)
    {
        if ($reviews->count() > 0) {
            $totalReviews = $reviews->count('rating');
            // $average = $totalReviews / $reviews->count();
            // return round($average, 2);
            return $totalReviews;
        }

        return 0;
    }
}
