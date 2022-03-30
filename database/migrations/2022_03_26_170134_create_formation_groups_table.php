<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->references('id')->on('groupes')->onDelete('Cascade');
            $table->foreignId('formation_id')->references('id')->on('formations')->onDelete('Cascade');
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
        Schema::dropIfExists('formation_groups');
    }
}
