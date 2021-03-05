<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class person extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'person';
    protected $fillable=['firstname','lastname','email','phone'];
    

    
}
