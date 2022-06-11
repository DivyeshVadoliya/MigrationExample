<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //up function working in migrate time
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('class');
           $table->string('name',30);//30 character string define
            $table->string('email',30);
            $table->string('rollno');//only number define
            $table->string('gender',10);
            $table->string('phonenumber');
            $table->string('address',100);
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
        Schema::dropIfExists('student');
    }
}
