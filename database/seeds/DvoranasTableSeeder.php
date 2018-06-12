<?php

use App\Dvorana;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class DvoranasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dvoranas')->delete();
        $faker= Factory::create();
        $dvoranas = factory(Dvorana::class, 100)->create();
        
        
    DB::table('dvoranas')->insert(
        [
          array(// row #0
            
            'naziv' => $faker->safeColorName,
            'brojmjesta' => $faker->numberBetween(20, 40),
            'created_at' => $faker->dateTime,
            'updated_at' => NULL,
          ),
            array(// row #0
            
            'naziv' => 'xxy',
            'brojmjesta' => 22,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
            array(// row #0
            
            'naziv' => 'xxy',
            'brojmjesta' => 22,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => NULL,
          ),
    ]
           );
    }
}
