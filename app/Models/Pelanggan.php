<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table      = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';
    protected $fillable   = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];

    public function index()
    {
        $pelanggan = Pelanggan::all(); // Mengambil data dari tabel pelanggan
        return view('dashboard', compact('pelanggan'));
    }
}
