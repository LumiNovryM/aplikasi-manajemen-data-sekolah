<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
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
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        # Seeder Loop
        $data = [
            ['name' => '1A'],
            ['name' => '1B'],
            ['name' => '1C'],
            ['name' => '1D'],
        ];

        # Run Seeder Loop
        foreach ($data as $val)
        {
            ClassRoom::insert([
                'name' => $val['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
