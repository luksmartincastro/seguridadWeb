<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerfilrecursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfilrecurso', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('consultar')->nullable();
			$table->boolean('agregar')->nullable();
			$table->boolean('editar')->nullable();
			$table->boolean('eliminar')->nullable();
			$table->integer('perfilRecurso_idPer_foreign')->nullable()->index('perfilRecurso_idPer_foreign');
			$table->integer('perfilRecurso_idRec_foreign')->nullable()->index('perfilRecurso_idRec_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('perfilrecurso');
	}

}
