<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeClientFieldToRequired extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
            $table->date('date_of_contract')->nullable(false)->change();
            $table->date('date_of_termination')->nullable(false)->change();
            $table->string('company_name')->nullable(false)->change();
            $table->string('company_address')->nullable(false)->change();
            $table->string('bir_tin_number')->nullable(false)->change();
            $table->string('peza_number')->nullable(false)->change();
            $table->string('official_company_no')->nullable(false)->change();
            $table->string('company_email')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
            $table->date('date_of_contract')->nullable()->change();
            $table->date('date_of_termination')->nullable()->change();
            $table->string('company_name')->nullable()->change();
            $table->string('company_address')->nullable()->change();
            $table->string('bir_tin_number')->nullable()->change();
            $table->string('peza_number')->nullable()->change();
            $table->string('official_company_no')->nullable()->change();
            $table->string('company_email')->nullable()->change();
        });
    }
}
