<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->decimal('amount', 10, 2); // Store the amount with 2 decimal places
            $table->string('category'); 
            $table->date('date'); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
