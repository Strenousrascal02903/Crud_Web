<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students 
{
    private static $Students=[
        [
            "id" => 1,
            "nis" => "12345",
            "nama" => "Aan Kurniawan",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Merdeka No. 123"
        ],
        [
            "id" => 2,
            "nis" => "67890",
            "nama" => "Aaron Ikhwan Saputra",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Jendral Sudirman No. 45"
        ],
        [
            "id" => 3,
            
            "nis" => "54321",
            "nama" => "Muhammad Zikrinayah",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Pahlawan No. 67"
        ],
        [
            "id" => 4,
            "nis" => "98765",
            "nama" => "Mirza Zulfadhli Amin",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Gajah Mada No. 89"
        ],
        [
            "id" => 5,
            "nis" => "24680",
            "nama" => "Danish Ardiyanta Risqy Pramuditya",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jl. Diponegoro No. 12"
        ],
       
    ];

public static function all(){
    return collect(self::$Students);
}

}
