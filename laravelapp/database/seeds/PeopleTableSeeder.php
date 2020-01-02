<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
          'name'=>'Otoja',
          'mail'=>'s17049kr@st.nuis.jp',
          'age'=>21,
        ];
        DB::table('people2')->insert($param);
    }
}
