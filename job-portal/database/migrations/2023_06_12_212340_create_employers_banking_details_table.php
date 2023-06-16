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
        Schema::create('employers_banking_details', function (Blueprint $table) {
            $table->id();
            $table->integer('employer_id');
            $table->string('account_holder_name');
            $table->string('survice_provider_name');
            $table->string('account_number');
            $table->string('swift_code');
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
        Schema::dropIfExists('employers_banking_details');
    }
};
