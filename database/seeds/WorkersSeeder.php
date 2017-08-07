<?php

use Illuminate\Database\Seeder;


class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('workers')->insert([
            [
                'name'=>'worker1',
                'hour_start_work'=>'9',
                'hour_end_work'=>'15'
            ],
            [
                'name'=>'worker2',
                'hour_start_work'=>'9',
                'hour_end_work'=>'18'
            ],
            [
                'name'=>'worker3',
                'hour_start_work'=>'9',
                'hour_end_work'=>'18'
            ],
            [
                'name'=>'worker4',
                'hour_start_work'=>'11',
                'hour_end_work'=>'17'
            ],
            [
                'name'=>'worker5',
                'hour_start_work'=>'11',
                'hour_end_work'=>'18'
            ]
        ]);
    }
}
