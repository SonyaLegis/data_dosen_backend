<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            [
                'nama_dosen' => 'Abdul Rasyid, SHI, MCL., Ph.D',
                'jenis_kelamin' => 'Laki - Laki',
                'jabatan' => 'Lecturer of Business Law',
            ],
            [
                'nama_dosen' => 'Abdul Qadir A Syakur, M.M',
                'jenis_kelamin' => 'Laki - Laki',
                'jabatan' => 'Lecturer of Manajemen',
            ],
            [
                'nama_dosen' => 'Abdul Aziz Turhan Kariko, S.S., M.Hum.',
                'jenis_kelamin' => 'Laki - Laki',
                'jabatan' => 'Lecturer of Sastra Inggris',
            ],
        ]);
    }
}
