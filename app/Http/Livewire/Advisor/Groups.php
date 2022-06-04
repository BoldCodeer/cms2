<?php

namespace App\Http\Livewire\Advisor;

use Livewire\Component;
use App\Models\Group;
use Livewire\WithPagination;

class Groups extends Component
{
    use WithPagination;

    public $name, $section, $year, $course, $group_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        //$searchTerm = '%'.$this->searchTerm . '%';
        //$groups = Group::where('name', 'LIKE', $searchTerm)->get();
        $this->groups = Group::all();
        return view('livewire.advisor.groups',[
            'groups' => Group::paginate(2),
        ]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->section = '';
        $this->year = '';
        $this->course = '';
        $this->group_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'section' => 'required',
            'year' => 'required',
            'course' => 'required',
        ]);

        Group::updateOrCreate(['id' => $this->group_id], [
            'name' => $this->name,
            'section' => $this->section,
            'year' => $this->year,
            'course' => $this->course
        ]);

        session()->flash('message',
            $this->group_id ? 'Group Updated Successfully.' : 'Group Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $this->group_id = $id;
        $this->name = $group->name;
        $this->section = $group->section;
        $this->year = $group->year;
        $this->course = $group->course;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Group::find($id)->delete();
        session()->flash('message', 'Group Deleted Successfully.');
    }
}
