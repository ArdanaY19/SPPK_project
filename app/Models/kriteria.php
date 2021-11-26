<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriterias';
    protected $primariKey = "id";
    protected $fillable = ["id", "nama_kriteria", "atribut"];

    public function h_kriteria()
    {
        return $this->hasMany(h_kriteria::class);
    }
}
