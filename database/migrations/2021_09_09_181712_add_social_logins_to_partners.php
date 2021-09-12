<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialLoginsToPartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->text('fb');
            $table->text('insta');
            $table->text('twitter');
            $table->text('youtube');
            $table->text('website');
            $table->text('careers');
            $table->text('contact_us');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn('fb');
            $table->dropColumn('insta');
            $table->dropColumn('twitter');
            $table->dropColumn('youtube');
            $table->dropColumn('website');
            $table->dropColumn('careers');
            $table->dropColumn('contact_us');
        });
    }
}
