<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'links', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'label' )->nullable()->index();
            $table->string( 'slug' )->index();
            $table->string( 'full_link' )->index();
            $table->string( 'secret' )->nullable();
            $table->text( 'description' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'links' );
    }
}
