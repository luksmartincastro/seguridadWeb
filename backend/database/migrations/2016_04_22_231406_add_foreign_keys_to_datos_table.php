<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('datos', function(Blueprint $table)
		{
			$table->foreign('datos_idUs_foreign', 'datos_ibfk_1')->references('id')->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('datos', function(Blueprint $table)
		{
			$table->dropForeign('datos_ibfk_1');
		});
	}

}
