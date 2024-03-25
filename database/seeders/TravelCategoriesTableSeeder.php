<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TravelCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('travel_categories')->delete();
        
        DB::table('travel_categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'category_name' => 'Inner Travels',
                'description' => 'Embark on an extraordinary adventure within your own borders with EG Tour, where we unlock the doors to captivating domestic destinations that will ignite your sense of wonder. From picturesq',
            ),
            1 => 
            array (
                'category_id' => 2,
                'category_name' => 'Outer Travels',
                'description' => 'Embark on a remarkable journey with EG Tour, where we unlock the doors to extraordinary destinations around the globe, offering you a myriad of captivating experiences, from exploring ancient',
            ),
        ));
        
        
    }
}