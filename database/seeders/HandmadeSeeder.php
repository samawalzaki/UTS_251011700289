<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Handmade;

class HandmadeSeeder extends Seeder
{
    public function run(): void
    {
        Handmade::insert([
            [
                'name' => 'Tas Anyaman Rotan',
                'artisan' => 'Dina Craft',
                'price' => 150000,
                'category' => 'Tas dan Aksesori',
                'material' => 'Rotan alami',
                'image' => 'tas-rotan.jpg',
                'description' => 'Tas handmade dari rotan alami dengan desain elegan.',
            ],
            [
                'name' => 'Vas Bunga Keramik',
                'artisan' => 'Budi Keramik',
                'price' => 85000,
                'category' => 'Keramik',
                'material' => 'Tanah liat',
                'image' => 'vas-keramik.jpg',
                'description' => 'Vas bunga keramik buatan tangan dengan desain minimalis.',
            ],
            [
                'name' => 'Gelang Manik Handmade',
                'artisan' => 'Salsa Handmade',
                'price' => 35000,
                'category' => 'Tas dan Aksesori',
                'material' => 'Manik-manik',
                'image' => 'gelang-manik.jpg',
                'description' => 'Gelang cantik dengan kombinasi warna menarik.',
            ],
            [
                'name' => 'Lampu Hias Bambu',
                'artisan' => 'Rizky Craft',
                'price' => 120000,
                'category' => 'Dekorasi Rumah',
                'material' => 'Bambu',
                'image' => 'lampu-bambu.jpg',
                'description' => 'Lampu hias bambu untuk mempercantik ruangan.',
            ],
            [
                'name' => 'Dompet Rajut',
                'artisan' => 'Maya Knitting',
                'price' => 65000,
                'category' => 'Tas dan Aksesori',
                'material' => 'Benang rajut',
                'image' => 'dompet-rajut.jpg',
                'description' => 'Dompet rajut handmade dengan bentuk sederhana dan unik.',
            ],
            [
                'name' => 'Hiasan Dinding Kayu',
                'artisan' => 'Andi Woodcraft',
                'price' => 95000,
                'category' => 'Dekorasi Rumah',
                'material' => 'Kayu jati',
                'image' => 'hiasan-kayu.jpg',
                'description' => 'Hiasan dinding kayu dengan sentuhan ukiran artistik.',
            ],
            
            [
                'name' => 'Hiasan Macrame',
                'artisan' => 'Nina Craft',
                'price' => 75000,
                'category' => 'Dekorasi Rumah',
                'material' => 'Benang katun',
                'image' => 'macrame.jpg',
                'description' => 'Hiasan dinding macrame buatan tangan dengan desain estetik.',
            ],
            [
                'name' => 'Tas Rajut',
                'artisan' => 'Maya Handmade',
                'price' => 90000,
                'category' => 'Tas dan Aksesori',
                'material' => 'Benang rajut',
                'image' => 'tas-rajut.jpg',
                'description' => 'Tas rajut handmade yang cocok digunakan sehari-hari.',
            ],
            [
                'name' => 'Cangkir Keramik',
                'artisan' => 'Budi Keramik',
                'price' => 45000,
                'category' => 'Keramik',
                'material' => 'Tanah liat',
                'image' => 'cangkir-keramik.jpg',
                'description' => 'Cangkir keramik buatan tangan dengan bentuk minimalis.',
            ],
            [
                'name' => 'Bingkai Foto Kayu',
                'artisan' => 'Andi Woodcraft',
                'price' => 60000,
                'category' => 'Dekorasi Rumah',
                'material' => 'Kayu pinus',
                'image' => 'bingkai-kayu.jpg',
                'description' => 'Bingkai foto kayu dengan desain natural dan sederhana.',
            ],

        ]);
    }
}
