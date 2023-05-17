<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Lowongan extends Model
{
    protected $table = 'lowongan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_instansi', 'foto_instansi', 'posisi', 'website_instansi', 'email_instansi', 'lokasi_instansi', 'bidang_minat', 'persyaratan'];
    public function toSearchableArray()
    {
        return [
            'nama_instansi' => $this->nama_instansi,
            'posisi' => $this->posisi,
            'website_instansi' => $this->website_instansi,
            'email_instansi' => $this->email_instansi,
            'lokasi_instansi' => $this->loksi_instansi,
            'bidang_minat' => $this->bidang_minat,
            'persyaratan' => $this->persyaratan,
        ];
    }
    use HasFactory, Searchable;
}