<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_logs', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_czech_ci';
            $table->id();
            $table->string('action', 1024)->comment('type of action (create,update,delete)');
            $table->string('type', 1024)->comment('type of item');
            $table->unsignedBigInteger('related_id')->comment('id of item');
            $table->json('values')->comment('values created/updated/deleted (as json)');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('on_homepage')->default(true);
            $table->timestampsTz();
            $table->softDeletesTz();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('action_logs');
    }
}
