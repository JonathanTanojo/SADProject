<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\BARANG;

class SUPPLIERALL extends Model
{
    use HasFactory;
    protected $table = "SUPPLIER";


    public $primaryKey = "SUPPLIER_ID";

    public $incrementing = false;

    public $timestamps = false;

    public function supplier()
    {
        return $this->belongsTo(BARANG::class,'SUPPLIER_ID','SUPLLIER_ID');
    }
}
