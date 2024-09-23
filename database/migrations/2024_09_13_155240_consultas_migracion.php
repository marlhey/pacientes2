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
        //tabla Consultas 
        Schema::create('consultation', function(Blueprint $table){
            $table->increments('id');
            $table->date('consultation_date');
            $table->date('discharge_date');
            $table->string('diagnosis');
            $table->string('treatment');
            $table->string('other_data');
            $table->string('observations');

            //llaves foraneas
            //usuarios
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');

            //pacientes
            $table->integer('id_patient')->unsigned();
            $table->foreign('id_patient')->references('id')->on('patients');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
