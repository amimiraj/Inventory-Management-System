<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('supplier', function (Blueprint $table) {

            $table->id('supplier_id');
            $table->string('supplier_name');
            $table->string('supplier_Phone_num');
            $table->string('supplier_email');
            $table->integer('userId');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('supplier');
    }

}
