<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('image')->after('body');
            $table->unsignedInteger('user_id')->after('image');

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        if (Schema::hasColumn('posts', 'image')) {
            $table->dropColumn('image');
        }

        if (Schema::hasColumn('posts', 'user_id')) {
            $table->dropColumn('user_id');
        }
        

    }
}
