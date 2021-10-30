<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $b = [
            ['nama'=>'Facial Wash','varian'=>'Perfect Bright','harga_beli'=>'Rp.30.000','harga_jual'=>'Rp.28.000'],
            ['nama'=>'Moisturizer','varian'=>'Perfect Bright','harga_beli'=>'Rp.33.000','harga_jual'=>'Rp.30.000'],
            ['nama'=>'Lip Tint','varian'=>'Nude','harga_beli'=>'Rp.20.000','harga_jual'=>'Rp.18.000'],
            ['nama'=>'Body Lotion','varian'=>'Charming','harga_beli'=>'Rp.50.000','harga_jual'=>'Rp.47.000'],
            ['nama'=>'Serum','varian'=>'C Defense','harga_beli'=>'Rp.89.000','harga_jual'=>'Rp.85.000'],

        ];
        DB::table('barang')->insert($b);
    }
}
