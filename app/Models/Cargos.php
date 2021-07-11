<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Funcionarios;

class Cargos extends Model
{
    use HasFactory;

    protected $table="cargos";
    protected $fillable=['nome', 'descricao'];

    public function funcionarios_cargos() {
        return $this->hasMany(Funcionarios::class);
    }
}
