<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'threads', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'title' );
			$table->text( 'body' );
			// eloquent-relationships
			$table->unsignedInteger( 'user_id' );
			$table->unsignedInteger( 'channel_id' );
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'threads' );
	}
}
