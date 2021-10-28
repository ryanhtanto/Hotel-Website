<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    protected $table = 'Consoles';
    protected $primaryKey = 'id_console';
    protected $fillable = ['id_category', 'console_name', 'harga', 'deskripsi', 'images'];
}
