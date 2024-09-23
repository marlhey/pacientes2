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
        //Tabla de pacientes 
        Schema::create('patients', function(Blueprint $table){
           $table->increments('id');
           $table->string('name',50);
           $table->string('lastname',50);
           $table->string('address',100);
           $table->string('postcode',10);
           $table->string('locality',50);
           $table->string('province',50);
           $table->date('birthdate');
           $table->string('sex',10);
           $table->string('security_number',20);
           $table->string('phone_number', 10);
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
