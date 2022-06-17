<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    use HasFactory;

    protected $table = "TRANSAKSI_JUAL";

    protected $table2 = "DETAIL_TRANS_JUAL";

    public $primaryKey = "JUAL_ID";

    public $incrementing = false;

    public $timestamps = false;
}
