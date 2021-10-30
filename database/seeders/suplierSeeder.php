<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class suplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama'=>'Sifa','alamat'=>'Cijerah','kode_pos'=>'40213','kota'=>'Bandung'],
            ['nama'=>'Anisa','alamat'=>'Kopo','kode_pos'=>'40233','kota'=>'Bandung'],
            ['nama'=>'Dinda','alamat'=>'Jamika','kode_pos'=>'40232','kota'=>'Bandung'],
            ['nama'=>'Rafi','alamat'=>'Cibaduyut','kode_pos'=>'40236','kota'=>'Bandung'],
            ['nama'=>'Nadia','alamat'=>'Sukahaji','kode_pos'=>'40221','kota'=>'Bandung']

        ];
        DB::table('suplier')->insert($suplier);   
    }
}
