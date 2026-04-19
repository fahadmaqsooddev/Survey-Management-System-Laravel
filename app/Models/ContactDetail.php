<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;


class ContactDetail extends Model
{

    protected $fillable = [
        'heading',
        'phone',
        'email',
        'description',
        'banner_image',
        'quote_request_image',
        'monitoring_setup_image'
    ];
    
    public static function fetchData(){
        return self::first();
    }

    private function getImageUrl($value)
    {
        if (!$value) {
            return null;
        }

        return asset('storage/assets/admin/uploads/contact-details/' . $value);
    }

    public function getBannerImageAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getQuoteRequestImageAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getMonitoringSetupImageAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    private static function uploadImage($file, $oldFile = null)
    {
        $path = 'assets/admin/uploads/contact-details/';

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

    public static function updateData($id, $heading, $phone, $email, $description, $banner_image = null, $quote_request_image = null, $monitoring_setup_image = null)
    {

    

        $contact_details = self::find($id);

        if (!$contact_details) {
            return null;
        }

        if ($banner_image) {
            $contact_details->banner_image = self::uploadImage($banner_image, $contact_details->banner_image);
        }

        if ($quote_request_image) {
            $contact_details->quote_request_image = self::uploadImage($quote_request_image, $contact_details->quote_request_image);
        }

        if ($monitoring_setup_image) {
            $contact_details->monitoring_setup_image = self::uploadImage($monitoring_setup_image, $contact_details->monitoring_setup_image);
        }

        $contact_details->heading = $heading;
        $contact_details->phone = $phone;
        $contact_details->email = $email;
        $contact_details->description = $description;

        $contact_details->save();

        return $contact_details;
    }
}

