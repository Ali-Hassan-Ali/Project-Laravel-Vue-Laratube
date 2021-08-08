<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Str;

class Model extends BaseModel
{
    use HasFactory;

    protected $guarded = [];

    public $incrementing = false;

    protected static function boot ()
    {
        parent::boot();

        static::creating(function($model) {
            // $model->id = str::uuid();
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });

    }//end of function boot
    
}//end of class model
