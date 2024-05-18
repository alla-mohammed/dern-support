<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CatgorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Catgories = [
            ['name' => 'On-Site Support', 'description' => 'Support provided at the client’s business location.'],
            ['name' => 'In-Office Repair', 'description' => 'Repairs done at the company’s office.'],
            ['name' => 'Courier Delivery', 'description' => 'Computer pick-up and delivery service via courier.'],
            ['name' => 'Remote Support', 'description' => 'Support provided remotely over the internet.'],
            ['name' => 'Consultation Services', 'description' => 'Technical consultations for IT solutions.'],
        ];

        foreach ($Catgories as $Category) {
            DB::table('catgories')->insert([
                'name' => $Category['name'],
                'description' => $Category['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
