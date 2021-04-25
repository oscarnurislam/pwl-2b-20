<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Mahasiswa extends Model //Definisi Model
{
    protected $table="mahasiswa"; // Eloquentakan membuat model mahasiswa 
    //menyimpan record di tabel mahasiswas
    public$timestamps=false;
    protected $primaryKey = 'Nim'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'Nim',
        'Nama',
        
        'kelas_id',
        'Jurusan',
        'No_Handphone',
        'Email',
        'Tanggal_lahir',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
};