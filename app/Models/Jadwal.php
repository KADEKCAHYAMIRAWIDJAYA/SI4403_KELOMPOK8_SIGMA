<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';

    protected $fillable = [
        'id_dokter',
        'hari',
        'darijam',
        'sampaijam',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'darijam' => 'date:hh:mm',
        'sampaijam' => 'date:hh:mm'
    ];

    public function getJamAttribute($date)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('hh:mm');
    }
}
