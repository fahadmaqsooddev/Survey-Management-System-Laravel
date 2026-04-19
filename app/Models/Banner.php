<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Banner extends Model
{

    protected $fillable = [
        'heading','description','image'
    ];

    public static function fetchData($pagination = false, $perPage = 10)
    {
        $query = self::select('id','heading','description','image')
        ->orderBy('id', 'desc');
        
        if ($pagination) {
            return $query->paginate($perPage)->withPath(route('admin.banners'));
        }

        return $query->get();
    }

    public function getImageAttribute($value)
    {
        return asset('storage/assets/admin/uploads/banners/'.$value);
    }

   
    public static function createData($heading, $description, TemporaryUploadedFile $image)
    {
       
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('assets/admin/uploads/banners', $imageName, 'public');

        return self::create([
            'heading' => $heading,
            'description' => $description,
            'image' => $imageName,
        ]);
    }

    public static function deleteBannerById($id)
    {
        $banner = self::find($id);

        if (!$banner) {
            return false;
        }

        $imagePath = public_path('storage/assets/admin/uploads/banners/' . $banner->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $banner->delete();

        return true;
    }


    public static function updateBannerById($id, $heading, $description, $image = null)
    {
        $banner = self::find($id);

        if (!$banner) {
            return null;
        }

        if ($image) {
            $oldPath = public_path('storage/assets/admin/uploads/banners/' . $banner->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('assets/admin/uploads/banners', $imageName, 'public');
            $banner->image = $imageName;
        }

        $banner->heading = $heading;
        $banner->description = $description;

        $banner->save();

        return $banner;
    }


}
