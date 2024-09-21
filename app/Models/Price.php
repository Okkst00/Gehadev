<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    public $table = "prices";

    protected $fillable = [
        'id-harga', 'harga_det'
    ];
}
