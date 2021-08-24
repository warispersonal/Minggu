<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nickname' , 20);
            $table->string('name' , 20);
            $table->timestamps();
        });

        DB::table('roles')->insert(['nickname'=>'SuperAdmin' , 'name'=> 'Super Admin']);
        DB::table('roles')->insert(['nickname'=>'Admin' , 'name'=> 'Admin']);
        DB::table('roles')->insert(['nickname'=>'User' , 'name'=> 'User']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
