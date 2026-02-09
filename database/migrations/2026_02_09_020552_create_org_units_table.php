<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('org_units')) return;

        Schema::create('org_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organisation_id')->constrained('organisations')->cascadeOnDelete();

            $table->string('name');
            $table->string('code', 100);
            $table->string('unit_type', 30); // HQ|BRANCH|DIVISION|REGION
            $table->foreignId('parent_unit_id')->nullable()->constrained('org_units')->nullOnDelete();

            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->unique(['organisation_id', 'code']);
            $table->index(['organisation_id']);
            $table->index(['parent_unit_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('org_units');
    }
};
