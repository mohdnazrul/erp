<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('org_unit_closure')) return;

        Schema::create('org_unit_closure', function (Blueprint $table) {
            $table->foreignId('organisation_id')->constrained('organisations')->cascadeOnDelete();
            $table->foreignId('ancestor_unit_id')->constrained('org_units')->cascadeOnDelete();
            $table->foreignId('descendant_unit_id')->constrained('org_units')->cascadeOnDelete();
            $table->unsignedInteger('depth');

            $table->primary(['organisation_id', 'ancestor_unit_id', 'descendant_unit_id']);
            $table->index(['organisation_id', 'ancestor_unit_id']);
            $table->index(['organisation_id', 'descendant_unit_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('org_unit_closure');
    }
};
