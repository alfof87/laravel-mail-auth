<?php

use Illuminate\Database\Seeder;
use App\Location;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (Employee::class, 100) -> create();
    }
 
}
