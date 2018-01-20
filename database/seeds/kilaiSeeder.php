<?php

use Illuminate\Database\Seeder;

class kilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
              ['Nis'=>'123',
              'Nama'=>'Kilay',
              'Tempat_lahir'=>'Bandung',
              'Tanggal_lahir'=>'2000-11-02',
              'Alamat'=>'bandung',
              'Cita-cita'=>'Polwan',
              'Hobi'=>'Menggambar',
              'Photo'=>'tidak ada']
              ];
                DB::table('siswas')->insert($a);    }
}
