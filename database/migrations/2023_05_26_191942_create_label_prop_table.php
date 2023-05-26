<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('label_prop', function (Blueprint $table) {
            $table->foreignId('label_id')->constrained();
            $table->foreignId('prop_id')->constrained();

            $table->primary(['label_id', 'prop_id'], 'label_prop_primary');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('label_prop');
    }
};
