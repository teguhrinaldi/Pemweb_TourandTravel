<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dengan konvensi
    protected $table = 'bookings';

    // Menentukan kolom yang bisa diisi
    protected $fillable = [
        'user_id', 'package_id', 'status',
    ];

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisikan relasi dengan model Package
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
