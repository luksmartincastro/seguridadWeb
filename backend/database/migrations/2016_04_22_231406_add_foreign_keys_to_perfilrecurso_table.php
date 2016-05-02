<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPerfilrecursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('perfilrecurso', function(Blueprint $table)
		{
			$table->foreign('perfilRecurso_idPer_foreign', 'perfilrecurso_ibfk_1')->references('id')->on('perfiles')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('perfilRecurso_idRec_foreign', 'perfilrecurso_ibfk_2')->references('id')->on('recursos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('perfilrecurso', function(Blueprint $table)
		{
			$table->dropForeign('perfilrecurso_ibfk_1');
			$table->dropForeign('perfilrecurso_ibfk_2');
		});
	}

}
