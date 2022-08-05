<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id');
            $table->string('name',128);
            $table->multiLineString('address');
            $table->string('zipcode', 32);
            $table->string('city', 128);
            $table->string('country', 128);
            $table->string('vat_number', 32);
            $table->string('email', 32);
            $table->string('phone', 32);
            $table->foreignId('created_by');
            $table->multiLineString('remarks');
            $table->boolean('active');
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
        Schema::dropIfExists('clients');
    }
};
