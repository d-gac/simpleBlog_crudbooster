<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePosts2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('posts', 'created_by')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('created_by');
            });
        }
        if (Schema::hasColumn('posts', 'updated_by')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('updated_by');
            });
        }
        if (Schema::hasColumn('posts', 'deleted_by')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('deleted_by');
            });
        }
        if (Schema::hasColumn('posts', 'deleted_at')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('deleted_at');
            });
        }
    }
}
