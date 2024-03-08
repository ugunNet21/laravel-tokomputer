<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'laptop_id',
        'tanggal_masuk',
        'deskripsi_masalah',
        'status',
        '_token',
    ];
    public function laptop()
    {
        return $this->belongsTo(Laptop::class);
    }

    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class);
    }
}
