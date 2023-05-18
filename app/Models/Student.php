<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['foto', 'nama', 'npm', 'tempat_tanggal_lahir', 'tahun_masuk', 'tahun_lulus', 'pekerjaan', 'bidang_minat', 'judul_tugas_akhir'];
    public function toSearchableArray()
    {
        return [
            'nama' => $this->nama,
            'npm' => $this->npm,
            'tahun_masuk' => $this->tahun_masuk,
            'tahun_lulus' => $this->tahun_lulus,
            'pekerjaan' => $this->pekerjaan,
            'bidang_minat' => $this->bidang_minat,
        ];
    }
    use HasFactory, Searchable;
}