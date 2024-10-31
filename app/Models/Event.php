<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_acara',
        'gambar',
        'detail',
        'deskripsi',
        'lokasi',
        'pilihan_tiket'
    ];

    public function ticketOptions()
    {
        return $this->hasMany(TicketOption::class);
    }
}
