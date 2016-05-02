<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarioperfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuarioperfil', function(Blueprint $table)
		{
			$table->foreign('usuarioPerfil_idUs_foreign', 'usuarioperfil_ibfk_1')->references('id')->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('usuarioPerfil_idPerf_foreign', 'usuarioperfil_ibfk_2')->references('id')->on('perfiles')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuarioperfil', function(Blueprint $table)
		{
			$table->dropForeign('usuarioperfil_ibfk_1');
			$table->dropForeign('usuarioperfil_ibfk_2');
		});
	}

}
