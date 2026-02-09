<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'staff_code')) {
                $table->string('staff_code', 100)->nullable()->unique()->after('email');
            }

            if (!Schema::hasColumn('users', 'organisation_id')) {
                $table->foreignId('organisation_id')->nullable()
                    ->constrained('organisations')->nullOnDelete()
                    ->after('staff_code');
            }

            if (!Schema::hasColumn('users', 'org_role_id')) {
                $table->foreignId('org_role_id')->nullable()
                    ->constrained('org_roles')->nullOnDelete()
                    ->after('organisation_id');
            }

            if (!Schema::hasColumn('users', 'primary_org_unit_id')) {
                $table->foreignId('primary_org_unit_id')->nullable()
                    ->constrained('org_units')->nullOnDelete()
                    ->after('org_role_id');
            }

            if (!Schema::hasColumn('users', 'primary_department_id')) {
                $table->foreignId('primary_department_id')->nullable()
                    ->constrained('departments')->nullOnDelete()
                    ->after('primary_org_unit_id');
            }

            if (!Schema::hasColumn('users', 'manager_user_id')) {
                $table->foreignId('manager_user_id')->nullable()
                    ->constrained('users')->nullOnDelete()
                    ->after('primary_department_id');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // drop in reverse, guard if exist
            if (Schema::hasColumn('users', 'manager_user_id')) $table->dropConstrainedForeignId('manager_user_id');
            if (Schema::hasColumn('users', 'primary_department_id')) $table->dropConstrainedForeignId('primary_department_id');
            if (Schema::hasColumn('users', 'primary_org_unit_id')) $table->dropConstrainedForeignId('primary_org_unit_id');
            if (Schema::hasColumn('users', 'org_role_id')) $table->dropConstrainedForeignId('org_role_id');
            if (Schema::hasColumn('users', 'organisation_id')) $table->dropConstrainedForeignId('organisation_id');

            if (Schema::hasColumn('users', 'staff_code')) {
                $table->dropUnique(['staff_code']);
                $table->dropColumn('staff_code');
            }
        });
    }
};
