<?php

use App\Models\Contest;
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
        Schema::create('criterias', function (Blueprint $table) {
            $table->id();
            $table->json('criteria');
            $table->json('judges')->nullable();

            $table->foreignIdFor(Contest::class);

            $table->integer('qualified_participant')->nullable();
            $table->string('final_scoring_method')->nullable();
            $table->string('preliminary_scoring_method')->nullable();

            $table->integer('preliminary_round_percentage_score')->nullable();
            $table->integer('final_round_percentage_score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criterias');
    }
};
