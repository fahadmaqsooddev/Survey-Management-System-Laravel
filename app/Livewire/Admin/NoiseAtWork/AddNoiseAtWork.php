<?php

namespace App\Livewire\Admin\NoiseAtWork;

use Livewire\Component;
use App\Models\NoiseAtWork;
use Livewire\WithFileUploads;


class AddNoiseAtWork extends Component
{

    use WithFileUploads;

    public $heading;
    public $description;
    public $image;

    protected $rules = [
        'heading' => 'required',
        'description' => 'required',
        'image' => 'required|image|max:2048'
    ];

    public function addNoiseAtWork()
    {
        $this->validate();

        NoiseAtWork::createData($this->heading, $this->description, $this->image);

        session()->flash('message', 'Noise At Work Added Successfully');

        $this->reset(['heading','description','image']);
        
        $this->dispatch('noiseatworkAdded');
    }

    public function render()
    {
        return view('livewire.admin.noise-at-work.add-noise-at-work');
    }


}
