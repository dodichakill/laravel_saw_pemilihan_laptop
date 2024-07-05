<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'tb_alternatif';
    protected $primaryKey = 'id_alternatif';
    public $incrementing = false;

    public function nilai(): HasOne
    {
        return $this->hasOne(Nilai::class);
    }
}
