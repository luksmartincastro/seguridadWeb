<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioperfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarioperfil', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('usuarioPerfil_idUs_foreign')->nullable()->index('usuarioPerfil_idUs_foreign');
			$table->integer('usuarioPerfil_idPerf_foreign')->nullable()->index('usuarioPerfil_idPerf_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarioperfil');
	}

}
