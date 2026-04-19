<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoiseSurveyReportBanner extends Model
{
    public static function fetchData(){
        return self::select()->first('id','title','image');
    }

    public function getImageAttribute($value)
    {
        return asset('storage/assets/admin/uploads/noise-survey-report-banner/'.$value);
    }

    public static function updateData($id,$heading,$image){

        $data = self::find($id);

        if (!$data) {
            return null;
        }

        if($image){
            $imageName=time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('assets/admin/uploads/noise-survey-report-banner',$imageName,'public');
            $data->image=$imageName;
        }

        $data->title=$heading;
        $data->save();
        return $data;

    }
}
