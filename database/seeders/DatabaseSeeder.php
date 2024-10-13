<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(200)->create();
        //Fazendo uma consulta no banco de dados, embaralhando a ordem,
        //Retornando apenas 10, desses 10 pra cada 1 é criado um projeto
        // User::query()->inRandomOrder()->limit(10)->get()
        // ->each(fn (User $u) => Project::factory()->create(['created_by' => $u->id]));
        // Project::factory()->count(10)->create();
        User::query()->inRandomOrder()->limit(10)->get()
        ->each(function (User $u){
            $project = Project::factory()->create(['created_by' => $u->id]);
            Proposal::factory()->count(random_int(4,45))->create(['project_id' => $project->id]);
        });
    }
}
