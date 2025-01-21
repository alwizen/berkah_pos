<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    protected $fillable = [
        'cabang_id',
        'nama',
        'unit_satuan',
        'harga_normal',
        'harga_user',
        'harga_reseller',
        'supplier_id'

    ];

    public function cabang() {
        return $this->belongsTo(Cabang::class);
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }


}
