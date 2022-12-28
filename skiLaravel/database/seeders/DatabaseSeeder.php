<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ski;
use App\Models\User;
use App\Models\Type;
use App\Models\Brand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Ski::truncate();
        User::truncate();
        Brand::truncate();
        Type::truncate();

        $this->call([
            TypeSeeder::class
        ]);

        Ski::factory(10)->create();
    }
}
