<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory; 
    protected $guarded=['id'];
    public function siswa(){
        return $this->hasOne(Siswa::class   ,'nis','id_siswa');
    }
}
