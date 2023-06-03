<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoDestination extends Model
{
    use HasFactory;
    protected $fillable = ['photo_path', 'destination_id'];
}
