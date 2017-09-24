<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Table Name
    protected $table = 'contacts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        //$search = $request->input('search');
        
       // if($request->has('name'){

       //     return $query->where('name', 'like', '%' . $search . '%');
       // })
        
        return $this->belongsTo('App\User');
       
    }
}
