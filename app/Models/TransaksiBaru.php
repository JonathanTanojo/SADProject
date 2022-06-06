<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiBaru extends Model
{
    use HasFactory;

    public function all()
    {
        return self::$data;
    }
}
