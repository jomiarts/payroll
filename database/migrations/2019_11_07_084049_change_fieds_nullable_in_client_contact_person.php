<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFiedsNullableInClientContactPerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_contact_people', function (Blueprint $table) {
            //
           
            $table->string('position')->nullable()->change();
            $table->string('department')->nullable()->change();
            $table->string('email')->nullable()->change();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_contact_people', function (Blueprint $table) {
            //
            $table->string('position')->nullable(false)->change();
            $table->string('department')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
        });
    }
}
