<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientContractRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_contract_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('client_id');
            $table->string('contract_rate_type');
            $table->decimal('basic_pay',6,2);
            $table->decimal('overtime_pay',6,2);
            $table->decimal('night_differential_pay',6,2);
            $table->decimal('cola',6,2);
            $table->decimal('five_days_incentive_pay',6,2);
            $table->decimal('uniform_allowance',6,2);
            $table->decimal('thirteen_month_pay',6,2);
            $table->decimal('sss_premium',6,2);
            $table->decimal('philhealth',6,2);
            $table->decimal('insurance_fund',6,2);
            $table->decimal('pag_ibig_fund',6,2);
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
        Schema::dropIfExists('client_contract_rates');
    }
}
