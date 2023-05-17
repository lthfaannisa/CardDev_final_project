<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    protected $table = 'bantuan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'judul', 'bantuan'];
    use HasFactory;
}