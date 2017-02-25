<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     * This table will store possible categories organizations could belong to
     * @return void
     */
    public function up()
    {
        Schema::create('organizations_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('organizations_categories');
    }
}
