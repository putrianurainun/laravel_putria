<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table="item";
    protected $primaryKey="id";
    protected $fillable=[
        'nama_item', 'unit', 'stok', 'harga_satuan', 'barang'
    ];
}
