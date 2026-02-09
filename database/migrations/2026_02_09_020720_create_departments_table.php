<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('departments')) return;

        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organisation_id')->constrained('organisations')->cascadeOnDelete();
            $table->foreignId('org_unit_id')->constrained('org_units')->cascadeOnDelete();

            $table->string('name');
            $table->string('code', 100);
            $table->foreignId('parent_department_id')->nullable()->constrained('departments')->nullOnDelete();

            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->unique(['organisation_id', 'code']);
            $table->index(['organisation_id']);
            $table->index(['org_unit_id']);
            $table->index(['parent_department_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
