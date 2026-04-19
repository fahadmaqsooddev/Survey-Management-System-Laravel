<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{
    protected $fillable=['email'];

    public static function fetchData($pagination = false, $perPage = 10){

        $query=self::orderBy('id', 'desc');
    
        if ($pagination) {
            return $query->paginate($perPage)->withPath(route('admin.email-subscribers-list'));
        }

        return $query->get();

    }
    
}
