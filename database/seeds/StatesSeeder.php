<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            'Northern Province',
            'Eastern Province',
            'Sabaragamuwa Province',
            'Uva Province',
            'Western Province',
            'Central Province',
            'Southern Province',
            'North Western Province',
            'North Central Province',
        ];

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }
}
