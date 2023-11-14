<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeadlinePendaftaran extends Model
{
    use HasFactory;
    protected $fillable=['id','deadline_register_event'];
}
