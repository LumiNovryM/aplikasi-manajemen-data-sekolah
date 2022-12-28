<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // # Run Seeder Bahkan Jika Table Sudah Terisi Data
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // # Seeder Loop
        // $data = [
        //     ['name' => 'Aiu', 'gender' => 'P', 'nis' => '0101001', 'class_id' => 2],
        //     ['name' => 'Budi', 'gender' => 'L', 'nis' => '0101002', 'class_id' => 2],
        //     ['name' => 'Siti', 'gender' => 'P', 'nis' => '0101003', 'class_id' => 1],
        //     ['name' => 'Tono', 'gender' => 'P', 'nis' => '0101004', 'class_id' => 3],
        // ];

        // # Run Seeder Loop
        // foreach ($data as $val)
        // {
        //     Student::insert([
        //         'name' => $val['name'],
        //         'gender' => $val['gender'],
        //         'nis' => $val['nis'],
        //         'class_id' => $val['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        # Memanggil Data Dari Factory
        Student::factory()->count(20)->create();

    }
}
