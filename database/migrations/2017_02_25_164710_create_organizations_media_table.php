<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsMediaTable extends Migration
{
    /**
     * Run the migrations.
     * The table will store any media type[jpeg, png, gif, mp4 etc] url
     * @return void
     */
    public function up()
    {
        Schema::create('organizations_media', function (Blueprint $table) {
            $table->increments('id');
            $table->text('media_path');
            $table->string('mime_type')->nullable();
            $table->integer('organization_id')->index()->unsigned();
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
        Schema::dropIfExists('organizations_media');
    }
}
