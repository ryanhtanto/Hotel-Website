<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
    use HasFactory;
    protected $table = 'hotel_images';
    protected $primaryKey = 'id_image';
    public $timestamps = false;
}
