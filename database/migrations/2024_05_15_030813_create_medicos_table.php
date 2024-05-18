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
        Schema::create('medicos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome', 60)->required();
            $table->string('crm', 13)->required()->unique();
            $table->string('especialidade', 60)->required();
            $table->timestamps();
        });

        Schema::create('atendimentos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('data_atendimento')->required();
            $table->uuid('medico_id');
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->uuid('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
        Schema::table('atendimentos', function(BLueprint $table) {
            $table->dropForeign('atendimentos_paciente_id_foreign');
            $table->dropColumn('paciente_id');
        });
        Schema::dropIfExists('atendimentos');
    }
};
