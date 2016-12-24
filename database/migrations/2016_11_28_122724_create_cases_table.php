<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('casetype_id')->unsigned();
            $table->datetime('updated_date');
            $table->datetime('check_date');
            $table->text('comment');
            $table->timestamps();


            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')
                  ->onDelete('cascade');

            $table->foreign('status_id')
                  ->references('id')
                  ->on('case_statuses');

            $table->foreign('casetype_id')
                  ->references('id')
                  ->on('case_types');             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cases');
    }
}
