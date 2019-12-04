<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('statement_id')->unsigned();
            $table->bigInteger('service_user_id')->unsigned();
            $table->bigInteger('operator_user_id')->unsigned();

            $table->foreign('statement_id')->references('id')->on('statements')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('service_user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('operator_user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('status')->default(false); //0 - in the process, 1 - completed
            $table->index(['service_user_id', 'operator_user_id']);
            $table->timestamps();
        });
        DB::statement('ALTER TABLE works ADD CONSTRAINT chk_operator_service_id CHECK (service_user_id <> operator_user_id);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}