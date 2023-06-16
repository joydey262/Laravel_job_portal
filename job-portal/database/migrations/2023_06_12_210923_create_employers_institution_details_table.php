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
        Schema::create('employers_institution_details', function (Blueprint $table) {
            $table->id();
            $table->integer('employer_id');
            $table->string('institution_name');
            $table->string('institution_address');
            $table->string('institution_city');
            $table->string('institution_state');
            $table->string('institution_country');
            $table->string('institution_pincode');
            $table->string('institution_mobile');
            $table->string('institution_website');
            $table->string('institution_email');
            $table->string('address_proof');
            $table->string('address_proof_image');
            $table->string('institution_license_number');
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
        Schema::dropIfExists('employers_institution_details');
    }
};
