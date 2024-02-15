<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiPribadi extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //MENGATUR HANYA COLOMN ID YANG TIDAK BOLEH DI ISI//

    //RELASI DI MODEL USER KE KOLEKSI PRIBADI//

    public function user()  
    {
        return $this->belongsTo(User::class);
    }
    //RELASI DARI MODEL BUKU KE KOLEKSI BUKU//
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
    
}
