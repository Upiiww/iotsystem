<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'logs';
    protected $primaryKey = 'log_id';
    public $incrementing = false; // Jika log_id tidak auto-increment
    protected $keyType = 'string'; // Sesuaikan jika log_id adalah string
    protected $fillable = [
        'log_id', 'device_id', 'nilai', 'status', 'timestamp'
    ];
}
