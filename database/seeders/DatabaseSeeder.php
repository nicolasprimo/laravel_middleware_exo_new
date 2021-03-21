<?php

namespace Database\Seeders;

use App\Models\Article;
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
        $this->call(
        [
            RoleSeeder::class,
            UserSeeder::class,
        ]);
        Article::factory(20)->create();
    }
}
