<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSomeFieldsToNotRequiredOrNull extends Migration
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
            $table->string('bir_tin_number')->nullable()->change();
            $table->string('peza_number')->nullable()->change();
            $table->string('official_company_no')->nullable()->change();
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
            $table->string('bir_tin_number')->nullable(false)->change();
            $table->string('peza_number')->nullable(false)->change();
            $table->string('official_company_no')->nullable(false)->change();
        });
    }
}
