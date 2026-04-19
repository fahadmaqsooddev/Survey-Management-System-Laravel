<?php

namespace App\Livewire\Admin\Logo;

use Livewire\Component;
use App\Models\Logo as LogoModel;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

#[Layout('admin_layouts.app',['page_title' => 'Logo', 'title' => 'Logo'])]

class Logo extends Component
{

    use WithFileUploads;

    public $id,$image,$oldImage;

    protected $rules = [
        'image' => 'required|image|max:2048'
    ];

    public function mount()
    {
        $data = LogoModel::fetchData();
        $this->id=$data->id;
        $this->oldImage = $data->image;
    }

    public function render()
    {
        return view('livewire.admin.logo.logo');
    }

    public function updateLogo(){

        $this->validate();

        $data=LogoModel::updateData($this->id,$this->image);  

        if ($data) {
            session()->flash('message', 'Logo Updated Successfully');
        } else {
            session()->flash('error', 'Logo Not Updated Successfully');
        }

    }
}
