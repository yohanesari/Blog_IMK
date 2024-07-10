<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Galeri
{
    private static
        $galeri = [
            [
                "image" => 'image/galeri/1.jpeg'
            ],
            [
                "image" => 'image/galeri/2.jpeg'
            ],
            [
                "image" => 'image/galeri/3.jpeg'
            ],
            [
                "image" => 'image/galeri/4.jpeg'
            ],
            [
                "image" => 'image/galeri/5.jpeg'
            ],
            [
                "image" => 'image/galeri/6.jpeg'
            ],
            [
                "image" => 'image/galeri/7.jpeg'
            ],
            [
                "image" => 'image/galeri/1.jpeg'
            ],
        ];

    public static function all()
    {
        return collect(self::$galeri);
    }
}
