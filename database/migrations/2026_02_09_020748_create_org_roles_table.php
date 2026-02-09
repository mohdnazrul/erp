<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('org_roles')) return;

        Schema::create('org_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organisation_id')->constrained('organisations')->cascadeOnDelete();

            $table->string('name');
            $table->string('code', 100);
            $table->foreignId('parent_org_role_id')->nullable()->constrained('org_roles')->nullOnDelete();
            $table->unsignedInteger('level')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->unique(['organisation_id', 'code']);
            $table->index(['organisation_id']);
            $table->index(['parent_org_role_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('org_roles');
    }
};
