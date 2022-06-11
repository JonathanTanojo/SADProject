<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkbaru extends Model
{
    use HasFactory;
    protected $table = "BARANG";

    public $primaryKey = "BARANG_ID";

    public $incrementing = false;

    public $timestamps = false;
}
