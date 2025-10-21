<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tagsArray = ["Web Dev (Full Stack)", "Web Dev (Frontend)", "Web Dev (Backend)", "Game Designer (Videogames)", "Game Designer (Tabletop RPG)", "Game Designer (Serious games)"];

        foreach ($tagsArray as $tag) {
            $newType = new Type();
            $newType->tag = $tag;
            $newType->save();
        }
    }
}
