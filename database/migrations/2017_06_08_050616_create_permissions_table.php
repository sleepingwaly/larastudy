<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 10)->unique()->comment('权限名称');
            $table->string('path')->unique()->comment('权限路径');
            $table->tinyInteger('is_menu')->default(0)->comment('是否为菜单');
            $table->unsignedInteger('pid')->default(0)->comment('父级id');
            $table->string('icon', 50)->comment('图标');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
