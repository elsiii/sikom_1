<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku_Relasi extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //MENGATUR HANYA COLOMN ID YANG TIDAK BOLEH DI ISI//

    //RELASI DI MODEL BUKU//

    public function buku() //Relasi Ulasan Buku//
    {
        return $this->belongsTo(Buku::class);
    }
    //RELASI DARI MODEL BUKU KE KATEGORI//
    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class);
    }
    
}
