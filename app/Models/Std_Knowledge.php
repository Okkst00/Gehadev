<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Std_Knowledge extends Model
{
    use HasFactory;

    public $table = "std_knowledges";

    protected $fillable = [
        'title', 'content', 'image'
    ];
}
