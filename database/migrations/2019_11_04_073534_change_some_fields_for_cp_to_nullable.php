<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSomeFieldsForCpToNullable extends Migration
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
            $table->string('name')->nullable()->change();
            $table->string('email_add')->nullable()->change();
            $table->string('contact_number')->nullable()->change();
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
            $table->string('name')->nullable(false)->change();
            $table->string('email_add')->nullable(false)->change();
            $table->string('contact_number')->nullable(false)->change();
        });
    }
}
