<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['name' => "user", 'ru_name' => "Пользователь"]);
        DB::table('roles')->insert(['name' => "admin", 'ru_name' => "Администратор"]);
    }
}
