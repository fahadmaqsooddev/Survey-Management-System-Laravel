<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;


class NoiseSurveyReport extends Model
{
    protected $fillable = [
        'heading','description','image'
    ];

    public static function fetchData($pagination = false, $perPage = 10){

        $query=self::select('id','heading','image','description')->orderBy('id', 'desc');
         if ($pagination) {
            return $query->paginate($perPage)->withPath(route('admin.noise-at-work'));
        }

        return $query->get();
    }

    public function getImageAttribute($value)
    {
        return asset('storage/assets/admin/uploads/noise-survey-report/'.$value);
    }

    public static function createData($heading, $description, TemporaryUploadedFile $image)
    {
       
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('assets/admin/uploads/noise-survey-report', $imageName, 'public');

        return self::create([
            'heading' => $heading,
            'description' => $description,
            'image' => $imageName,
        ]);
    }

    public static function deleteNoiseSurveyReportById($id)
    {
        $noise_survey_report = self::find($id);

        if (!$noise_survey_report) {
            return false;
        }

        $imagePath = public_path('storage/assets/admin/uploads/noise-at-work/' . $noise_survey_report->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $noise_survey_report->delete();

        return true;
    }


    public static function updateNoiseSurveyReportById($id, $heading, $description, $image = null)
    {
        $noise_survey_report = self::find($id);

        if (!$noise_survey_report) {
            return null;
        }

        if ($image) {
            $oldPath = public_path('storage/assets/admin/uploads/noise-survey-report/' . $noise_survey_report->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('assets/admin/uploads/noise-survey-report', $imageName, 'public');
            $noise_survey_report->image = $imageName;
        }

        $noise_survey_report->heading = $heading;
        $noise_survey_report->description = $description;

        $noise_survey_report->save();

        return $noise_survey_report;
    }
}
