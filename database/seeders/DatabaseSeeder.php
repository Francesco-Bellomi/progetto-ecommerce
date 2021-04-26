<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $categories=['sport', 'vestiti', 'informatica', 'immobili', 'Motori', 'giochi', 'telefonia', 'libri', 'arte', 'musica'];
      
      foreach ($categories as $category ) {
          DB::table('categories')->insert([
              'name'=>$category,
              'created_at'=>Carbon::now(),
              'updated_at'=>Carbon::now(),
          ]);
      }
    }
}
