<?php

namespace Tests\Feature;

use App\Models\Department;
use App\Models\Organization;
use App\Models\OrgRole;
use App\Models\OrgUnit;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrganizationalStructureTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_organization_exists(): void
    {
        $this->assertDatabaseCount('organizations', 1);
        
        $organization = Organization::first();
        $this->assertEquals('Tech Solutions Inc.', $organization->name);
        $this->assertEquals('TSI', $organization->code);
    }

    public function test_org_units_exist(): void
    {
        $this->assertDatabaseCount('org_units', 4);
        
        $hq = OrgUnit::where('code', 'HQ')->first();
        $this->assertNotNull($hq);
        $this->assertEquals('Headquarters', $hq->name);
    }

    public function test_departments_exist(): void
    {
        $this->assertDatabaseCount('departments', 8);
        
        $hrDept = Department::where('code', 'HR')->first();
        $this->assertNotNull($hrDept);
        $this->assertEquals('Human Resources', $hrDept->name);
    }

    public function test_org_roles_exist(): void
    {
        $this->assertDatabaseCount('org_roles', 7);
        
        $ceoRole = OrgRole::where('code', 'CEO')->first();
        $this->assertNotNull($ceoRole);
        $this->assertEquals(1, $ceoRole->level);
    }

    public function test_users_have_organizational_relationships(): void
    {
        $admin = User::where('email', 'admin@example.com')->first();
        
        $this->assertNotNull($admin->organization);
        $this->assertNotNull($admin->orgUnit);
        $this->assertNotNull($admin->department);
        $this->assertNotNull($admin->orgRole);
        
        $this->assertEquals('Tech Solutions Inc.', $admin->organization->name);
        $this->assertEquals('CEO', $admin->orgRole->code);
    }

    public function test_users_have_system_roles(): void
    {
        $admin = User::where('email', 'admin@example.com')->first();
        $this->assertTrue($admin->hasRole('super-admin'));
        
        $manager = User::where('email', 'manager@example.com')->first();
        $this->assertTrue($manager->hasRole('manager'));
        
        $employee = User::where('email', 'employee@example.com')->first();
        $this->assertTrue($employee->hasRole('employee'));
    }

    public function test_dashboard_requires_authentication(): void
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_access_dashboard(): void
    {
        $user = User::where('email', 'admin@example.com')->first();
        
        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
        $response->assertSee('ERP Dashboard');
        $response->assertSee($user->name);
    }

    public function test_dashboard_displays_statistics(): void
    {
        $user = User::first();
        
        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
        $response->assertSee('Total Users');
        $response->assertSee('Organizations');
        $response->assertSee('Org Units');
        $response->assertSee('Departments');
    }
}
