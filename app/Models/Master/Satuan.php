<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Satuan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'satuan';
    protected $fillable = [
        'uuid',
        'satuan_isi',
        'satuan_jual',
    ];
}
