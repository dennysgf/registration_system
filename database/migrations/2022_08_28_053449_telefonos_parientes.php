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
        Schema::create('telefonos_parientes', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->string('numero',10)->default(0);
            $table->string('tipo',35)->default(0);
            
            $table->timestamps();

            $table->bigInteger('id_parientes')->unsigned();
        
            //----------F O R E I G N      K E Y S -------------------------------            
                        $table->foreign('id_parientes')
                        ->references('id')->on('parientes')
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
