<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Facades\File;


class Testimonial extends Model
{


    protected $fillable = [
        'name',
        'image',
        'message',
        'rating'
    ];

    public static function fetchData($pagination = false, $perPage = 10){

        $query=self::select('id','name','image','message','rating')->orderBy('id','desc');
        if ($pagination) {
            return $query->paginate($perPage)->withPath(route('admin.testimonials'));
        }
        return $query->get();
    }

    public function getImageAttribute($value)
    {
        return asset('storage/assets/admin/uploads/testimonials/'.$value);
    }

    public static function createData($name,TemporaryUploadedFile $image,$message,$rating)
    {
       
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('assets/admin/uploads/testimonials', $imageName, 'public');

        return self::create([
            'name' => $name,
            'image' => $imageName,
            'message' => $message,
            'rating' => $rating
        ]);
    }

    public static function deleteTestimonialById($id)
    {
        $testimonial = self::find($id);

        if (!$testimonial) {
            return false;
        }

        $imagePath = public_path('storage/assets/admin/uploads/testimonials/' . $testimonial->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $testimonial->delete();

        return true;
    }


    public static function updateTestimonialById($id, $name, $image = null,$message,$rating)
    {
        $testimonial = self::find($id);

        if (!$testimonial) {
            return null;
        }

        if ($image) {
            $oldPath = public_path('storage/assets/admin/uploads/testimonials/' . $testimonial->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('assets/admin/uploads/banners', $imageName, 'public');
            $testimonial->image = $imageName;
        }

        $testimonial->name = $name;
        $testimonial->message = $message;
        $testimonial->rating = $rating;

        $testimonial->save();

        return $testimonial;
    }
}
