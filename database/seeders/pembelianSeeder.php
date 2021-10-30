<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang'=>'Facial Wash','nama_suplier'=>'Wardah','qty'=>'4','tgl'=>'2020.10.10'],
            ['nama_barang'=>'Moisturizer','nama_suplier'=>'Emina','qty'=>'2','tgl'=>'2021.01.11'],
            ['nama_barang'=>'Lip Tint','nama_suplier'=>'Implora','qty'=>'1','tgl'=>'2021.03.01'],
            ['nama_barang'=>'Rafi','nama_suplier'=>'Scarlet','qty'=>'5','tgl'=>'2021.06.28'],
            ['nama_barang'=>'Nadia','nama_suplier'=>'Wardah','qty'=>'3','tgl'=>'2021.09.30'],

        ];
        DB::table('pembelian')->insert($pembelian);    }
}
