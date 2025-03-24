<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefabricado extends Model
{
    /** @use HasFactory<\Database\Factories\PrefabricadoFactory> */
    use HasFactory;

    protected $fillable = ["ancho", "alto"];

    public function mueble()
    {
        return $this->morphOne(Mueble::class, "muebleable")->first();
    }

    public function calcular_precio()
    {
        return $this->mueble->precio;
    }
}
