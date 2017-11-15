<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

class Requestion extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }
}
