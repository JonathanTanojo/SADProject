<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\SUPPLIERALL;

class BARANG extends Model
{
    use HasFactory;
    protected $table = "BARANG";

    public $primaryKey = "BARANG_ID";

    public $incrementing = false;

    public $timestamps = false;

    public function barang()
    {
        return $this->hasMany(SUPPLIERALL::class,'SUPPLIER_ID','SUPLLIER_ID');
    }

}
