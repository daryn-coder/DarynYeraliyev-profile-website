<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'image'];
    protected $table = "forms";
    use HasFactory;
}
