<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuserSeeder extends Seeder
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
                'user_cd'=>'iPhone1',
                'user_nm_j'=>'iPhone2',
                'user_ab_j'=>'iPhone4',
                'user_nm_e'=>'iPhone44',
                'user_ab_e'=>'iPhon44e',
            ],
        ];
        DB::table('m_user')->insert($data);
    }
}
  