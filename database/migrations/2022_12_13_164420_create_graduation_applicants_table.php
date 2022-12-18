<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduationApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('graduationApplicant', function (Blueprint $table) {
        $table->id();
        $table->string('fullNameKu');
        $table->string('fullNameEng');
        $table->string('email');
        $table->string('dep');
        $table->string('graduwation');
        $table->string('phoneNumber');
        $table->string('graduYear');
        $table->string('placeTo');
        $table->string('lang');
        $table->date('date');
        $table->string('require');
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
        Schema::dropIfExists('graduation_applicants');
    }
}
