<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class datakelasS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB ::table('datakelas')->insert([
            'namakelas' => '11 RPL 1',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'namawalikelas' => 'Egi Nugraha',
            'jumlahsiswa' => '36',
        ]);
        DB ::table('datakelas')->insert([
            'namakelas' => '11 RPL 1',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'namawalikelas' => 'Dzikri Pangetsu',
            'jumlahsiswa' => '36',
        ]);
        DB ::table('datakelas')->insert([
            'namakelas' => '11 RPL 1',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'namawalikelas' => 'Asep Jaenal',
            'jumlahsiswa' => '36',
        ]);
        DB ::table('datakelas')->insert([
            'namakelas' => '11 RPL 1',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'namawalikelas' => 'Asep Komara',
            'jumlahsiswa' => '36',
        ]);
        DB ::table('datakelas')->insert([
            'namakelas' => '11 RPL 1',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'namawalikelas' => 'Retno',
            'jumlahsiswa' => '36',
        ]);
    }
}
