<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstracurriculer 
{
    private static $ekstracurriculers=[
        [
            "id" => 1,
            "nama" => "Rohis",
            "nama_pembina" => "Pak Ihsan",
            "deskripsi" => "Kegiatan ekstrakurikuler yang mengajarkan kegiatan keagamaan, seperti kajian Islam, tadarus, dan dakwah.",
        ],       
        [
            "id" => 2,
            "nama" => "Voli",
            "nama_pembina" => "Pak Imam",
            "deskripsi" => "Kegiatan ekstrakurikuler yang mengajarkan permainan voli, seperti servis, passing, dan smash.",
        ],
        [
            "id" => 3,
            "nama" => "Basket",
            "nama_pembina" => "Pak Ariyo",
            "deskripsi" => "Kegiatan ekstrakurikuler yang mengajarkan permainan basket, seperti dribbling, passing, dan shooting.",
        ],
        [
            "id" => 4,
            "nama" => "Futsal",
            "nama_pembina" => "Pak Virawan",
            "deskripsi" => "Kegiatan ekstrakurikuler yang mengajarkan permainan futsal, seperti dribbling, passing, dan shooting.",
        ],
        [
            "id" => 5,
            "nama" => "Esport",
            "nama_pembina" => "Pak Ludhi",
            "deskripsi" => "Kegiatan ekstrakurikuler yang mengajarkan permainan video game kompetitif, seperti Mobile Legends, Valorant, dan PUBG",
        ],
        [
            "id" => 6,
            "nama" => "Teater",
            "nama_pembina" => "Bu Farah",
            "deskripsi" => "Kegiatan ekstrakurikuler yang mengajarkan kegiatan teater, seperti akting, menari, dan menyanyi.",
        ],
        
        [
            "id" => 7,
            "nama" => "Tari",
            "nama_pembina" => "Pak Azmi",
            "deskripsi" => "Kegiatan ekstrakurikuler yang mengajarkan kegiatan tari, seperti tari tradisional, tari modern, dan tari kreasi.",
        ]
    ];

    public static function all(){
            return collect(self::$ekstracurriculers);
        }
             
}
