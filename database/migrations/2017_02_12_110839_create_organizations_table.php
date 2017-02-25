<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function(Blueprint $table){

            $table->increments('id');
            $table->string('name');
            $table->string('location');
            $table->string('email');
            $table->text('general_description');
            $table->text('privileged_content');
            $table->integer('category_id')->index()->unsigned()->nullable();/*Added to categorise organizations*/
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
        Schema::dropifexists('organizations');
    }
}
