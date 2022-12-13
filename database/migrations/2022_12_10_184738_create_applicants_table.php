<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     



            Schema::create('applicants', function (Blueprint $table) {
              
                $table->id();
                $table->string('fullName');
                $table->string('email');
                $table->string('dep');
                $table->string('graduYear');
                $table->string('placeTo');
                $table->string('lang');
                $table->date('date');
                $table->string('grad');
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
        Schema::dropIfExists('applicants');
    }
}
