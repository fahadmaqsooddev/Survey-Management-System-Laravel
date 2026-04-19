<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
class CostAndCharge extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'banner_image',
        'banner_title'
    ];

    public static function fetchData(){
        return self::select('id','title','description','image','banner_image','banner_title')->first();
    }

    public function getImageAttribute($value)
    {  
        return asset('storage/assets/admin/uploads/cost-and-charges-images/' . $value);
    }

    public function getBannerImageAttribute($value)
    {
        return asset('storage/assets/admin/uploads/cost-and-charges-images/' . $value);
    }

    private static function uploadImage($file, $oldFile = null)
    {

        $path = 'assets/admin/uploads/cost-and-charges-images/';
        
        if ($oldFile) {
            $oldPath = public_path('storage/' . $path . $oldFile);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }
        }

        $imageName = time() . '.' . $file->getClientOriginalExtension();

        $file->storeAs($path, $imageName, 'public');

        return $imageName;
    }

    public static function updateData($id, $title, $banner_title, $description, $image = null, $banner_image = null)
    {
        $data = self::find($id);

        if (!$data) {
            return false;
        }

      
        if ($image) {
            $data->image = self::uploadImage($image, $data->image);
        }

        
        if ($banner_image) {
            $data->banner_image = self::uploadImage($banner_image, $data->banner_image);
        }

        $data->title = $title;
        $data->banner_title = $banner_title;
        $data->description = $description;

        $data->save();

        return $data;
    }
}
