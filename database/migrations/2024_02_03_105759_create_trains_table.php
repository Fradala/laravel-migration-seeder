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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('azienda',100);
            $table->string('stazione_partenza',100);
            $table->string('stazione_arrivo',100);
            $table->date('orario_partenza')->nullable(true);
            $table->date('orario_arrivo')->nullable(true);
            $table->string('codice_treno',50);
            $table->text('numero_carrozza');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
