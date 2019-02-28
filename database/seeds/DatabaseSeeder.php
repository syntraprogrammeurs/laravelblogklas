<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncate = ['posts','categories'];
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(RolesTableSeeder::class);

        foreach($this->toTruncate as $table){
            DB::table('Posts')->truncate();
            DB::table('Categories')->truncate();

        }

        $this->call(PostsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
