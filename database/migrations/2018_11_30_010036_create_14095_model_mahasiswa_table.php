<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create14095ModelMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('member', function (Blueprint $table) {
            $table->increments('id_member'); //membuat kolom id auto increments
			$table->string('name');	
			$table->string('email')->unique(); 
			$table->string('password'); 
			$table->string('macAddress'); 
            $table->timestamps(); 
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
}
