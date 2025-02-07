<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    
    protected $table = 'kecamatans';
<<<<<<< HEAD
    protected $fillable = ['kode_kec', 'kode_prov', 'kode_kab_kota', 'nama_kecamatan'];
    protected $primaryKey = 'id'; 
    public $incrementing = true; 
    protected $keyType = 'int';
=======
    protected $primaryKey = 'kode_kec'; // Primary key baru
    protected $fillable = ['kode_kec', 'kode_prov', 'kode_kab_kota', 'nama_kecamatan'];
    public $incrementing = false;
    protected $keyType = 'string'; // Karena kode_kec bertipe string
>>>>>>> origin/master

    public function kabKota()
    {
        return $this->belongsTo(KabKota::class, 'kode_kab_kota', 'kode_kab_kota');
<<<<<<< HEAD
=======
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'kode_prov', 'kode_prov');
    }

    public function kelDesas()
    {
        return $this->hasMany(KelDesa::class, 'kode_kecamatan', 'kode_kec');
    }

    public function getKecamatanByKabupaten($kode_kab_kota)
    {
        $kecamatan = Kecamatan::where('kode_kab_kota', $kode_kab_kota)->get();
        return response()->json($kecamatan);
>>>>>>> origin/master
    }

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class, 'kode_prov', 'kode_prov');
    }

    public function kelDesas()
    {
        return $this->hasMany(KelDesa::class, 'kode_kec', 'kode_kec');
    }

    public function getKecamatanByKabupaten($kode_kab_kota)
{
    $kecamatan = Kecamatan::where('kode_kab_kota', $kode_kab_kota)->get();
    return response()->json($kecamatan);
}

}
