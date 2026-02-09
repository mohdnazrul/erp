<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\OrgUnit;
use Illuminate\Database\Seeder;

class OrgUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organization = Organization::first();

        // Create HQ
        $hq = OrgUnit::create([
            'organization_id' => $organization->id,
            'name' => 'Headquarters',
            'code' => 'HQ',
            'type' => 'HQ',
            'description' => 'Main headquarters',
            'email' => 'hq@techsolutions.com',
            'phone' => '+1-234-567-8900',
            'address' => '123 Tech Street, Silicon Valley, CA 94000',
            'is_active' => true,
        ]);

        // Create branches
        OrgUnit::create([
            'organization_id' => $organization->id,
            'parent_id' => $hq->id,
            'name' => 'North Branch',
            'code' => 'NB',
            'type' => 'Branch',
            'description' => 'Northern regional branch',
            'email' => 'north@techsolutions.com',
            'phone' => '+1-234-567-8901',
            'address' => '456 North Ave, Seattle, WA 98000',
            'is_active' => true,
        ]);

        OrgUnit::create([
            'organization_id' => $organization->id,
            'parent_id' => $hq->id,
            'name' => 'South Branch',
            'code' => 'SB',
            'type' => 'Branch',
            'description' => 'Southern regional branch',
            'email' => 'south@techsolutions.com',
            'phone' => '+1-234-567-8902',
            'address' => '789 South Blvd, Austin, TX 78000',
            'is_active' => true,
        ]);

        OrgUnit::create([
            'organization_id' => $organization->id,
            'parent_id' => $hq->id,
            'name' => 'East Branch',
            'code' => 'EB',
            'type' => 'Branch',
            'description' => 'Eastern regional branch',
            'email' => 'east@techsolutions.com',
            'phone' => '+1-234-567-8903',
            'address' => '321 East St, New York, NY 10000',
            'is_active' => true,
        ]);
    }
}
