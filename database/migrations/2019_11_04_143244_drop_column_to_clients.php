<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnToClients extends Migration
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
            $table->dropColumn('name');
            $table->dropColumn('position');
            $table->dropColumn('department');
            $table->dropColumn('email_add');
            $table->dropColumn('contact_number');
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
            $table->string('name');
            $table->string('position');
            $table->string('department');
            $table->string('email_add');
            $table->string('contact_number');
        });
    }
}
