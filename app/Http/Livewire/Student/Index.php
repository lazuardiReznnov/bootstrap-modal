<?php

namespace App\Http\Livewire\Student;

use App\Models\City;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $name, $email, $course, $student_id, $city_id;
    public $cities;
    // public $students;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected function rules()
    {
        return [
            'city_id' => 'required',
            'name' => 'required|min:6',
            'email' => ['required', 'email'],
            'course' => ['required'],
        ];
    }

    public function mount()
    {
        $this->cities = City::All();
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudent()
    {
        $validatedData = $this->validate();

        Student::create($validatedData);
        session()->flash('success', 'Data Has Been Added');
        $this->resetInput();

        $this->dispatchBrowserEvent('close-modal');
    }

    public function updateStudent()
    {
        $validatedData = $this->validate();
        Student::where('id', $this->student_id)->update([
            'city_id' => $validatedData['city_id'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'course' => $validatedData['course'],
        ]);

        session()->flash('success', 'Data Has Been Updated');
        $this->resetInput();

        $this->dispatchBrowserEvent('close-modal');
    }

    public function editStudent(int $student_id)
    {
        $student = Student::find($student_id);
        if ($student) {
            $this->city_id = $student->city_id;
            $this->student_id = $student->id;
            $this->name = $student->name;
            $this->email = $student->email;
            $this->course = $student->course;
        } else {
            return redirect()->to('/student');
        }
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->course = '';
        $this->city_id = '';
    }

    public function render()
    {
        $students = Student::with('city')
            ->latest()
            ->paginate(10);
        return view('livewire.student.index', ['students' => $students]);
    }
}
