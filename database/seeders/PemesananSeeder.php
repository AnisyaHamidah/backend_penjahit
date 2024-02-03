<?php

namespace Database\Seeders;

use App\Models\Pemesanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
    //  * @return void
     */
    public function run(): void
    {
        Pemesanan::insert([
            [
                'id_produk' => 1,
                'id_user' => 1,
                'ukuran' => 'L',
                'warna' => 'biwu',
                'lingkar_dada' => '20 cm',
                'lingkar_pinggang' => '100 cm',
            ],
            [
                'id_produk' => 2,
                'id_user' => 2,
                'ukuran' => 'M',
                'warna' => 'biwu',
                'lingkar_dada' => '20 cm',
                'lingkar_pinggang' => '100 cm',
            ],
            [
                'id_produk' => 3,
                'id_user' => 3,
                'ukuran' => 'XL',
                'warna' => 'biwu',
                'lingkar_dada' => '20 cm',
                'lingkar_pinggang' => '100 cm',
            ],
        ]);
    }
}
