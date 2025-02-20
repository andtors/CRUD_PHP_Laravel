<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPhp extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'cellphone'];
}
