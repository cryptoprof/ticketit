<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddInactiveCategoryColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //make value, default columns bigger
        Schema::table('ticketit_categories', function (Blueprint $table) {
            $table->boolean('is_active')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('ticketit_categories', function(Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
}
