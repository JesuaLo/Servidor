<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricado extends Model
{
    /** @use HasFactory<\Database\Factories\FabricadoFactory> */
    use HasFactory;
    protected $fillable = ["denominacion", "precio"];

    public function mueble()
    {
        return $this->morphOne(Mueble::class, 'muebleable');
    }

    public function calcular_precio()
    {
        $area = ($this->ancho/1000) * ($this->alto/1000);
        return floor(($this->mueble->precio * $area)*100)/100;
    }
}
