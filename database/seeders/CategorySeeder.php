<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryData = [
            [
                'name' => 'Role-playing',
                'description' => 'A role-playing game is a game in which players assume the roles of characters in a fictional setting. Players take responsibility for acting out these roles within a narrative, either through literal acting or through a process of structured decision-making regarding character development',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Action',
                'description' => "An action game is a video game genre that emphasizes physical challenges, including hand-eye coordination and reaction time. The genre includes a large variety of sub-genres, such as fighting games, beat 'em ups, shooter games, rhythm games and platform games",
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Simulation',
                'description' => 'Simulation video games are a diverse super-category of video games, generally designed to closely simulate real world activities. A simulation game attempts to copy various activities from real life in the form of a game for various purposes such as training, analysis, prediction, or entertainment.',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Adventure',
                'description' => "An adventure game is a video game genre in which the player assumes the role of a protagonist in an interactive story, driven by exploration and/or puzzle-solving. The genre's focus on story allows it to draw heavily from other narrative-based media, such as literature and film, encompassing a wide variety of genres",
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Racing',
                'description' => 'Racing games are a video game genre in which the player participates in a racing competition. They may be based on anything from real-world racing leagues to fantastical settings. They are distributed along a spectrum between more realistic racing simulations and more fantastical arcade-style racing games.',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ]
        ];

        Category::insert($categoryData);
    }
}
