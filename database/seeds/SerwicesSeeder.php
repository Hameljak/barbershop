<?php

use Illuminate\Database\Seeder;

class SerwicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name'=>'СТРИЖКА'
            ],
            [
                'name'=>'СТРИЖКА ПІД НАСАДКУ'
            ],
            [
                'name'=>'СТРИЖКА БОРОДИ'
            ],
            [
                'name'=>'СТРИЖКА ТА ГОЛІННЯ БОРОДИ'
            ],
            [
                'name'=>'КОРОЛІВСЬКЕ ГОЛІННЯ'
            ]
        ]);
    }
}
