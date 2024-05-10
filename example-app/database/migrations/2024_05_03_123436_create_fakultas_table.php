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
        Schema::create('fakultas', function (Blueprint $table) {
<<<<<<< HEAD
            // $table->id(); auto increment
=======
>>>>>>> 4dabc282deb714296f1d82b51a8df713bf493c99
            $table->uuid('id');
            $table->primary('id');
            $table->string('nama');
            $table->string('singkatan', 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};
