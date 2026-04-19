<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class NoiseAtWork extends Model
{

    protected $fillable = [
        'heading','description','image'
    ];

    protected $table='noise_at_work';

    public static function fetchData($pagination = false, $perPage = 10){

        $query=self::select('id','heading','image','description')->orderBy('id', 'desc');

        if ($pagination) {
            return $query->paginate($perPage)->withPath(route('admin.noise-at-work'));
        }

        return $query->get();
    }

    public function getImageAttribute($value)
    {
        return asset('storage/assets/admin/uploads/noise-at-work/'.$value);
    }

    public static function createData($heading, $description, TemporaryUploadedFile $image)
    {
       
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('assets/admin/uploads/noise-at-work', $imageName, 'public');

        return self::create([
            'heading' => $heading,
            'description' => $description,
            'image' => $imageName,
        ]);
    }

    public static function deleteNoiseAtWorkById($id)
    {
        $noise_at_work = self::find($id);

        if (!$noise_at_work) {
            return false;
        }

        $imagePath = public_path('storage/assets/admin/uploads/noise-at-work/' . $noise_at_work->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $noise_at_work->delete();

        return true;
    }


    public static function updateNoiseAtWorkById($id, $heading, $description, $image = null)
    {
        $noise_at_work = self::find($id);

        if (!$noise_at_work) {
            return null;
        }

        if ($image) {
            $oldPath = public_path('storage/assets/admin/uploads/noise-at-work/' . $noise_at_work->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('assets/admin/uploads/noise-at-work', $imageName, 'public');
            $noise_at_work->image = $imageName;
        }

        $noise_at_work->heading = $heading;
        $noise_at_work->description = $description;

        $noise_at_work->save();

        return $noise_at_work;
    }
}
