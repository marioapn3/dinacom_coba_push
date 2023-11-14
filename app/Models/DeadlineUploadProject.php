<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeadlineUploadProject extends Model
{
    use HasFactory;
    protected $fillable=['id','date_limit_upload_project'];
}
