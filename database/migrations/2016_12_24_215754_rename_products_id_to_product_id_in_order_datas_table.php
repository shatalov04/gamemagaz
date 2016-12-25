<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameProductsIdToProductIdInOrderDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_datas', function (Blueprint $table) {
            $table->renameColumn('products_id', 'product_id');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_datas', function (Blueprint $table) {
            $table->renameColumn('product_id', 'products_id');;
        });
    }
}
