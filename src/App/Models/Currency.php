<?php
namespace App\Models;

use App\Models\Model;

class Currency extends Model
{
    protected $fillable = ['code', 'code_char', 'name', 'rate'];
}