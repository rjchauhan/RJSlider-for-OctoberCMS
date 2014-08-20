<?php namespace Raviraj\Rjsliders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSlidersTable extends Migration
{

    public function up()
    {
        Schema::create('raviraj_rjsliders_sliders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('raviraj_rjsliders_sliders');
    }

}
