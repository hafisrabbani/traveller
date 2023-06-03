<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' => 'P. Anyer',
            'description' => 'Pantai Anyer ini merupakan salah satu ikon utama dan menjadi primadona para wisatawan baik itu lokal hingga wisatawan luar negeri yang sedang berkunjung ke Banten, Indonesia. ',
            'location' => 'Jl. Raya Anyer, Kec. Anyer, Kab. Serang',
            'provinsi' => 'Banten',
            'photo_Path' => '/assets/images/anyer.png'
        ]);

        Destination::create([
            'name' => 'P. Legon Pari',
            'description' => 'Pantai Legon Pari merupakan salah satu Pantai Sawarna yang masih jarang terjamah wisatawan, hal ini karena lokasinya tersembunyai dan aksesnya hanya bisa di lewati dengan kendaraan motor dan jalan kaki saja.',
            'location' => 'Sawarna, Kec. Bayah, Kabupaten Lebak',
            'provinsi' => 'Banten',
            'photo_Path' => '/assets/images/legon.png'
        ]);

        Destination::create([
            'name' => 'P. Sawarna',
            'description' => 'Pantai Sawarna Banten, nama tempat ini sudah sering direkomendasikan sebagai tempat wisata pantai yang perlu di kunjungi. karena sudah menjadi destinasi wisata paling di minatin banyak orang.',
            'location' => 'desa Sawarna, kec. Bayah, Kabupaten lebak',
            'provinsi' => 'Banten',
            'photo_Path' => '/assets/images/sawarna.png'
        ]);

        Destination::create([
            'name' => 'P. Ratu',
            'description' => 'Pantai Palabuhanratu, atau lebih populer sebagai Pantai Pelabuhan Ratu, adalah sebuah tempat wisata di pesisir Samudra Hindia di selatan Jawa Barat, Indonesia. ',
            'location' => 'Kota Palabuhanratu',
            'provinsi' => 'Jawa Barat',
            'photo_Path' => '/assets/images/ratu.png'
        ]);

        Destination::create([
            'name' => 'P. Karang',
            'description' => 'Pantai Karang Sanur memiliki pantai berpasir putih yang luas dengan air laut yang tenang serta ombak yang kecil sehingga sesuai untuk tempat rekreasi keluarga.',
            'location' => 'Sanur, Denpasar Selatan',
            'provinsi' => 'Bali',
            'photo_Path' => '/assets/images/karang.png'
        ]);

        Destination::create([
            'name' => 'P. Carita',
            'description' => 'Pantai Carita adalah sebuah pantai di pesisir barat provinsi Banten, Indonesia. Pantai ini merupakan objek pariwisata pantai di Indonesia yang cukup terkenal',
            'location' => 'Sukarame, Kabupaten Pandeglang',
            'provinsi' => 'Banten',
            'photo_Path' => '/assets/images/carita.png'
        ]);
    }
}
