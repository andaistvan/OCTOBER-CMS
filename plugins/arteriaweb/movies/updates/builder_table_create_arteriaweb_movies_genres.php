<?php namespace Arteriaweb\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_movies_genres');
    }
}
