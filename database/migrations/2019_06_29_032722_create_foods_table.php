<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Services\Enum\EnumFacade as Enum;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('donor_id');
            $table->string('message')->nullable();
            $table->string('business');
            $table->enum('category', Enum::categories());
            $table->date('expires_on');
            $table->float('quantity_amount', '6','2');
            $table->enum('status', Enum::statuses());
            $table->enum('quantity_unit', Enum::quantityUnits());
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
        Schema::dropIfExists('foods');
    }
}
