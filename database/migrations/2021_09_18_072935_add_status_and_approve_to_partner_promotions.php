<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndApproveToPartnerPromotions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partner_promotions', function (Blueprint $table) {
            $table->bigInteger('parent_id')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partner_promotions', function (Blueprint $table) {
            $table->dropColumn('parent_id');
            $table->dropColumn('status');
        });
    }
}
