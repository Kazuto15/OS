<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordemServico extends Model
{
    protected $fillable = ['nome','cpf','numero','data','modelo','marca','defeito'];
}
