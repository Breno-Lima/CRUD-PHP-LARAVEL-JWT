<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'nome_social', 'data_nascimento', 'cpf', 'imagem'];

    public function cpf()
    {
        return $this->hasMany(CPF::class, 'employee_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $query) {
            $query->orderBy('nome');
        });
    }
}
