<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('phoneNo');
            $table->integer('providerId');
            $table->string('ownerName');
            $table->string('emailAddress');
            $table->integer('idNumber');
            $table->integer('idExpiryDate');
            $table->string('idPicture');
            $table->string('storeName');
            $table->string('storeCategory');
            $table->string('shopeAddress');
            $table->integer('shopeLatitude');
            $table->integer('shopeLongitude');
            $table->string('shopeLogo');
            $table->string('shopeCoverPicture');
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
        Schema::dropIfExists('registrations');
    }
}
