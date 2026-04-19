<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
     protected $fillable = [
        'first_name',
        'email',
        'subject',
        'message',
    ];


    public static function fetchData($pagination = false, $perPage = 10){

        $query=self::orderBy('id', 'desc');
    
        if ($pagination) {
            return $query->paginate($perPage)->withPath(route('admin.contact-messages-list'));
        }

        return $query->get();

    }

     /**
     * Save contact form data
     */
    public static function saveContact($data)
    {
        return self::create([
            'first_name'    => $data['first_name'],
            'email'   => $data['email'],
            'subject' => $data['subject'],
            'message' => $data['message'],
        ]);
    }

    /**
     * Delete a message by ID
     */
    public static function deleteMessageById($id)
    {
        $message = self::find($id);
        if ($message) {
            $message->delete();
            return true;
        }
        return false;
    }

}
