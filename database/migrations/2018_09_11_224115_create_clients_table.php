<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
			$table->increments('id');
            $table->string('name');
            $table->string('legal_name');
            $table->string('tax_payer_id');
			$table->text('description');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->boolean('tax_exempt_federal')->default(false);
            $table->boolean('tax_exempt_state')->default(false);
            $table->boolean('tax_exempt_county')->default(false);
            $table->timestamps();
			//$table->integer('site_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
