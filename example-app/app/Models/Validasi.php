<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validasi extends Model
{
    protected $table = 'validasi';
    protected $fillable = ['user', 'product', 'yang_dibeli', 'foto', 'harga', 'admin_id'];
}
