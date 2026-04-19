<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class AboutUs extends Model
{
    public static function fetchData(){
        
        $data=self::select('id','heading','description','image')->first();
        if (!$data) {
            // Table empty hai, null return ya default values return kar sakte ho
            return null;
        }
        return $data;
    }

    public function getImageAttribute($value)
    {
        return asset('storage/assets/admin/uploads/about-us/'.$value);
    }

    public static function updateData($id, $heading, $description, $image = null)
    {
        
        $aboutus = self::findOrFail($id);

        if ($image) {
            $oldPath = public_path('storage/assets/admin/uploads/about-us/' . $aboutus->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('assets/admin/uploads/about-us', $imageName, 'public');
            $aboutus->image = $imageName;
        }

        $aboutus->heading = $heading;
        $aboutus->description = $description;

        $aboutus->save();

        return $aboutus;
    }
}
