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
        $TypesArray = ["Web Dev", "Game Designer"];

        foreach ($TypesArray as $type) {
            $newType = new Type();
            $newType->type_name = $type;
            $newType->save();
        }
    }
}
