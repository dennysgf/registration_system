<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonos_representantes', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->string('numero',10)->default(0);
            $table->string('tipo',35)->default(0);
            
            $table->timestamps();
            $table->bigInteger('id_representantes')->unsigned();
 
            //----------F O R E I G N      K E Y S -------------------------------
                       $table->foreign('id_representantes')
                       ->references('id')->on('representantes')
                       ->restricOnDelete()
                       ->cascadeOnUpdate(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
