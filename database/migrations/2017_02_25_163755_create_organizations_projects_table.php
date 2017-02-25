<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsProjectsTable extends Migration
{
    /**
     * Run the migrations.
     * This will track organization's projects which could contain both text and media like images
     * @return void
     */
    public function up()
    {
        Schema::create('organizations_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->text('end_date')->nullable();
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
        Schema::dropIfExists('organizations_projects');
    }
}
