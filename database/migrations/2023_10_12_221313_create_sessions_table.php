<?php

use App\Models\Classification;
use App\Models\Psychologist;
use App\Models\Student;
use App\Models\Level;
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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignIdFor(Psychologist::class);
            $table->foreignIdFor(Student::class);
            $table->string('reason');
            $table->dateTime('date_hour');
            $table->text('recommendations');
            $table->foreignIdFor(Classification::class);
            $table->foreignIdFor(Level::class);
            $table->string('reference');
            $table->boolean('already_had');
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
