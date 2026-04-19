<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{

    public function getImageAttribute($value)
    {
        return asset('storage/assets/admin/uploads/logo/'.$value);
    }

    public static function updateData($id,$image){

        $data = self::find($id);

        if (!$data) {
            return null;
        }

        if($image){
            $imageName=time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('assets/admin/uploads/logo',$imageName,'public');
            $data->image=$imageName;
            $data->save();
        }
        return $data;
        
    }
    
    public static function fetchData(){
        return self::select()->first('id','image');
    }
}
