<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class dataguruS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB ::table('dataguru')->insert([
            'nip' => '12197564',
            'namaguru' => 'Egi Nugraha',
            'jk' => 'L',
            'mapel' => 'web',
            'walikelas' => '11 RPL 1',
        ]);
        DB ::table('dataguru')->insert([
            'nip' => '13423359',
            'namaguru' => 'Dzikri Pangetsu',
            'jk' => 'L',
            'mapel' => 'PPT',
            'walikelas' => '11 RPL 1',
        ]);
        DB ::table('dataguru')->insert([
            'nip' => '124562238',
            'namaguru' => 'Asep jaenal',
            'jk' => 'L',
            'mapel' => 'PAI',
            'walikelas' => '11 RPL 1',
        ]);
        DB ::table('dataguru')->insert([
            'nip' => '12197564',
            'namaguru' => 'Asep Komara',
            'jk' => 'L',
            'mapel' => 'MTK',
            'walikelas' => '11 RPL 1',
        ]);
        DB ::table('dataguru')->insert([
            'nip' => '12197564',
            'namaguru' => 'Retno',
            'jk' => 'p',
            'mapel' => 'PBO',
            'walikelas' => '11 RPL 1',
        ]);
    }
}
