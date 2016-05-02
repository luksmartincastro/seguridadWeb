<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombreDato', 100)->nullable();
			$table->integer('datos_idUs_foreign')->nullable()->index('datos_idUs_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('datos');
	}

}
