  'id',                                                                                                                                                                                                                                                   |<
  'site_id',                                                                                                                                                                                                                                             |
  'name',                                                                                                                                                                                                                                               |
  'description',                                                                                                                                                                                                                                        |
  'active',                                                                                                                                                                                                                                             |
  'capacity',                                                                                                                                                                                                                                           |
  'capacityLimit',                                                                                                                                                                                                                                      |
  'productID',                                                                                                                                                                                                                                          |
  'defaultProduct.ProductName',                                                                                                                                                                                                                         |
  'alternativeProductList',                                                                                                                                                                                                                             |
  'permissibleProductList',                                                                                                                                                                                                                             |
  'orientationID',                                                                                                                                                                                                                                      |
  'orientation.description',                                                                                                                                                                                                                            |
  'installationTypeID',                                                                                                                                                                                                                                 |
  'installationType.description',                                                                                                                                                                                                                       |
  'manifold',                                                                                                                                                                                                                                           |
  'pump',                                                                                                                                                                                                                                               |
  'client_search',                                                                                                                                                                                                                                      |
  'site_search',
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('max_volume');
            $table->integer('current_volume');
			//$table->integer('client_id');
			//$table->integer('site_id');
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
        Schema::dropIfExists('tanks');
    }
}
