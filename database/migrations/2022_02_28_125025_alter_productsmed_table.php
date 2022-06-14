<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductsmedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('generic_name');
            $table->string('medicines_form');
            $table->string('restriction_formula');
            $table->string('description');
            $table->boolean('faskes_tk1');
            $table->boolean('faskes_tk2');
            $table->boolean('faskes_tk3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('generic_name');
            $table->string('medicines_form');
            $table->string('restriction_formula');
            $table->string('description');
            $table->boolean('faskes_tk1');
            $table->boolean('faskes_tk2');
            $table->boolean('faskes_tk3');
        });
    }
}
