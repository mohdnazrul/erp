<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('org_role_closure')) return;

        Schema::create('org_role_closure', function (Blueprint $table) {
            $table->foreignId('organisation_id')->constrained('organisations')->cascadeOnDelete();
            $table->foreignId('ancestor_org_role_id')->constrained('org_roles')->cascadeOnDelete();
            $table->foreignId('descendant_org_role_id')->constrained('org_roles')->cascadeOnDelete();
            $table->unsignedInteger('depth');

            $table->primary(['organisation_id', 'ancestor_org_role_id', 'descendant_org_role_id']);
            $table->index(['organisation_id', 'ancestor_org_role_id']);
            $table->index(['organisation_id', 'descendant_org_role_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('org_role_closure');
    }
};
