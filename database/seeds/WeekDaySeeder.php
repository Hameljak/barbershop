<?php

use Illuminate\Database\Seeder;

class WeekDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('week_days')->insert([
            [
                'name'=>'Понеділок'
            ],
            [
                'name'=>'Вівторок'
            ],
            [
                'name'=>'Середа'
            ],
            [
                'name'=>'Четвер'
            ],
            [
                'name'=>'Пʼятниця'
            ],
            [
                'name'=>'Субота'
            ],
            [
                'name'=>'Неділя'
            ]
        ]);
    }
}
