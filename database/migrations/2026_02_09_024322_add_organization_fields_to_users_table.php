<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('organization_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('org_unit_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('department_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('org_role_id')->nullable()->constrained()->onDelete('set null');
            $table->string('employee_id')->nullable()->unique();
            $table->date('joined_date')->nullable();
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['organization_id']);
            $table->dropForeign(['org_unit_id']);
            $table->dropForeign(['department_id']);
            $table->dropForeign(['org_role_id']);
            $table->dropColumn([
                'organization_id',
                'org_unit_id',
                'department_id',
                'org_role_id',
                'employee_id',
                'joined_date',
                'is_active'
            ]);
        });
    }
};
