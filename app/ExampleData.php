<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExampleData extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    public function tasks(){
        return $this -> hasMany(Tasks::class);
    }
    
}
