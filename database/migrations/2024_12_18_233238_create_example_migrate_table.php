<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExampleMigrateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('example_migrate', function (Blueprint $table) {
            $table->id();
            
            $table->string('name', 100);//->unique();

            $table->string('email')->unique();   
            $table->string('password');  

            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->decimal('price', 8, 2)->unsigned();
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
        Schema::dropIfExists('example_migrate');
    }
}
