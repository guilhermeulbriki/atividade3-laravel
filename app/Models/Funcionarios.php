<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cargos;

class Funcionarios extends Model
{
    use HasFactory;

    protected $table="funcionarios";
    protected $fillable=['nome', 'cpf', 'email', 'salario_base', 'ano_admissao', 'cargos_id'];

    public function cargos() {
        return $this->belongsTo(Cargos::class);
    }
}
