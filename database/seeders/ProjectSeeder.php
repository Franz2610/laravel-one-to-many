<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = config('project.project');
        foreach($projects as $project) {
            $newProject = new Project();
            $newProject->name = $project['name'];
            $newProject->slug = Str::slug($project['name'], '-');
            $newProject->image = $project['image'];
            $newProject->languages = $project['languages'];
            $newProject->bodytext = $project['bodytext'];
            $newProject->save();
        }

    }
}
