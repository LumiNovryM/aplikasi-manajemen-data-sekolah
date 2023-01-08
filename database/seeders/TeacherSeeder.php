<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\Extracurricular;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Run Seeder Bahkan Jika Table Sudah Terisi Data
        Schema::disableForeignKeyConstraints();
        Teacher::truncate();
        Schema::enableForeignKeyConstraints();

        # Seeder Loop
        $data = [
            ['name' => 'Solokov'],
            ['name' => 'Hitler'],
            ['name' => 'Misha'],
            ['name' => 'Sovia'],
            ['name' => 'Gregovar'],
        ];

        # Run Seeder Loop
        foreach ($data as $val)
        {
            Teacher::insert([
                'name' => $val['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
