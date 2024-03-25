<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('tours')->delete();
        
        DB::table('tours')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'description' => 'Located in the west of Cairo, Giza is home to the famous Giza Pyramids, one of the Seven Wonders of the Ancient World. The city also houses the iconic Sphinx, known for its distinctive lion\'s',
                'img_path' => 'images\\ceties\\giza.jpg',
                'name' => 'GIZA',
                'tour_id' => 1,
            ),
            1 => 
            array (
                'category_id' => 1,
                'description' => 'Located in southern Egypt, Aswan is renowned for its stunning natural beauty and its location along the Nile River. The magnificent Philae Temple, a UNESCO World Heritage site, is a must-visi',
                'img_path' => 'images\\ceties\\Aswan.jpg',
                'name' => 'Aswan',
                'tour_id' => 2,
            ),
            2 => 
            array (
                'category_id' => 1,
                'description' => 'The enchanting oasis of Fayoum is known for its natural beauty and rich history. Visitors can explore the Wadi El Rayan protected area, which features mesmerizing waterfalls and lakes. The Va',
                'img_path' => 'images\\ceties\\Fayoum.jpg',
                'name' => 'Fayoum',
                'tour_id' => 3,
            ),
            3 => 
            array (
                'category_id' => 1,
                'description' => 'Situated in a remote location, Siwa oasis offers a magical experience. It is known for its unique culture, traditions, and stunning landscapes. Cleopatra\'s Bath, a natural spring, is a popula',
                'img_path' => 'images\\ceties\\siwa.jpg',
                'name' => 'Siwa',
                'tour_id' => 4,
            ),
            4 => 
            array (
                'category_id' => 1,
                'description' => 'Often referred to as the world\'s greatest open-air museum, Luxor is a city rich in historical significance. The Valley of the Kings is a renowned necropolis, housing the tombs of pharaohs. Th',
                'img_path' => 'images\\ceties\\Luxor.jpg',
                'name' => 'Luxor',
                'tour_id' => 5,
            ),
            5 => 
            array (
                'category_id' => 1,
                'description' => 'Alexandria is a city steeped in history and culture. The Bibliotheca Alexandrina is a modern library that pays homage to the ancient Great Library of Alexandria. The Catacombs of Kom El Shoqa',
                'img_path' => 'images\\ceties\\alex.jpg',
                'name' => 'Alexandria',
                'tour_id' => 6,
            ),
            6 => 
            array (
                'category_id' => 2,
                'description' => 'London, the capital of the United Kingdom, is a vibrant city with a rich history and diverse culture. It is known for its iconic landmarks such as the Tower of London, a historic castle on th',
                'img_path' => 'images\\ceties\\London.jpg',
                'name' => 'London',
                'tour_id' => 7,
            ),
            7 => 
            array (
                'category_id' => 2,
                'description' => 'Malaysia is a captivating destination that combines cultural diversity with stunning natural landscapes. Kuala Lumpur, the capital city, is famous for its towering skyscrapers, including the ',
                'img_path' => 'images\\ceties\\Malaysia.jpg',
                'name' => 'Malaysia',
                'tour_id' => 8,
            ),
            8 => 
            array (
                'category_id' => 2,
                'description' => 'Paris, the capital of France, is synonymous with romance, art, and culture. The city is home to architectural wonders like the Eiffel Tower, a symbol of Paris, offering panoramic views of the',
                'img_path' => 'images\\ceties\\Paris.jpg',
                'name' => 'Paris',
                'tour_id' => 9,
            ),
            9 => 
            array (
                'category_id' => 2,
                'description' => 'New York City, often referred to as the "Big Apple," is a bustling metropolis that never sleeps. It is a melting pot of cultures, offering a vibrant atmosphere and endless possibilities. Visi',
                'img_path' => 'images\\ceties\\New York.jpg',
                'name' => 'New York',
                'tour_id' => 10,
            ),
            10 => 
            array (
                'category_id' => 2,
                'description' => 'Rio de Janeiro, located in Brazil, is a city renowned for its stunning natural beauty and vibrant culture. Stand in awe of the iconic Christ the Redeemer statue, perched atop Corcovado Mounta',
                'img_path' => 'images\\ceties\\Rio de Janeiro.jpg',
                'name' => 'Rio de Janeiro',
                'tour_id' => 11,
            ),
        ));
        
        
    }
}