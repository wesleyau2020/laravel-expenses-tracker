<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->integer('math_grade'); 
            $table->integer('science_grade'); 
            $table->integer('english_grade'); 
            $table->integer('spanish_grade'); 
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
