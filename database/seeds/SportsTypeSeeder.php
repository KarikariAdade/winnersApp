<?php

use Illuminate\Database\Seeder;
use App\SportsType;

class SportsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sportsTypeData = [
            'Football',
            'Basketball',
            'Tennis',
            'Hockey',
            'Handball',
            'Volleyball',
            'Baseball',
            'American Football',
            'Motorsport',
            'Rugby',
            'Darts',
            'Cricket'];

        foreach($sportsTypeData as $sportsType){
            SportsType::query()->create([
                'name' => $sportsType
            ]);
        }
    }
}
