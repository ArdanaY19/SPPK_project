<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class h_kriteria extends Model
{
    use HasFactory;
    protected $table = 'h_kriterias';
    protected $primariKey = "id";
    protected $fillable = ["id", "kriteria_id", "nama_himpunan", "nilai", "keterangan"];

    public function kriteria()
    {
        return $this->belongsTo(kriteria::class);
    }
}
