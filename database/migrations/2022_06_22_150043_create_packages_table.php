<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('duration');
            $table->integer('fees');
            $table->text('description');
            $table->timestamps();
        });

        DB::table('packages')->insert(
            array(
                'title' => 'First Package',
                'duration' => '60',
                'fees' => '100',
                'description' => 'First Package Description'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
