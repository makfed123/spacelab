<?php

use Illuminate\Database\Migrations\Migration;

class AddFieldsCollections extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		if (Schema::hasTable('collections')) {
			Schema::table('collections', function($table) {
				if (!Schema::hasColumn('collections', 'public')) {
					$table -> integer('public') -> default(0);
				}
				if (!Schema::hasColumn('collections', 'intro')) {
					$table -> text('intro') -> nullable();
				}
				if (!Schema::hasColumn('collections', 'image')) {
					$table -> string('image', 20) -> nullable();
				}
				if (!Schema::hasColumn('collections', 'preintro')) {
					$table -> text('preintro') -> nullable();
				}

				$table -> timestamps();
			});
		}

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('collections');
	}

}
