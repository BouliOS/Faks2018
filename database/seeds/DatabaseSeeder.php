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
       // $this->call(UsersTableSeeder::class);
       $this->call(ZupanijasTableSeeder::class);
       $this->call(MjestosTableSeeder::class);
       $this->call(DvoranasTableSeeder::class);
    }
}
