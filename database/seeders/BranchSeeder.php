<?php

namespace Database\Seeders;

use App\Models\Branches;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Branches::create([
            'name' => 'Pekanbaru'
        ]);
        Branches::create([
            'name' => 'Jakarta'
        ]);
        Branches::create([
            'name' => 'Bogor'
        ]);
        Branches::create([
            'name' => 'Depok'
        ]);
        Branches::create([
            'name' => 'Tasikmalaya'
        ]);
        Branches::create([
            'name' => 'Bekasi'
        ]);
        Branches::create([
            'name' => 'Palembang'
        ]);
        Branches::create([
            'name' => 'Lampung'
        ]);
        Branches::create([
            'name' => 'Bandung'
        ]);
    }
}
