<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wikis', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('tags', 255);
            $table->integer('created_by');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('wiki_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('wiki_id');
            $table->text('content');
            $table->boolean('is_approved');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wikis');
    }
};
