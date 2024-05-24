<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cpf extends Model
{
    use HasFactory;
    protected $fillable = ['string', 'employee_id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
