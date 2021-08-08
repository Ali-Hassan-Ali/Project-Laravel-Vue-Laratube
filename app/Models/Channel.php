<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\addFromMediaRequest;

class Channel extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(Channel::class,'user_id');
    }//end of  hasone channel

}//end of models
