<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status', 100)->default('active');
            $table->unsignedBigInteger('user_id');
            $table->string('name',100);
            $table->integer('price');
            $table->unsignedsmallInteger('type_id');
            $table->unsignedsmallInteger('size_id');
            $table->unsignedsmallInteger('color_id');
            $table->string('detail',500);
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
        Schema::dropIfExists('items');
    }
}
