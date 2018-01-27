<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Admin\Project::class, 10)->create()->each(function ($u) {
            $u->client()->save(factory(\App\Models\Client::class)->make());
            $u->type()->save(factory(\App\Models\Type::class)->make());
        });
    }
}
