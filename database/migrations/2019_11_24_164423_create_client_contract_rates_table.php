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
            $table->string('contract_rate_type')->nullable();
            $table->decimal('basic_pay',10,2)->nullable();
            $table->decimal('overtime_pay',10,2)->nullable();
            $table->decimal('night_differential_pay',10,2)->nullable();
            $table->decimal('cola',10,2)->nullable();
            $table->decimal('five_days_incentive_pay',10,2)->nullable();
            $table->decimal('uniform_allowance',10,2)->nullable();
            $table->decimal('thirteen_month_pay',10,2)->nullable();
            $table->decimal('sss_premium',10,2)->nullable();
            $table->decimal('philhealth',10,2)->nullable();
            $table->decimal('insurance_fund',10,2)->nullable();
            $table->decimal('pag_ibig_fund',10,2)->nullable();
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