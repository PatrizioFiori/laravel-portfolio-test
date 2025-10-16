<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newProject = new Project();
        $newProject->titolo = "EASA Crisis Landing Simulator";
        $newProject->descrizione = "Sviluppo di un simulatore a scopo formativo per l’Agenzia Europea per la Sicurezza Aerea (EASA), progettato per riprodurre scenari realistici di emergenza aerea. Il software consente di simulare criticità operative, con l’obiettivo di supportare la formazione degli utenti nella gestione delle emergenze.";
        $newProject->tags = "Godot, Gdscript";
        $newProject->save();
    }
}
