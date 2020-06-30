<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VerbsTableSeeder::class);
        $this->command->info("Таблица VERBS успешно заполнена начальными данными");
    }
}
