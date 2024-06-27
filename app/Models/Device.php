<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $keyType = 'string'; // Specify the key type if it's not an integer
    public $incrementing = false; // Disable auto-increment

    protected $fillable = [
        'id', 'nama_device', 'lokasi', 'status', 'nilai', 'device_type'
    ];
}