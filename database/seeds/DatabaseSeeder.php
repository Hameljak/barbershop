<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(WorkersSeeder::class);
       // $this->call(SerwicesSeeder::class);
       // $this->call(WeekDaySeeder::class);
        $this->call(WorkDaysSeeder::class);
        $this->call(WorkerServiceSeeder::class);
    }
}
