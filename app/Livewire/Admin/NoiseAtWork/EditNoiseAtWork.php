<?php

namespace App\Livewire\Admin\NoiseAtWork;

use Livewire\Component;
use App\Models\NoiseAtWork;
use Livewire\WithFileUploads;

class EditNoiseAtWork extends Component
{

    use WithFileUploads;
    public $noise_at_work_id;
    public $heading;
    public $description;
    public $image;
    public $oldImage;

    protected $rules = [
        'heading' => 'required',
        'description' => 'required',
        'image' => 'nullable|image'
    ];

    public function mount($id)
    {
        $noise_at_work = NoiseAtWork::findOrFail($id);
        $this->noise_at_work_id = $noise_at_work->id;
        $this->heading = $noise_at_work->heading;
        $this->description = $noise_at_work->description;
        $this->oldImage = $noise_at_work->image;
    }


    public function updateNoiseAtWork()
    {
        $this->validate();

        $banner = NoiseAtWork::updateNoiseAtWorkById(
            $this->noise_at_work_id,
            $this->heading,
            $this->description,
            $this->image ?? null
        );

        if ($banner) {
            session()->flash('message', 'Noise At Work Updated Successfully');
            $this->dispatch('noiseatworkUpdated');
        } else {
            session()->flash('message', 'Noise At Work Not Found');
        }
    }

    public function render()
    {
        return view('livewire.admin.noise-at-work.edit-noise-at-work');
    }
}
