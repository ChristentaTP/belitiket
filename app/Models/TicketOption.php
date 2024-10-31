<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'tipe_tiket',
        'harga',
        'kuota',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
