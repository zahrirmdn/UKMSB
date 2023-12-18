<?php

// app/Models/Event.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['nama_event', 'tgl_event', 'gambar', 'harga'];
}
