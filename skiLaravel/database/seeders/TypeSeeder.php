<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type1=Type::create([
            'name' => "slalom"
        ]);

        $type2=Type::create([
            'name' => "carver"
        ]);

        $type3=Type::create([
            'name' => "race"
        ]);

        $type4=Type::create([
            'name' => "freeride"
        ]);
    }
}
