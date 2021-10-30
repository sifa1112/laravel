<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ps = [
            ['nama_pelanggan'=>'Sifa','nama_barang'=>'Facial Wash','qty'=>'4','tgl_pesan'=>'2021.11.10'],
            ['nama_pelanggan'=>'Anisa','nama_barang'=>'Moisturizer','qty'=>'2','tgl_pesan'=>'2021.11.10'],
            ['nama_pelanggan'=>'Dinda','nama_barang'=>'Lip Tint','qty'=>'1','tgl_pesan'=>'2021.11.10'],
            ['nama_pelanggan'=>'Rafi','nama_barang'=>'Body Lotion','qty'=>'11','tgl_pesan'=>'2021.11.10'],
            ['nama_pelanggan'=>'Nadia','nama_barang'=>'Serum','qty'=>'5','tgl_pesan'=>'2021.11.10'],

        ];
        DB::table('pesanan')->insert($ps);
    }
}
