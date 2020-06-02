<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_czech_ci';
            $table->id();
            $table->string('name', 2048);
            $table->boolean('public')->default(true)->comment('about,events_select,event_report_select,gallery,clan_select,homepage,contacts,links,login');
            $table->boolean('events_insert')->default(false)->nullable(false);
            $table->boolean('events_update')->default(false)->nullable(false);
            $table->boolean('events_delete')->default(false)->nullable(false);
            $table->boolean('event_report_insert')->default(false)->nullable(false);
            $table->boolean('event_report_update')->default(false)->nullable(false);
            $table->boolean('event_report_delete')->default(false)->nullable(false);
            $table->boolean('user_select')->default(false)->nullable(false);
            $table->boolean('user_insert')->default(false)->nullable(false);
            $table->boolean('user_update')->default(false)->nullable(false);
            $table->boolean('user_delete')->default(false)->nullable(false);
            $table->boolean('gallery_insert')->default(false)->nullable(false);
            $table->boolean('gallery_update')->default(false)->nullable(false);
            $table->boolean('gallery_delete')->default(false)->nullable(false);
            $table->boolean('clan_member_select')->default(false)->nullable(false);
            $table->boolean('clan_member_insert')->default(false)->nullable(false);
            $table->boolean('clan_member_update')->default(false)->nullable(false);
            $table->boolean('clan_member_delete')->default(false)->nullable(false);
            $table->boolean('clan_insert')->default(false)->nullable(false);
            $table->boolean('clan_update')->default(false)->nullable(false);
            $table->boolean('clan_delete')->default(false)->nullable(false);
            $table->boolean('function_select')->default(false)->nullable(false);
            $table->boolean('function_insert')->default(false)->nullable(false);
            $table->boolean('function_update')->default(false)->nullable(false);
            $table->boolean('function_delete')->default(false)->nullable(false);
            $table->timestampsTz();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
