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
        Schema::create('book',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->double('price');
            $table->timestamps();
            $table->enum('status',['Unpaid','Paid']);
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
