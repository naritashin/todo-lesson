<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function(Blueprint $table)
        {
            $table->increments('id');// idカラム作成 レコードが追加されると1づつ増えていく
            $table->string('title');// titleカラム作成 フィールドはstring型
            $table->timestamps();// created_at, updated_atカラム作成
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('todos');// createの処理を元に戻す
    }
}
