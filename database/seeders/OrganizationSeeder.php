<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organization::create([
            'name' => 'Tech Solutions Inc.',
            'code' => 'TSI',
            'description' => 'A leading technology solutions company',
            'email' => 'info@techsolutions.com',
            'phone' => '+1-234-567-8900',
            'address' => '123 Tech Street, Silicon Valley, CA 94000',
            'is_active' => true,
        ]);
    }
}
