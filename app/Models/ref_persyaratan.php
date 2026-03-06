<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ref_persyaratan extends Model
{
    protected $table = 'ref_persyaratan';
    protected $primaryKey = 'id_persyaratan';
    protected $fillable = [
        'nama_persyaratan',
        'keterangan',
    ];

}
