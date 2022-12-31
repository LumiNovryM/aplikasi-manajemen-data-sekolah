<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use App\Models\Extracurricular;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ExtracurricularSeeder extends Seeder
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
            ['name' => 'Basket'],
            ['name' => 'Takraw'],
            ['name' => 'PMR'],
            ['name' => 'Volly'],
            ['name' => 'Sepak Bola'],
        ];

        # Run Seeder Loop
        foreach ($data as $val)
        {
            Extracurricular::insert([
                'name' => $val['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
