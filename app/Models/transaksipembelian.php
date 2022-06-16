<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksipembelian extends Model
{
    use HasFactory;
    protected $table = "TRANSAKSI_PEMBELIAN";
 
    public $primaryKey = "BELI_ID";

    public $incrementing = false;

    public $timestamps = false;

}
