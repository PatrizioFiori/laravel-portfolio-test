<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $TagsArray = ["Front-End", "Back-End", "Fullstack", "Videogames", "Tabletop RPG"];

        foreach ($TagsArray as $tag) {
            $newTag = new Tag();
            $newTag->tag = $tag;
            $newTag->save();
        }
    }
}
