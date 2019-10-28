<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSomeFieldsToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('company_name')->nullable()->change();
            $table->string('company_address')->nullable()->change();
            $table->string('bir_tin_number')->nullable()->change();
            $table->string('peza_number')->nullable()->change();
            $table->string('official_company_no')->nullable()->change();
            $table->string('company_email')->nullable()->change();
            $table->string('position')->nullable()->change();
            $table->string('department')->nullable()->change();
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
            $table->string('company_name')->nullable(false)->change();
            $table->string('company_address')->nullable(false)->change();
            $table->string('bir_tin_number')->nullable(false)->change();
            $table->string('peza_number')->nullable(false)->change();
            $table->string('official_company_no')->nullable(false)->change();
            $table->string('company_email')->nullable(false)->change();
            $table->string('position')->nullable(false)->change();
            $table->string('department')->nullable(false)->change();
        });
    }
}
