<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_instansi', 'foto_instansi', 'posisi', 'website_instansi', 'email_instansi', 'lokasi_instansi', 'bidang_minat', 'persyaratan'];
    use HasFactory;
}