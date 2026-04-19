<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
class Service extends Model
{

    protected $fillable = [
        'heading','description','image'
    ];

    public static function fetchData($pagination = false, $perPage = 10){
        
       $query=self::select('id','heading','description','image')->orderBy('id','desc');

        if ($pagination) {
            return $query->paginate($perPage)->withPath(route('admin.services'));
        }

        return $query->get();

    }

    public function getImageAttribute($value)
    {
        return asset('storage/assets/admin/uploads/services/'.$value);
    }


    public static function createData($heading, $description, TemporaryUploadedFile $image)
    {
       
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('assets/admin/uploads/services', $imageName, 'public');

        return self::create([
            'heading' => $heading,
            'description' => $description,
            'image' => $imageName,
        ]);
    }

    public static function deleteServiceById($id)
    {
        $service = self::find($id);

        if (!$service) {
            return false;
        }

        $imagePath = public_path('storage/assets/admin/uploads/services/' . $service->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $service->delete();

        return true;
    }


    public static function updateServiceById($id, $heading, $description, $image = null)
    {
        $service = self::find($id);

        if (!$service) {
            return null;
        }

        if ($image) {
            $oldPath = public_path('storage/assets/admin/uploads/services/' . $service->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('assets/admin/uploads/services', $imageName, 'public');
            $service->image = $imageName;
        }

        $service->heading = $heading;
        $service->description = $description;

        $service->save();

        return $service;
    }
}
