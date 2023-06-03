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
            'long_description' => 'Salah satu pantai paling populer di Provinsi Banten. Pantai di Banten ini memiliki pemandangan pantainya yang memiliki hamparan pasir putih yang indah, di tambah birunya air laut yang menawan. 
            Pantai Anyer juga telah dilengkapi fasilitas seperti penginapan-penginapan yang memadai. Mulai dari kelas yang berbintang hingga kelas melati dapat menjadi pilihan pengunjung di sepanjang Jalan Raya Anyer.',
            'location' => 'Jl. Raya Anyer, Kec. Anyer, Kab. Serang',
            'provinsi' => 'Banten',
            'photo_Path' => '/assets/images/anyer.png',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31738.522905793965!2d105.84481619678779!3d-6.088147976607146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4186aeccb6c0f1%3A0x1f555b24c077b26f!2sPantai%20Anyer!5e0!3m2!1sen!2sid!4v1685724476857!5m2!1sen!2sid'
        ]);

        Destination::create([
            'name' => 'P. Legon Pari',
            'description' => 'Pantai Legon Pari merupakan salah satu Pantai Sawarna yang masih jarang terjamah wisatawan, hal ini karena lokasinya tersembunyai dan aksesnya hanya bisa di lewati dengan kendaraan motor dan jalan kaki saja.',
            'long_description' => 'Lokasinya berada di sebelah timur Pantai Tanjung Layar. Dari jalan utama Desa Sawarna membutuhkan waktu 15 menitan untuk sampai ke panti ini menggunakan kendaraan motor.
            Selama dalam perjalanan menuju Pantai Legon Pari Anda akan melewati banyak pesawahan yang luas miliki warga Sawarna, jika beruntung, maka bisa melihat pemandangan hamparan padi yang berwarna hijau atau menguning.',
            'location' => 'Sawarna, Kec. Bayah, Kabupaten Lebak',
            'provinsi' => 'Banten',
            'photo_Path' => '/assets/images/legon.png',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63362.97799507619!2d106.24626644863275!3d-6.987344299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4291f17892ea29%3A0xb5edf8f8c1c13a7a!2sPantai%20Legon%20Pari!5e0!3m2!1sen!2sid!4v1685723440616!5m2!1sen!2sid'
        ]);

        Destination::create([
            'name' => 'P. Sawarna',
            'description' => 'Pantai Sawarna Banten, nama tempat ini sudah sering direkomendasikan sebagai tempat wisata pantai yang perlu di kunjungi. karena sudah menjadi destinasi wisata paling di minatin banyak orang.',
            'long_description' => 'Cakupan wilayah yang masuk Pantai Sawarna cukup luas, dan yang menjadi daya tariknya yaitu setiap pantai memiliki ciri khasnya tersendiri, khususnya pada kondisi alamnya. Ada pantai dengan hamparan pasir putih, pantai yang didominasi batuan karang, hingga pantai dengan gabungan dari kedua unsur tersebut.
            Pantai yang paling banyak dikunjungi wisatawan yaitu Pantai Ciantir dan Pantai Tanjung Layar, keduanya merupakan ikon wisata Pantai Sawarna, jaraknya berdekaran dan bibir pantainya saling terhubung.',
            'location' => 'desa Sawarna, kec. Bayah, Kabupaten lebak',
            'provinsi' => 'Banten',
            'photo_Path' => '/assets/images/sawarna.png',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.413144970928!2d106.3006042878749!3d-6.984930072812246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e429030f0d704a7%3A0xdf552aa51e23e199!2sSawarna%20Beach!5e0!3m2!1sen!2sid!4v1685724584738!5m2!1sen!2sid'
        ]);

        Destination::create([
            'name' => 'P. Ratu',
            'description' => 'Pantai Palabuhanratu, atau lebih populer sebagai Pantai Pelabuhan Ratu, adalah sebuah tempat wisata di pesisir Samudra Hindia di selatan Jawa Barat, Indonesia. ',
            'long_description' => 'Selain indah, pantai yang terletak sekitar 4 jam perjalanan darat dari Kota Hujan Bogor ini memiliki berbagai kelebihan di banding pantai - pantai lainnya di Indonesia. Objek Wisata ini cukup terkenal sampai mancanegara berkat topografi panorama alamnya yang indah, udaranya yang sejuk, hamparan pasirnya yang luas, berupa perpaduan antara pantai yang begitu curam dan landai, tebing karang yang terjal, hampasan ombak, dan juga hutan cagar alam. ',
            'location' => 'Kota Palabuhanratu',
            'provinsi' => 'Jawa Barat',
            'photo_Path' => '/assets/images/ratu.png',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.333759682165!2d106.5164365741422!3d-6.969894668244693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e429da4e2fa10d7%3A0x175fd903e0c0b3ba!2sPantai%20pelabuhan%20ratu%20Sukabumi!5e0!3m2!1sen!2sid!4v1685724629761!5m2!1sen!2sid'
        ]);

        Destination::create([
            'name' => 'P. Karang',
            'description' => 'Pantai Karang Sanur memiliki pantai berpasir putih yang luas dengan air laut yang tenang serta ombak yang kecil sehingga sesuai untuk tempat rekreasi keluarga.',
            'long_description' => 'Wisatawan disini bisa beraktifitas berenang, menyewa kano, memancing, bersanatai menikmati keindahan panoramanya. Pantai ini dinamakan pantai Karang karena banyak terdapat batu karang. Tempat wisata ini banyak pohon perindang sehingga dapat digunakan wisatawan pada siang hari menikmati keindahan pantai ini. Pada pagi hari bisa menyaksikan keindahan saat matahari terbit yang begitu memukau.',
            'location' => 'Sanur, Denpasar Selatan',
            'provinsi' => 'Bali',
            'photo_Path' => '/assets/images/karang.png',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.8733334923545!2d106.46040668787336!3d-6.957705872300283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e428347285c4bb9%3A0xaaecbbdc0694986d!2sKarang%20Hawu%20Beach!5e0!3m2!1sen!2sid!4v1685724677657!5m2!1sen!2sid'
        ]);

        Destination::create([
            'name' => 'P. Carita',
            'description' => 'Pantai Carita adalah sebuah pantai di pesisir barat provinsi Banten, Indonesia. Pantai ini merupakan objek pariwisata pantai di Indonesia yang cukup terkenal',
            'long_description' => 'Pantai Carita kaya akan sumber daya alamnya. Hamparan tepian yang amat landai dengan ombak laut yang kecil dan lembut menyapu di sepanjang pantai, dipadu dengan pemandangan Gunung Krakatau.
            Jarak tempuh dari Jakarta ke Pantai Carita sekitar 130 km dapat melalui jalan tol Jakarta-Merak dan keluar di gerbang tol Cilegon Timur. 
            Fasilitas di Pantai Carita cukup lengkap yaitu Banana boat, snorkling, papan seluncur, diving, dan fasilitas lainnya. Banyak juga penginapan-penginapan sepanjang pesisir pantai dan atau rumah-rumah warga yang difungsikan untuk penginapan.',
            'location' => 'Sukarame, Kabupaten Pandeglang',
            'provinsi' => 'Banten',
            'photo_Path' => '/assets/images/carita.png',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7537698146266!2d105.83689797413221!3d-6.296054461619631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e422dae6ebd5089%3A0xe2ca5ee81785330a!2sCarita%20Beach!5e0!3m2!1sen!2sid!4v1685724745693!5m2!1sen!2sid'
        ]);
    }
}
