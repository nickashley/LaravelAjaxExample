<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrawingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drawings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('row1col1')->default("#ffffff");
            $table->string('row1col2')->default("#ffffff");
            $table->string('row1col3')->default("#ffffff");
            $table->string('row1col4')->default("#ffffff");
            $table->string('row2col1')->default("#ffffff");
            $table->string('row2col2')->default("#ffffff");
            $table->string('row2col3')->default("#ffffff");
            $table->string('row2col4')->default("#ffffff");
            $table->string('row3col1')->default("#ffffff");
            $table->string('row3col2')->default("#ffffff");
            $table->string('row3col3')->default("#ffffff");
            $table->string('row3col4')->default("#ffffff");
            $table->string('row4col1')->default("#ffffff");
            $table->string('row4col2')->default("#ffffff");
            $table->string('row4col3')->default("#ffffff");
            $table->string('row4col4')->default("#ffffff");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('drawings');
    }
}
