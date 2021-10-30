<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama'=>'Sifa','jk'=>'Perempuan','alamat'=>'Cijerah','kode_pos'=>'40213','kota'=>'Bandung','ttl'=>'Bandung-Des-2000'],
            ['nama'=>'Anisa','jk'=>'Perempuan','alamat'=>'Kopo','kode_pos'=>'40233','kota'=>'Bandung','ttl'=>'Bekasi-Jan-2003'],
            ['nama'=>'Dinda','jk'=>'Perempuan','alamat'=>'Jamika','kode_pos'=>'40232','kota'=>'Bandung','ttl'=>'Tasik-Des-1999'],
            ['nama'=>'Rafi','jk'=>'Laki-Laki','alamat'=>'Cibaduyut','kode_pos'=>'40236','kota'=>'Bandung','ttl'=>'Jakarta-Feb-2002'],
            ['nama'=>'Nadia','jk'=>'Laki-Laki','alamat'=>'Sukahaji','kode_pos'=>'40221','kota'=>'Bandung','ttl'=>'Bandung-Mar-2000']

        ];
        DB::table('pembeli')->insert($pembeli);
    }
}
