<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLogoToMainPrograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_programs', function (Blueprint $table) {
            $table->text('logo');
            $table->bigInteger('storage_type')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_programs', function (Blueprint $table) {
            $table->dropColumn('logo');
            $table->dropColumn('storage_type');

        });
    }
}
