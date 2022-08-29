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
        Schema::create('direcciones_parientes', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->text('calle_primaria')->default(0);
            $table->text('calle_secundaria')->default(0);
            $table->integer('numero_casa')->default(0);
            $table->string('provincia',50);
            $table->string('canton',30);
            $table->string('parroquia',30);
            $table->text('referencia');
            
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
