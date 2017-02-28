<?php namespace Arteriaweb\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebMovies extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_movies_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
