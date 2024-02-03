<?php

namespace Database\Seeders;

use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
         Produk::insert([
            [
                'nama_produk' => 'Produk 1',
                'gambar' => 'produk1.jpg',
                'harga' => 100000,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolore necessitatibus quod, officia delectus velit quaerat magnam sit rem corporis sequi aliquam, dolorum suscipit! Accusamus nam facilis itaque sint placeat omnis necessitatibus maxime dolor! Blanditiis!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_produk' => 'Produk 2',
                'gambar' => 'produk2.jpg',
                'harga' => 120000,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolore necessitatibus quod, officia delectus velit quaerat magnam sit rem corporis sequi aliquam, dolorum suscipit! Accusamus nam facilis itaque sint placeat omnis necessitatibus maxime dolor! Blanditiis!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_produk' => 'Produk 3',
                'gambar' => 'produk13g',
                'harga' => 105000,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolore necessitatibus quod, officia delectus velit quaerat magnam sit rem corporis sequi aliquam, dolorum suscipit! Accusamus nam facilis itaque sint placeat omnis necessitatibus maxime dolor! Blanditiis!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
         ]
        );
    }
}
