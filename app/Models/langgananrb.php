<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class langgananrb extends Model
{
    use HasFactory;

    protected $table= 'pelanggan';

    protected $guarded = ['id'];
}
