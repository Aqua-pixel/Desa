<?php
// app/Models/Sejarah.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    use HasFactory;

    protected $fillable = ['judul','tanggal', 'foto', 'deskripsi'];
}

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Sejarah extends Model
// {
//     //
// }
