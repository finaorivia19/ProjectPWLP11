<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nim'=>'2141720256',
                'nama'=>'Fina Orivia',
                'jurusan'=>'Teknologi Informasi',
            ],
           
        ];
        DB::table('mahasiswas')->insert($data);
    }
}
