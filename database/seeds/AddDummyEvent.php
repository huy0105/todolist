<?php

use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
         ['event_name'=>'Finacial forum', 'start_date'=>'2017-10-12', 'end_date'=>'2017-09-15'],
         ['event_name'=>'Devtalk', 'start_date'=>'2017-10-13', 'end_date'=>'2017-09-25'],
         ['event_name'=>'Super Event', 'start_date'=>'2017-09-23', 'end_date'=>'2017-09-24'],
         ['event_name'=>'wtf event', 'start_date'=>'2017-09-19', 'end_date'=>'2017-09-27'],
        ];
        \DB::table('events')->insert($data);
    }
}
