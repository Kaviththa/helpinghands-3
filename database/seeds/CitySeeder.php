<?php

use Illuminate\Database\Seeder;
use App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'Colombo',
            'Kandy',
            'Galle',
            'Anuradhapura',
            'Nuwara Eliya',
            'Trincomalee',
            'Negombo',
            'Jaffna',
            'Dambulla',
            'polonnaruwa',
            'Batticoloa',
            'Sri Jayawardhanapura Kotte',
            'Dehiwala',
            'Kalmunai',
            'Ratnapura',
            'Matara',
            'Tangalle',
            'Katunayake',
            'Kalutara',
            'Vavuniya',
            'Gampola',
            'Beruwala',
            'Maharagama',
            'Puttalam',
            'Kurunagela',
            'Matale',
            'Kolonnawa',
            'Hatton',
            'Point Pedro',
            'Panadura',
            'Watala',
            'Haputale',
            'Badulla',
            'Ella',
            'Hambantota',
            'Ja-Ela',
            'Weligama',
            'Chilaw',
            'Bentota',
            'Horana',
            'Valvettithurai',
            'Eravur',
            'Amvalangoda',
            'Wattegama',
            'Peliyagoda',
            'Hikkaduwa',
            'Kuliyapitiya',
            'Ampara',
            'Minuwangoda',
            'Kegalle',
            'Gampaha'
        ];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}
