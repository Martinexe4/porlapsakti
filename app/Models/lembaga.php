<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'lembagas';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'id_prov',
        'id_kab_kota',
        'id_kecamatan',
        'id_kelurahan',
        'nama_lembaga',
        'nama_perpustakaan',
        'npp',
        'alamat',
        'rt',
        'rw',
        'email_lembaga',
        'email_perpus',
        'status_aktif',
        'created_by',
        'updated_by',
    ];

    // Relasi ke tabel provinsi (One to Many)
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'id_prov');
    }

    // Relasi ke tabel kabupaten/kota (One to Many)
    public function kabupaten()
    {
        return $this->belongsTo(kab_kota::class, 'id_kab_kota');
    }

    // Relasi ke tabel kecamatan (One to Many)
    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class, 'id_kecamatan');
    }

    // Relasi ke tabel kelurahan (One to Many)
    public function kelurahan()
    {
        return $this->belongsTo(kel_desa::class, 'id_kelurahan');
    }
}
