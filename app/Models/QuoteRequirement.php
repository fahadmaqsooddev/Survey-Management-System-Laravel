<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteRequirement extends Model
{

    protected $fillable=['title','description'];

    public static function fetchData($pagination = false, $perPage = 10){

        $query=self::select('id','title','description')->orderBy('id','desc');

        if ($pagination) {
            return $query->paginate($perPage)->withPath(route('admin.banners'));
        }

        return $query->get();

    }

    private static function findOrReturn($id)
    {
        return self::find($id) ?: null;
    }

    public static function fetchDataById($id){

        return self::findOrFail($id);

    }


    public static function createData($title,$description)
    {
    

        return self::create([
            'title' => $title,
            'description' => $description
        ]);
    }

    public static function deleteQuoteRequirementById($id)
    {
        $requirement = self::findOrFail($id);

        $requirement->delete();

        return true;
    }

      


    public static function updateQuoteRequirementById($id,$title,$description)
    {

        $requirement = self::findOrFail($id);

        $requirement->title=$title;
        $requirement->description=$description;

        $requirement->save();

        return $requirement;

    }

}
