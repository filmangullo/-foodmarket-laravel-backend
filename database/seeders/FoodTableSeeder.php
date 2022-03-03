<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('food')->delete();
        
        \DB::table('food')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rendang',
                'description' => 'Rendang atau randang adalah masakan daging asli Indonesia yang berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak suhu rendah dalam waktu lama menggunakan aneka rempah-rempah dan santan.',
                'ingredients' => 'Bawang Merah, Daging, Bawang Putih, Santan Kelapa, Bawang Putih, Rempah-Rempah.',
                'price' => 10000,
                'rate' => 5.0,
                'types' => 'new',
                'picture_path' => '../img/rendang.jpg',
                'created_at' => '2022-03-03 13:26:15',
                'updated_at' => '2022-03-03 13:37:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sate Padang',
                'description' => 'Sate Padang adalah sebutan untuk tiga jenis varian sate di Sumatra Barat, yaitu Sate Padang, Sate Padang Panjang dan Sate Pariaman. Sate Padang memakai bahan daging sapi, lidah, atau jerohan dengan bumbu kuah kacang kental ditambah cabai yang banyak sehingga rasanya pedas.',
                'ingredients' => 'Danging, Bawang Merah, Bawang Putih, Cabe, Lengkuas, Jahe, Kacang, dll.',
                'price' => 10000,
                'rate' => 5.0,
                'types' => 'popular',
                'picture_path' => '../img/sate-padang.jpg',
                'created_at' => '2022-03-03 13:42:27',
                'updated_at' => '2022-03-03 13:42:27',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Burger Tea French Ries',
                'description' => 'Pesan makanan dan minuman favoritmu dari AY Burger And French Fries - Krobokan. Pesannya gampang dan pengiriman cepat langsung ke lokasi kamu.',
                'ingredients' => 'Tea, Burger, Ketang Goreng',
                'price' => 50000,
                'rate' => 4.85,
                'types' => 'recommended',
                'picture_path' => '../img/burger-tea-french-ries.jpg',
                'created_at' => '2022-03-03 13:44:45',
                'updated_at' => '2022-03-03 14:15:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}