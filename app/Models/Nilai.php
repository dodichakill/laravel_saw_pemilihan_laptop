<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'tb_nilai';
    public $incrementing = false;
    protected $fillable = ["harga", "id_alt", "skor_prosesor", "ram", "penyimpanan", "ukuran_layar", "daya_baterai"];

    public function alternatif(): BelongsTo
    {
        return $this->belongsTo(Alternatif::class, 'id_alt');
    }
}
