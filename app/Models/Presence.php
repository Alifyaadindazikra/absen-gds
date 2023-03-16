<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Presence extends Model
{
    use HasFactory;
    protected $table = 'presences';
    protected $fillable = [
        'nis',
        'nama',
        'rombel',
        'divisi',
        'jam',
        'ket',
    ];

}
