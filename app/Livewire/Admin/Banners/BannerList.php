<?php

namespace App\Livewire\Admin\Banners;

use Livewire\Component;
use App\Models\Banner as BannerModel;
use Illuminate\Support\Facades\Log;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

#[Layout('admin_layouts.app',['page_title' => 'Banners List', 'title' => 'Banner List'])]


class BannerList extends Component
{

   use WithPagination;

   public $showAddBanner = false;
   public $showEditBanner = false;
   public $editBannerId = null;
    

    protected $paginationTheme = 'bootstrap';
    

    #[On('bannerAdded', 'refreshList')]
    #[On('bannerUpdated', 'refreshList')]
    public function refreshList()
    {

        Log::info('refresh list');
        $this->showAddBanner = false;
        $this->showEditBanner = false;
        $this->editBannerId = null;
    }

    public function toggleAddBanner()
    {
        if ($this->showAddBanner || $this->showEditBanner) {
            $this->showAddBanner = false;
            $this->showEditBanner = false;
            $this->editBannerId = null;
        } else {
            $this->showAddBanner = true;
        }
    }

    public function render()
    {
        $banners = BannerModel::fetchData(true);
         return view('livewire.admin.banners.banner-list', [
            'banners' => $banners
        ]);
    }

    // Header text
    public function getHeaderTextProperty()
    {
        if ($this->showAddBanner) return 'Add Banner';
        if ($this->showEditBanner) return 'Edit Banner';
        return 'Banner List';
    }

    // Button text
    public function getButtonTextProperty()
    {
        if ($this->showAddBanner || $this->showEditBanner) return 'Cancel';
        return 'Add Banner';
    }

    public function editBanner($id)
    {
        $this->editBannerId = $id;
        $this->showEditBanner = true;
        $this->showAddBanner = false;
    }

    public function deleteBanner($id)
    {
        if (BannerModel::deleteBannerById($id)) {
            session()->flash('message','Banner Deleted Successfully');
        } else {
            session()->flash('message','Banner Not Found');
        }
    }
}
