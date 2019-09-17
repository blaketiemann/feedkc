<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Services\Enum\EnumFacade as Enum;
use Illuminate\Support\Carbon;

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
            $table->string('name')->nullable();
            $table->string('donor_id')->nullable();
            $table->string('requester_id')->nullable();
            $table->string('message')->nullable();
            $table->string('business')->nullable();
            $table->enum('category', Enum::categories())->nullable();
            $table->date('expires_on')->default(Carbon::now());
            $table->float('quantity_amount', '6','2')->nullable();
            $table->enum('status', Enum::statuses())->nullable();
            $table->enum('quantity_unit', Enum::quantityUnits())->nullable();
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
