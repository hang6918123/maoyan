<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideohallsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videohalls', function(Blueprint $table)
		{
			$table->increments('id')->comment('影厅表id');
			$table->boolean('video_nuber')->comment('几号厅');
			$table->string('video_seat')->comment('影厅座位');
			$table->boolean('video_stua')->default(0)->comment('座位状态0为售出1为代售');
			$table->string('v_id')->comment('影厅关联id');
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
		Schema::drop('videohalls');
	}

}
