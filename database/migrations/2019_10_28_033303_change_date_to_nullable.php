<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDateToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->date('date_of_contract')->nullable()->change();
            $table->date('date_of_termination')->nullable()->change();
            $table->date('schedule_of_cut_off')->nullable()->change();
            $table->date('schedule_of_payroll')->nullable()->change();
            
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
            $table->date('date_of_contract')->nullable(false)->change();
            $table->date('date_of_termination')->nullable(false)->change();
            $table->date('schedule_of_cut_off')->nullable(false)->change();
            $table->date('schedule_of_payroll')->nullable(false)->change();
        });
    }
}
