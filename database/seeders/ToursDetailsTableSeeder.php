<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToursDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('tours_details')->delete();
        
        DB::table('tours_details')->insert(array (
            0 => 
            array (
                'description' => 'Alexandria is a city steeped in history and culture. The Bibliotheca Alexandrina is a modern library that pays homage to the ancient Great Library of Alexandria. The Catacombs of Kom El Shoqa',
                'duration' => 3,
                'name' => 'Alexandria',
                'overall_img' => '',
                'price' => '30.00',
                'primary_img' => 'images/ceties/alex.jpg',
                'program' => 'Our final destination is Alexandria, a city steeped in history and culture. Visit the iconic Bibliotheca Alexandrina, explore the ancient Catacombs of Kom El Shoqafa, stroll along the scenic Corniche, and indulge in the city\'s vibrant culinary scene and vibrant markets.',
                'tour_id' => 6,
            ),
            1 => 
            array (
                'description' => 'Located in southern Egypt, Aswan is renowned for its stunning natural beauty and its location along the Nile River. The magnificent Philae Temple, a UNESCO World Heritage site, is a must-visi',
                'duration' => 8,
                'name' => 'Aswan',
                'overall_img' => '',
                'price' => '100.00',
                'primary_img' => 'images/ceties/Aswan.jpg',
                'program' => 'we take you to Aswan, a city located on the banks of the Nile River. Immerse yourself in the tranquil beauty of Aswan\'s landscapes, visit the magnificent Philae Temple, take a relaxing felucca boat ride on the Nile, and witness the mesmerizing Abu Simbel temples, a true testament to ancient Egyptian architecture.',
                'tour_id' => 2,
            ),
            2 => 
            array (
                'description' => 'The enchanting oasis of Fayoum is known for its natural beauty and rich history. Visitors can explore the Wadi El Rayan protected area, which features mesmerizing waterfalls and lakes. The Va',
                'duration' => 7,
                'name' => 'Fayoum',
                'overall_img' => '',
                'price' => '70.00',
                'primary_img' => 'images/ceties/Fayoum.jpg',
                'program' => 'Our journey continues to the enchanting Fayoum oasis, known for its natural beauty and rich history. Explore the stunning Wadi El Rayan, a protected area with mesmerizing waterfalls and lakes, visit the UNESCO-listed Valley of the Whales, and experience the traditional lifestyle of the local Bedouin communities.',
                'tour_id' => 3,
            ),
            3 => 
            array (
                'description' => 'Located in the west of Cairo, Giza is home to the famous Giza Pyramids, one of the Seven Wonders of the Ancient World. The city also houses the iconic Sphinx, known for its distinctive lion\'s',
                'duration' => 3,
                'name' => 'Giza',
                'overall_img' => '',
                'price' => '50.00',
                'primary_img' => 'images/ceties/giza.jpg',
                'program' => 'Our program begins in Giza, home to the iconic Great Pyramids and the majestic Sphinx. Marvel at the ancient wonders of the world as you delve into the mysteries of the pyramids, learn about their historical significance, and witness the breathtaking sunset over the desert.',
                'tour_id' => 1,
            ),
            4 => 
            array (
                'description' => 'London, the capital of the United Kingdom, is a vibrant city with a rich history and diverse culture. It is known for its iconic landmarks such as the Tower of London, a historic castle on th',
                'duration' => 10,
                'name' => 'London',
                'overall_img' => '',
                'price' => '400.00',
                'primary_img' => 'images/ceties/London.jpg',
                'program' => 'Explore the capital of the United Kingdom, London, one of the most exciting cities in the world. Visit the Tower of London and enjoy a stunning view of the city. Explore the Natural History Museum and the Science Museum, and wander through the famous Hyde Park. Don\'t miss a visit to Buckingham Palace and stroll along the renowned shopping street, Oxford Street.',
                'tour_id' => 7,
            ),
            5 => 
            array (
                'description' => 'Often referred to as the world\'s greatest open-air museum, Luxor is a city rich in historical significance. The Valley of the Kings is a renowned necropolis, housing the tombs of pharaohs. Th',
                'duration' => 9,
                'name' => 'Luxor',
                'overall_img' => '',
                'price' => '100.00',
                'primary_img' => 'images/ceties/Luxor.jpg',
                'program' => 'Our program takes you to Luxor, often referred to as the world\'s greatest open-air museum. Explore the legendary Valley of the Kings, step into the magnificent temples of Karnak and Luxor, and sail along the Nile on a traditional felucca, taking in the stunning vistas of this historical city',
                'tour_id' => 5,
            ),
            6 => 
            array (
                'description' => 'Malaysia is a captivating destination that combines cultural diversity with stunning natural landscapes. Kuala Lumpur, the capital city, is famous for its towering skyscrapers, including the ',
                'duration' => 15,
                'name' => 'Malaysia',
                'overall_img' => '',
                'price' => '500.00',
                'primary_img' => 'images/ceties/Malaysia.jpg',
                'program' => 'Get ready for an amazing experience in Malaysia, where diverse cultures and enchanting landscapes come together. Visit the famous Petronas Twin Towers in Kuala Lumpur and enjoy a breathtaking panoramic view. Enjoy a trip to Langkawi Island and explore its tropical forests and white sandy beaches. Discover the historical heritage of Malacca and indulge in delicious cuisine in George Town.',
                'tour_id' => 8,
            ),
            7 => 
            array (
                'description' => 'New York City, often referred to as the "Big Apple," is a bustling metropolis that never sleeps. It is a melting pot of cultures, offering a vibrant atmosphere and endless possibilities. Visi',
                'duration' => 8,
                'name' => 'New York',
                'overall_img' => '',
                'price' => '300.00',
                'primary_img' => 'images/ceties/New York.jpg',
                'program' => 'Explore the cultural and commercial capital of the United States, New York. Visit Times Square and enjoy watching spectacular Broadway shows. Take a stroll in the famous Central Park and enjoy the skyline view from the top of the Empire State Building. Shop on Fifth Avenue and savor delicious cuisine in Manhattan.',
                'tour_id' => 10,
            ),
            8 => 
            array (
                'description' => 'Paris, the capital of France, is synonymous with romance, art, and culture. The city is home to architectural wonders like the Eiffel Tower, a symbol of Paris, offering panoramic views of the',
                'duration' => 10,
                'name' => 'Paris',
                'overall_img' => '',
                'price' => '400.00',
                'primary_img' => 'images/ceties/Paris.jpg',
                'program' => 'Enjoy the beauty and romance of Paris, the capital of France. Visit the famous Eiffel Tower and wander through the elegant Champs-Élysées. Enjoy a visit to the magnificent Louvre Museum and discover famous artworks like the Mona Lisa. Don\'t miss a visit to Notre-Dame Cathedral and take a stroll along the banks of the River Seine.',
                'tour_id' => 9,
            ),
            9 => 
            array (
                'description' => 'Rio de Janeiro, located in Brazil, is a city renowned for its stunning natural beauty and vibrant culture. Stand in awe of the iconic Christ the Redeemer statue, perched atop Corcovado Mounta',
                'duration' => 10,
                'name' => 'Rio de Janeiro',
                'overall_img' => '',
                'price' => '500.00',
                'primary_img' => 'images/ceties/Rio de Janeiro.jpg',
                'program' => 'A trip to Rio de Janeiro is an exceptional experience that combines natural beauty and vibrant culture. When you arrive in Rio de Janeiro, you\'ll feel the life and energy that fill the streets and beaches.

You can start your journey by visiting one of the city\'s most iconic landmarks, the famous statue of Christ the Redeemer, known as "Cristo Redentor," located atop Corcovado Mountain. You\'ll enjoy a breathtaking view of the city and Guanabara Bay from this magnificent site.

Then, make your way to the world-famous beaches of Rio de Janeiro, such as Copacabana and Ipanema. Feel the soft sand beneath your feet, soak up the sun, and take a dip in the refreshing waters of the Atlantic Ocean. These beaches are not only beautiful but also vibrant hubs of activity, with beachgoers playing sports, sipping caipirinhas, and enjoying the lively atmosphere.',
                'tour_id' => 11,
            ),
            10 => 
            array (
                'description' => 'Situated in a remote location, Siwa oasis offers a magical experience. It is known for its unique culture, traditions, and stunning landscapes. Cleopatra\'s Bath, a natural spring, is a popula',
                'duration' => 11,
                'name' => 'Siwa',
                'overall_img' => '',
                'price' => '110.00',
                'primary_img' => 'images/ceties/siwa.jpg',
                'program' => 'Prepare to be captivated by the remote and magical Siwa oasis. Discover the unique culture and traditions of the Siwan people, soak in the healing waters of Cleopatra\'s Bath, explore the ancient ruins of the Temple of the Oracle, and witness the breathtaking beauty of the Great Sand Sea.',
                'tour_id' => 4,
            ),
        ));
        
        
    }
}