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
            $table->date('date_of_contract');
            $table->date('date_of_termination');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('bir_tin_number')->nullable();
            $table->string('peza_number')->nullable();
            $table->string('official_company_no')->nullable();
            $table->string('company_email');
            $table->date('schedule_of_cut_off')->nullable();
            $table->date('schedule_of_payroll')->nullable();
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
}
