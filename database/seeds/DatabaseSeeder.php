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

        $this->call(RolesTableSeeder::class);
        $this->command->info("Роли усмешно добавлены");
    }
}
