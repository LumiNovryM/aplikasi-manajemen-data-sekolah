<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Illuminate\Database\Seeder;
use PhpParser\Builder\Class_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ExtracurricularSeeder::class,
            TeacherSeeder::class,
            ClassSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
