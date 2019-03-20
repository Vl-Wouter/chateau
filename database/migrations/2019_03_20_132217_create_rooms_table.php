<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
						$table->increments('id');
						$table->integer('floor');
						$table->integer('number');
						$table->string('description');
						$table->integer('capacity')->default(2);
						$table->float('price', 8, 2)->default(50);
						$table->integer('amount_of_beds')->default(1)->nullable();
						$table->boolean('bathroom');
						$table->boolean('balcony');
						$table->timestamps();
						$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
