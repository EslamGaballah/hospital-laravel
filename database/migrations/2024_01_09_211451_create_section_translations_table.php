<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_translations', function (Blueprint $table) {
            $table->id(); 
            $table->string('locale')->index();
            $table->longText('description');

             // Foreign key to the main model
    //    $table->unsignedBigInteger('section_id'); foreignedId is a reblacement for it
       $table->unique(['section_id', 'locale']);
       $table->foreignId('section_id')->references('id')->on('sections')->onDelete('cascade');
        
          // Actual fields you want to translate
       $table->string('name');
     

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_translation');
    }
}
