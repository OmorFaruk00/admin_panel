<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApiKey extends Model
{
    /** @use HasFactory<\Database\Factories\ApiKeyFactory> */
    use HasFactory;
    use SoftDeletes;
}
