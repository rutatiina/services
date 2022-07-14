<?php

namespace Rutatiina\Services\Seeders;

use Illuminate\Database\Seeder;
use Rutatiina\Qbuks\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'code' => 'financial-accounting',
            'name' => 'Financial Accounting',
            'type' => 'app',
            'description' => 'Financial Accounting application',
        ]);

        Service::create([
            'code' => 'hrm',
            'name' => 'HRM',
            'type' => 'app',
            'description' => 'Human Resource Management',
        ]);

        Service::create([
            'code' => 'crbt',
            'name' => 'CRBT - Caller Ring Back Tunes',
            'type' => 'app',
            'description' => 'CRBT - Caller Ring Back Tunes',
        ]);

        Service::create([
            'code' => 'workshop',
            'name' => 'Workshop',
            'type' => 'app',
            'description' => 'Workshop',
        ]);

    }
}
